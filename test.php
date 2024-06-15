<?php
$file = '/etc/passwd';
if (file_exists($file)) {
    // Leer y mostrar el contenido del archivo
    $content = file_get_contents($file);

    // Establecer el tipo de contenido como texto plano
    header('Content-Type: text/plain');

    // No es necesario establecer Content-Disposition para mostrar en línea

    // Imprimir el contenido del archivo
    echo $content;
} else {
    echo "El archivo $file no existe.";
}
?>
