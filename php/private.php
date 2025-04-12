<?php
session_start();

if (!isset($_SESSION['user'])) {
    // Není přihlášen → přesměrování na login
    header('Location: /login.php');
    exit();
}

// Přihlášen → zobraz chráněný obsah
?>
<!DOCTYPE html>
<html lang="cs">
<head><meta charset="UTF-8"><title>Chráněná stránka</title></head>
<body>
<h2>Vítejte, <?= htmlspecialchars($_SESSION['user']) ?></h2>
<p>Toto je chráněný obsah.</p>
<a href="/logout.php">Odhlásit se</a>
</body>
</html>
