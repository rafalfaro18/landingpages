<?php
 
	session_start();
	if($_SESSION["logueado"] == TRUE) {
	include("conexion.php");
	$consulta = $mysqli->query("SELECT * FROM reservas");
		?>
 
		<!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Panel de administracion</title>
			<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
			<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet">
			<style type="text/css">
			body,html{
			    font-family: 'Cabin', sans-serif;
			}
				.btn-salir{
					float: right;
                    padding: 20px;
				}
				.borrar {
            width: 32px;
            margin: auto;
            display: table;
            }
            
            h1{
                text-align: center;
            }

			</style>
		</head>
		<body>
			<h1>Página de administrador</h1>
			<div class="row">
			<div class="col-sm-2 pull-right">
			<a class="btn-salir" href="salir.php"><img src="../img/exit.png"></a>
			</div>
			</div>

			  <table class="table-striped table table-inverse">
			  <thead class="thead-inverse">
            <tr class="header">
                <th>Id</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Teléfono</th>
                <th>Habitación</th>
                <th>Personas</th>
                <th>Noches</th>
                <th>Llegada</th>
                <th>Salida</th>
                <th>Número de tarjeta</th>
                <th>Vencimiento</th>
                <th>Total</th>
                 <th>BORRAR</th>
            </tr>
            </thead>
            <?php
               while ($row = mysqli_fetch_array($consulta)) {
                   echo "<tr>";
                   echo "<td>".$row[id]."</td>";
                   echo "<td>".$row[nombre]."</td>";
                   echo "<td>".$row[email]."</td>";
                   echo "<td>".$row[phone]."</td>";
                   echo "<td>".$row[accommodation]."</td>";
                   echo "<td>".$row[npeople]."</td>";
                   echo "<td>".$row[nights]."</td>";
                   echo "<td>".$row[check_in]."</td>";
                   echo "<td>".$row[check_out]."</td>";
                   echo "<td>".$row[cnumber]."</td>";
                   echo "<td>".$row[due_date]."</td>";
                   echo "<td>".$row[total]."</td>";
                    echo "<td><a href='delete.php?did=".$row[id]."'><img class='borrar' src='../img/interface.png'></a></td>";
                   echo "</tr>";
               }
            ?>
        </table>
		</body>
		</html>
 
		<?php
	} else {
		header("Location: index.php");
	}
 
 ?>