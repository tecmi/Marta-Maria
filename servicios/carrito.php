<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Carrito</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/styles.css">
</head>
<body class="smooth">
	<h1>Logo</h1>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<img src="../img/boda.jpg" alt="Decoración 1">
			</div>
			<div class="col-md-4">
				<h2>Decoración 1</h2>
			</div>
			<div class="col-md-1">
				<h3>$40.00</h3>
			</div>
		</div>
		<div class="row">
			<form action="main.php" method="post">
				<div class="input-group">
					<input type="number" class="form-control" placeholder="Número de arreglos" aria-describedby="basic-addon1" name="cantidad">					
				</div>
				<div class="input-group">
					<input type="submit" class="btn btn-primary" aria-describedby="basic-addon1" name="agregar">					
				</div>
				<div class="input-group">
					<input type="submit" class="btn btn-success" aria-describedby="basic-addon1" name="finalizar">					
				</div>
			</form>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>