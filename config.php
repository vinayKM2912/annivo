<?php
define("BASE_URL", "http://localhost/aanvio/");

// Mail configuration for API
define('MAIL_URL', 'https://api.brevo.com/v3/smtp/email');
define('MAIL_API_KEY', getenv('BREVO_API_KEY') ?: 'your-brevo-api-key-here'); // Replace with actual API key

// Only include pageLoader for GET requests, not in admin area, and not for API routes
if ($_SERVER['REQUEST_METHOD'] === 'GET' &&
    strpos($_SERVER['REQUEST_URI'], '/admin') === false &&
    strpos($_SERVER['REQUEST_URI'], '/api') === false) {
    include "./elements/pageLoader.php";
}