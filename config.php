<?php
// Load environment variables from .env file
if (file_exists(__DIR__ . '/.env')) {
    $lines = file(__DIR__ . '/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue; // Skip comments
        list($name, $value) = explode('=', $line, 2);
        $name = trim($name);
        $value = trim($value);
        if (!array_key_exists($name, $_ENV)) {
            putenv(sprintf('%s=%s', $name, $value));
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
}

define("BASE_URL", "https://aanvio.com/");

// Mail configuration for API
define('MAIL_URL', 'https://api.brevo.com/v3/smtp/email');
define('MAIL_API_KEY', getenv('BREVO_API_KEY') ?: 'fallback-key-if-env-not-found'); // Replace with actual API key

// Only include pageLoader for GET requests, not in admin area, and not for API routes
if ($_SERVER['REQUEST_METHOD'] === 'GET' &&
    strpos($_SERVER['REQUEST_URI'], '/admin') === false &&
    strpos($_SERVER['REQUEST_URI'], '/api') === false) {
    include "./elements/pageLoader.php";
}