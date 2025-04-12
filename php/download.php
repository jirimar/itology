<?php
// Cesta k souborům (musí být mimo veřejný přístup nebo v chráněné složce)
$file_path = '/var/www/html/internal/';

// Načtení požadovaného souboru z parametru (bezpečně)
if (isset($_GET['file'])) {
    $file = basename($_GET['file']); // Ošetří nebezpečné znaky
    $full_path = $file_path . $file;

    // Zkontrolujte, zda soubor existuje
    if (file_exists($full_path)) {
        // Nastavení hlaviček pro stahování souboru
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $file . '"');
        header('Content-Length: ' . filesize($full_path));
        readfile($full_path); // Pošle obsah souboru
        exit;
    } else {
        echo 'Soubor nenalezen.';
    }
} else {
    echo 'Není zadán soubor ke stažení.';
}
?>
