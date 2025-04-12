<?php
session_start();

$valid_username = 'admin';
$valid_password = 'heslo';

$redirect_url = $_POST['redirect'] ?? 'http://localhost:8000/php/protected/index.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['user'] = $username;
        header("Location: $redirect_url");
        exit();
    } else {
        echo '<p style="color:red;">Neplatné přihlašovací údaje</p>';
        echo '<p><a href="javascript:history.back()">Zpět</a></p>';
    }
}
?>
