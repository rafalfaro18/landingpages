<?php
if(isset($_GET['did'])) {
	include('conexion.php');
    $delete_id = ($_GET['did']);
$mysqli->query("DELETE FROM reservas WHERE id='".$delete_id."'");

echo "<script language='javascript'>window.location='admin.php'</script>";
}else{
	echo "ERROR AL BORRAR";
}
?>