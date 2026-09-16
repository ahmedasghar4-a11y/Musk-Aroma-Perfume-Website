<?php
// Database credentials should be provided by the server environment.
// Never commit real passwords or API keys to GitHub.
$host = getenv('DB_HOST') ?: 'localhost';
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');
$db_name = getenv('DB_NAME');

if ($username === false || $password === false || $db_name === false) {
    die('Database configuration is missing. Set DB_USERNAME, DB_PASSWORD and DB_NAME on the server.');
}

$con = mysqli_connect($host, $username, $password, $db_name);

if (!$con) {
    die('Database connection failed.');
}

mysqli_set_charset($con, 'utf8mb4');
?>
