<?php
// Database credentials must be provided by the server environment.
$host = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');

if ($username === false || $username === '' || $password === false || $db_name === false || $db_name === '') {
    http_response_code(500);
    exit('Database configuration is missing.');
}

$con = mysqli_connect($host, $username, $password, $db_name);

if (!$con) {
    http_response_code(500);
    exit('Database connection failed.');
}

mysqli_set_charset($con, 'utf8mb4');

// Basic browser-side security protections for every PHP page that includes this file.
header('X-Content-Type-Options: nosniff');
header('X-Frame-Options: SAMEORIGIN');
header('Referrer-Policy: strict-origin-when-cross-origin');
?>
