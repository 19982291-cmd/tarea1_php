<?php
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$ciudad = $_POST['ciudad'];
echo "<center>";
echo "Su nombre es: " . $nombre;
echo "<br>";
echo "Su correo electronico es: " . $correo;
echo "<br>";
echo "Su ciudad es: " . $ciudad;
echo "</center>";
echo "<br><br>";
echo '<a href="index.php">Volver</a>';
?>