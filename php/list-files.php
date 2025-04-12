<?php
$directory = '/var/www/html/internal'; // Cesta ke složce se soubory

// Otevřete složku a načtěte všechny soubory
if (is_dir($directory)) {
    if ($handle = opendir($directory)) {
        echo "<ul>"; // Začněte seznam

        while (($file = readdir($handle)) !== false) {
            // Vynechejte speciální adresáře . a ..
            if ($file !== '.' && $file !== '..') {
                $file = basename($file);
                echo "<li><a href='download.php?file={$file}'>{$file}</a></li>";
            }
        }

        echo "</ul>"; // Uzavřete seznam
        closedir($handle);
    } else {
        echo "Nelze otevřít složku.";
    }
} else {
    echo "Složka neexistuje.";
}
?>
