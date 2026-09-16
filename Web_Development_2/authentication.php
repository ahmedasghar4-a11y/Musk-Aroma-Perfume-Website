<?php
session_start();
require_once 'connection.php';

$username = trim($_POST['user'] ?? '');
$password = $_POST['pass'] ?? '';

if ($username === '' || $password === '') {
    http_response_code(400);
    exit('Username and password are required.');
}

if (strlen($username) > 100 || strlen($password) > 200) {
    http_response_code(400);
    exit('Invalid login details.');
}

$stmt = mysqli_prepare($con, 'SELECT Username, Password FROM Login WHERE Username = ? LIMIT 1');

if (!$stmt) {
    http_response_code(500);
    exit('Login service is temporarily unavailable.');
}

mysqli_stmt_bind_param($stmt, 's', $username);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$user = mysqli_fetch_assoc($result);

if ($user && password_verify($password, $user['Password'])) {
    session_regenerate_id(true);
    $_SESSION['username'] = $user['Username'];
    echo '<h1>Login successful</h1>';
} else {
    http_response_code(401);
    echo '<h1>Login failed. Invalid username or password.</h1>';
}

mysqli_stmt_close($stmt);
mysqli_close($con);
?>
