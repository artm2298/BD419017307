<html>
<head>
 <title>Realizar compra</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
 <link rel="stylesheet" href="styles.css" >
 </head>
<body>
 <div class="container">
      <form action="registrar.php" method="POST">
        <h2>Sistema de compras</h2>
        <label for="inputName" class="sr-only">Cliente</label>
        	<input type="number" name="Cliente1" id="Cliente1" class="form-control" placeholder="Numero de cliente" required>
        <label for="inputEmail" class="sr-only">Producto</label>
        	<input type="number" name="Producto1" id="Producto1" class="form-control" placeholder="Numero de producto" required>
        <label for="inputSubject" class="sr-only">Asunto</label>
        	<input type="number" name="Cantidad1" id="Cantidad1" class="form-control" placeholder="Cantidad" required>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
      </form>
</div>
 </body>
 </html>
