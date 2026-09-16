<?php
// Database credentials are supplied by the server environment.
// Never commit passwords or API keys to GitHub.
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
?>