<?php
define("BASE_URL", "https://aanvio.gamer.gd/");
// Debug: Check BASE_URL
// echo "<!-- DEBUG BASE_URL: " . BASE_URL . " -->";
define("PROJECT_ROOT", str_replace('\\', '/', realpath(dirname(__FILE__))));

define("DOCUMENT_ROOT", str_replace('\\', '/', realpath($_SERVER['DOCUMENT_ROOT'])));

$base_path = str_replace(DOCUMENT_ROOT, '', PROJECT_ROOT);

define('BASE_URL_PATH', './' . trim($base_path, '/') . '/');

define('MAIL_URL', 'https://api.brevo.com/v3/smtp/email');
define('MAIL_API_KEY', '');
// Only include pageLoader for GET requests, not in admin area, and not for API routes
if ($_SERVER['REQUEST_METHOD'] === 'GET' &&
    strpos($_SERVER['REQUEST_URI'], '/admin') === false &&
    strpos($_SERVER['REQUEST_URI'], '/api') === false) {
    include "./elements/pageLoader.php";
}
