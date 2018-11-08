<?php
#$persona=array();
#$error = false;
include ("functions.php");
#if (!isset($_GET['nombre']) 
#	|| !isset($_GET['apellido']) ){
#	$error=true;
#}else{
#	
#	$persona['nombre']= $_GET['nombre'];
#	$persona['apellido']= $_GET['apellido'];
#	$persona['edad']= $_GET['edad'];
#}
#
#
#if ($error) {
#	echo "Hay un error, alguno de los parametros no fue enviado";
#}else{
#	echo '<h1> Hola '.
#		$persona['nombre'].' '.
#		$persona['apellido']. '</h1>';
#}
#
#if (!$error) {
#	imprimirNombre($persona);
#}

$op=$_GET['op'];
$v1=$_GET['v1'];
$v2=$_GET['v2'];



echo "<br/>";

#$inicial = 'j';
#$nombreSaludo = saludar($inicial);
#echo $nombreSaludo."<br/>";
?>
<!DOCTYPE html>
<html>


<head>
	<title>Hola Mundo</title>

</head>


<body>
	<header>
		<li></li>

	</header>
	<h1>Formulario</h1>
	<form action="" method="get">
		<label for="nombre">Nombre:</label>
		<input type="text" name="nombre" placeholder="Nombre">
		<br>
		<label for="apellido">Apellido:</label>
		<input type="text" name="apellido" placeholder="Apellido">
		<br>
		<label for="edad">Edad:</label>
		<input type="text" name="edad" placeholder="Edad">
		<br>
		<input type="submit" value="Enviar">
	</form>
	<form action="" method="get">
		<label for="op">Operacion:</label>
		<input type="text" name="op" placeholder="Operacion">
		<br>
		<label for="v1">Valor 1:</label>
		<input type="text" name="v1" placeholder="Valor 1">
		<br>
		<label for="v2">Valor 2:</label>
		<input type="text" name="v2" placeholder="Valor 2">
		<br>
		<input type="submit" value="Enviar">
	</form>

	<?php 
	$resultado = operacion($op,$v1,$v2);
	echo $resultado;
	?>
	<aside>
		
	</aside>
	<footer>
		<div>
			
		</div>
	</footer>
</body>


</html>
