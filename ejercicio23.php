<?php
$precio = $_POST['precio'];
$preciot = $precio * 1.13;
echo "El precio del producto con IVA incluido es de $" . $preciot . " dolares";
echo "<br><br>";
echo '<a href="index.php">Volver</a>';
?>