<?php
$file = '/etc/passwd';
if (file_exists($file)) {
    // Leer y mostrar el contenido del archivo
    $content = file_get_contents($file);
    header('Content-Type: text/plain'); // Establecer tipo de contenido como texto plano
    echo $content;
} else {
    echo "El archivo $file no existe.";
}
?>
