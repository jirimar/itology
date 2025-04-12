<?php
session_start();

if (!isset($_SESSION['user'])) {
    echo '<!DOCTYPE html>
    <html lang="cs">
    <head><meta charset="UTF-8"><title>Přístup zamítnut</title></head>
    <body>
      <h2>Přístup odepřen</h2>
      <p>Pro zobrazení této části stránky se musíte přihlásit.</p>
    </body>
    </html>';
    exit();
}
?>
<!DOCTYPE html>
<html lang="cs">
<head><meta charset="UTF-8"><title>Chráněná sekce</title></head>
<body>
<h1>Vítejte, <?= htmlspecialchars($_SESSION['user']) ?>!</h1>
<p>Toto je chráněná část dostupná pouze přihlášeným uživatelům.</p>
<a href="/php/logout.php">Odhlásit se</a>
</body>
</html>
