<?php
define('MAIL_URL', 'https://api.brevo.com/v3/smtp/email');
define('MAIL_API_KEY', '');

/**
 * PHP Endpoint for Contact Form Submission - AJAX Version
 *
 * This script handles AJAX form submissions and returns JSON responses
 */

// Set JSON header
header('Content-Type: application/json');

// Ensure the request method is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method Not Allowed']);
    exit;
}

// Check for required configuration constants
if (!defined('MAIL_API_KEY') || !defined('MAIL_URL')) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Email API configuration is missing.']);
    exit;
}

class ContactFormHandler
{
    private string $adminEmail;
    private string $websiteName;

    public function __construct(string $adminEmail, string $websiteName)
    {
        $this->adminEmail = $adminEmail;
        $this->websiteName = $websiteName;
    }

    /**
     * Handles the contact form submission.
     * Returns JSON response instead of redirecting
     */
    public function handleSubmission(): array
    {
        try {
            $formData = $this->validateAndSanitize($_POST);
            $this->sendEmails($formData);

            return [
                'success' => true,
                'message' => 'Form submitted successfully',
                'redirectUrl' => $formData['retSuccessURL'],
            ];
        } catch (InvalidArgumentException $e) {
            error_log("Form validation failed: " . $e->getMessage());
            return [
                'success' => false,
                'message' => $e->getMessage(),
                'redirectUrl' => $formData['retFailedURL'] ?? '',
            ];
        } catch (RuntimeException $e) {
            error_log("Email sending failed: " . $e->getMessage());
            return [
                'success' => false,
                'message' => 'Failed to send email. Please try again.',
                'redirectUrl' => $_POST['retFailedURL'] ?? '',
            ];
        }
    }

    /**
     * Validates and sanitizes the form data.
     * @param array $data The raw POST data.
     * @return array The sanitized data.
     * @throws InvalidArgumentException If validation fails.
     */
    private function validateAndSanitize(array $data): array
    {
        $firstName = htmlspecialchars($data['first_name'] ?? '', ENT_QUOTES, 'UTF-8');
        $lastName = htmlspecialchars($data['last_name'] ?? '', ENT_QUOTES, 'UTF-8');
        $email = filter_var($data['email'] ?? '', FILTER_SANITIZE_EMAIL);
        $phone = htmlspecialchars($data['phone'] ?? '', ENT_QUOTES, 'UTF-8');
        $comments = htmlspecialchars($data['comments'] ?? '', ENT_QUOTES, 'UTF-8');

        // Validate required fields
        if (empty($firstName) || empty($lastName) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException('Invalid or missing first name, last name, or email address.');
        }

        if (empty($comments)) {
            throw new InvalidArgumentException('Comments field is required.');
        }

        return [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'phone' => $phone,
            'budget' => htmlspecialchars($data['budget'] ?? '', ENT_QUOTES, 'UTF-8'),
            'quantity' => htmlspecialchars($data['quantity'] ?? '', ENT_QUOTES, 'UTF-8'),
            'company' => htmlspecialchars($data['company'] ?? '', ENT_QUOTES, 'UTF-8'),
            'international_shipping' => htmlspecialchars($data['international_shipping'] ?? 'No', ENT_QUOTES, 'UTF-8'),
            'desired_arrival_date' => htmlspecialchars($data['desired_arrival_date'] ?? '', ENT_QUOTES, 'UTF-8'),
            'comments' => $comments,
            'gifting_reason' => htmlspecialchars($data['gifting_reason'] ?? '', ENT_QUOTES, 'UTF-8'),
            'industry' => htmlspecialchars($data['industry'] ?? '', ENT_QUOTES, 'UTF-8'),
            'retSuccessURL' => filter_var($data['retSuccesURL'] ?? '', FILTER_SANITIZE_URL),
            'retFailedURL' => filter_var($data['retFailedURL'] ?? '', FILTER_SANITIZE_URL),
        ];
    }

    /**
     * Sends both the admin and user emails.
     * @param array $formData The sanitized form data.
     * @throws RuntimeException If email sending fails.
     */
    private function sendEmails(array $formData): void
    {
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Api-Key: ' . MAIL_API_KEY,
                'Accept: application/json',
            ],
            CURLOPT_URL => MAIL_URL,
        ]);

        // Send admin email
        $adminPayload = $this->buildAdminEmailPayload($formData);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $adminPayload);
        $adminResponse = curl_exec($curl);
        $adminHttpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        // Send user acknowledgment email
        $userPayload = $this->buildUserEmailPayload($formData);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $userPayload);
        $userResponse = curl_exec($curl);
        $userHttpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

        curl_close($curl);

        if (!($adminHttpCode >= 200 && $adminHttpCode < 300 && $userHttpCode >= 200 && $userHttpCode < 300)) {
            $errorMessage = "Admin status: {$adminHttpCode} ({$adminResponse}). User status: {$userHttpCode} ({$userResponse}).";
            throw new RuntimeException($errorMessage);
        }
    }

    /**
     * Builds the JSON payload for the admin email.
     * @param array $data The sanitized form data.
     * @return string The JSON payload.
     */
    private function buildAdminEmailPayload(array $data): string
    {
        $textContent = "A new inquiry has been received from the website:\n\n" .
            "CONTACT INFORMATION:\n" .
            "Name: {$data['first_name']} {$data['last_name']}\n" .
            "Email: {$data['email']}\n" .
            "Phone: " . (!empty($data['phone']) ? $data['phone'] : 'N/A') . "\n" .
            "Company: " . (!empty($data['company']) ? $data['company'] : 'N/A') . "\n\n" .
            "ORDER DETAILS:\n" .
            "Budget: " . (!empty($data['budget']) ? $data['budget'] : 'N/A') . "\n" .
            "Quantity: " . (!empty($data['quantity']) ? $data['quantity'] : 'N/A') . "\n" .
            "International Shipping: {$data['international_shipping']}\n" .
            "Desired Arrival Date: " . (!empty($data['desired_arrival_date']) ? $data['desired_arrival_date'] : 'N/A') . "\n\n" .
            "ADDITIONAL INFORMATION:\n" .
            "Gifting Reason: " . (!empty($data['gifting_reason']) ? $data['gifting_reason'] : 'N/A') . "\n" .
            "Industry: " . (!empty($data['industry']) ? $data['industry'] : 'N/A') . "\n\n" .
            "COMMENTS:\n{$data['comments']}\n";

        return json_encode([
            'sender' => ['name' => $this->websiteName, 'email' => $this->adminEmail],
            'to' => [['email' => $this->adminEmail, 'name' => 'Admin']],
            'subject' => "New Inquiry from {$data['first_name']} {$data['last_name']} - " . $this->websiteName,
            'textContent' => $textContent,
        ]);
    }

    /**
     * Builds the JSON payload for the user acknowledgment email.
     * @param array $data The sanitized form data.
     * @return string The JSON payload.
     */
    private function buildUserEmailPayload(array $data): string
    {
        $htmlContent = "<html><body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
            <div style='max-width: 600px; margin: 0 auto; padding: 20px;'>
                <h2 style='color: #2c3e50;'>Thank You for Your Inquiry</h2>
                <p>Dear {$data['first_name']} {$data['last_name']},</p>
                <p>Thank you for contacting <strong>" . htmlspecialchars($this->websiteName) . "</strong>. We have received your inquiry and will get back to you shortly.</p>

                <h3 style='color: #34495e; margin-top: 30px;'>Your Submission Details:</h3>
                <div style='background-color: #f8f9fa; padding: 20px; border-radius: 5px; border-left: 4px solid #3498db;'>
                    <p><strong>Contact Information:</strong></p>
                    <p style='margin: 5px 0;'>Name: {$data['first_name']} {$data['last_name']}</p>
                    <p style='margin: 5px 0;'>Email: {$data['email']}</p>
                    <p style='margin: 5px 0;'>Phone: " . (!empty($data['phone']) ? $data['phone'] : 'N/A') . "</p>
                    <p style='margin: 5px 0;'>Company: " . (!empty($data['company']) ? $data['company'] : 'N/A') . "</p>

                    <p style='margin-top: 15px;'><strong>Order Details:</strong></p>
                    <p style='margin: 5px 0;'>Budget: " . (!empty($data['budget']) ? $data['budget'] : 'N/A') . "</p>
                    <p style='margin: 5px 0;'>Quantity: " . (!empty($data['quantity']) ? $data['quantity'] : 'N/A') . "</p>
                    <p style='margin: 5px 0;'>International Shipping: {$data['international_shipping']}</p>
                    <p style='margin: 5px 0;'>Desired Arrival Date: " . (!empty($data['desired_arrival_date']) ? $data['desired_arrival_date'] : 'N/A') . "</p>

                    <p style='margin-top: 15px;'><strong>Your Comments:</strong></p>
                    <div style='background-color: white; padding: 15px; border-radius: 3px; margin-top: 10px;'>
                        <p style='white-space: pre-wrap; margin: 0;'>{$data['comments']}</p>
                    </div>
                </div>

                <p style='margin-top: 30px;'>Our team will review your inquiry and respond within 1-2 business days.</p>

                <p style='margin-top: 30px;'>Best regards,<br>
                <strong>The " . htmlspecialchars($this->websiteName) . " Team</strong></p>

                <hr style='margin-top: 40px; border: none; border-top: 1px solid #ddd;'>
                <p style='font-size: 12px; color: #7f8c8d; margin-top: 20px;'>
                    This is an automated confirmation email. Please do not reply directly to this message.
                </p>
            </div>
        </body></html>";

        return json_encode([
            'sender' => ['name' => $this->websiteName, 'email' => $this->adminEmail],
            'to' => [['email' => $data['email'], 'name' => $data['first_name'] . ' ' . $data['last_name']]],
            'subject' => "Thank You for Contacting " . $this->websiteName,
            'htmlContent' => $htmlContent,
        ]);
    }
}

// Instantiate and run the handler
$handler = new ContactFormHandler(
    adminEmail: 'aniketteltu@gmail.com',
    websiteName: 'AANVIO'
);

$result = $handler->handleSubmission();
echo json_encode($result);
exit;