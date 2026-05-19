<?php
$base = $_POST['base'];
$altura = $_POST['altura'];
$area = $base * $altura;
echo "El area de su rectangulo es de " . $area . "cm";
echo "<br><br>";
echo '<a href="index.php">Volver</a>';
?>