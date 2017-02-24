<!-- This is Sender Cat created by webservices -->

<?php

$nombre=$_POST['name'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$condo=$_POST['condo'];

$people=$_POST['npeople'];

$night=$_POST['nnight'];

$total=$_POST['total'];

$checkin=$_POST['startDatePicker'];

$checkout=$_POST['endDatePicker'];

$c_number=$_POST['cnumber'];

$duedate=$_POST['duedate'];





// Asunto

$titulo = 'Coffe in Costa Rica!';



// Cuerpo o mensaje



$mensaje = '

<html>

	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

	  <title></title>

	</head>



	<body>

		<p>New request from:Coffe in Costa Rica!</p>

		<table style="width: 370px;" border="1">

			<tbody>

				<tr>

					<th scope="row">Name:</th>

					<td>' .$nombre. '</td>

				</tr>



				<tr>

					<th scope="row">Email:</th>

					<td>' .$email. '</td>

				</tr>



				<tr>

					<th scope="row">Phone:</th>

					<td>' .$phone. '</td>

				</tr>

			</tbody>

		</table>

	</body>

</html>

';



// Cabecera que especifica que es un HMTL

$cabeceras  = 'MIME-Version: 1.0' . "\r\n";

$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

 

// Cabeceras adicionales

$cabeceras .= 'From:Coffee in Costa Rica' . "\r\n";

$cabeceras .= 'Reply-To: lead@stayincostarica.com'.  "\r\n";

/*$cabeceras .= 'Cc: seo@profivirtual.com' . "\r\n";*/

//$cabeceras .= 'Bcc: social@profivirtual.com' . "\r\n";







// Asunto

$titulou = 'Coffee in Costa Rica!';



// Cuerpo o mensaje



$mensajeu = '

<html>

	<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">

	  <title></title>

	</head>



	<body>

		<p>New request from:Enjoy coffee in Costa Rica!</p>

		<table style="width: 370px;" border="1">

			<tbody>

				<tr>

					<th scope="row">Name:</th>

					<td>' .$nombre. '</td>

				</tr>



				<tr>

					<th scope="row">Email:</th>

					<td>' .$email. '</td>

				</tr>



				<tr>

					<th scope="row">Phone:</th>

					<td>' .$phone. '</td>

				</tr>

			</tbody>

		</table>

	</body>

</html>

';

include("phpmailer-copy/PHPMailerAutoload.php");

// Cabecera que especifica que es un HMTL

$cabecerasu  = 'MIME-Version: 1.0' . "\r\n";

$cabecerasu .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";


// Cabeceras adicionales

$cabecerasu .= 'From:Stay in Costa Rica' . "\r\n";

$cabecerasu .= 'Reply-To: lead@stayincostarica.com'.  "\r\n";

/*$cabeceras .= 'Cc: seo@profivirtual.com' . "\r\n";*/

//$cabeceras .= 'Bcc: social@profivirtual.com' . "\r\n";



// enviamos el correo!



mail($email, $titulou, $mensajeu, $cabecerasu); //Correo Admin

mail('jorgearaya474@gmail.com', $titulo, $mensaje, $cabeceras); //Correo Admin

mail('webmaster@profimercadeo.com', $titulo, $mensaje, $cabeceras); //Correo Admin

mail('rafalfaro18@gmail.com', $titulo, $mensaje, $cabeceras); //Correo Admin



?>

<?php

include("conexion.php");



$nombre=$_POST['name'];

$email=$_POST['email'];

$phone=$_POST['phone'];

$condo=$_POST['condo'];

$people=$_POST['npeople'];

$night=$_POST['nnight'];

$total=$_POST['total'];

$checkin=$_POST['startDatePicker'];

$checkout=$_POST['endDatePicker'];

$c_number=$_POST['cnumber'];

$duedate=$_POST['duedate'];





if(isset($_POST['submit']))

{

     

 // mysqli







$result = $mysqli->query("INSERT INTO reservas(email, nombre, phone, accommodation,npeople, nights, check_in, check_out, cnumber,due_date,total) 

			VALUES ('$email','$nombre','$phone','$condo','$people','$night', '$checkin', '$checkout', '$c_number','$duedate', '$total')");

$row = $result->fetch_assoc();

echo htmlentities($row['_message']);

mysqli_close($result);

}

?>