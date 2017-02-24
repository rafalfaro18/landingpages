<?php
//conexion
if(isset($_POST['enviar'])){
    

include("conexion.php");


$login = $_POST['usuario'];
$password = $_POST['password'];


$consulta = $mysqli->query("SELECT * FROM login");
$registros_encontrados = mysqli_num_rows($consulta);

if($registros_encontrados != 0){

   while($row = $consulta->fetch_object()) {

       if ($row->usuario == $login && $row->pass == $password){
           
            session_start();
             $_SESSION["logueado"] = $row->usuario;
                 header("Location: admin.php");

    }else{
        echo "<script language='javascript'>window.location='index.php'</script>";
    }
}
}

}else{
    echo "<script language='javascript'>window.location='index.php'</script>";
}
?>