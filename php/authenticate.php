<?php
session_start();

// Seznam povolených uživatelů (pro jednoduchost uloženo přímo v kódu)
$users = [
    'jiri' => 'heslo',  // Uživatelské jméno => heslo
    'admin' => 'heslo',
];

// Načtení dat z formuláře
$username = $_POST['username'];
$password = $_POST['password'];

// Ověření uživatele
if (isset($users[$username]) && $users[$username] === $password) {
    // Úspěšné přihlášení
    $_SESSION['logged_in'] = true;
    header('Location: private.md');  // Přesměrování na stránku private.md
} else {
    // Neúspěšné přihlášení
    echo 'Špatné uživatelské jméno nebo heslo.';
}
?>
