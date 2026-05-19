<?php
$pal = $_POST['pal'];
$letra = mb_strlen($pal);
echo "La cantidad de letras que tiene la palabra es de " . $letra . " letras";
echo "<br><br>";
echo '<a href="index.php">Volver</a>';
?>