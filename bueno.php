<!DOCTYPE html>
<html>
<body>
<h1>System Command Output:</h1>
<?php
$file = '/etc/passwd';
if (file_exists($file)) {
    echo "<pre>";
    // Leer y mostrar el contenido del archivo
    $content = file_get_contents($file);
    echo htmlentities($content);
    echo "</pre>";
} else {
    echo "El archivo $file no existe.";
}
?>
</body>
</html>
