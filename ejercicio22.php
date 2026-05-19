<?php
$dinerito = $_POST['dinerito'];
$euro = $dinerito * 0.86;
echo "La cantidad de euros que obtiene al convertir $" . $dinerito . " dolares a euros es de €" . $euro . " euros";
echo "<br><br>";
echo '<a href="index.php">Volver</a>';
?>