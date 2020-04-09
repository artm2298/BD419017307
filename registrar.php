<?php //registrar.php

 $host = 'localhost';
    $dbname = 'casa';
    $username = 'root';
    $password = '';

	$query =  "CALL realiza_compra('$_POST[Cliente1]','$_POST[Producto1]','$_POST[Cantidad1]')";
 	$conn = mysqli_connect('localhost', 'root', 'mirasa','casa');
	$result = mysqli_query($conn,$query);
	echo "<center>Compra guardada con exito.</center>";

?>

<html>
<head>
 <title>Realizar compra</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 <link rel="stylesheet" href="styles.css" >
 </head>
<body>
 <div class="container">
      <form action="realiza_compra.php" method="POST">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Regresar</button>
      </form>
</div>
 </body>
 </html>
