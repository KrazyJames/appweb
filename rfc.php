<?php 
$p=$_POST;
$persona = array();

function getRFC($nombreCompleto,$fechaNacimiento){
	$rfc="";
	$rfc.=substr($nombreCompleto[1], 0, 1);
	$vocalInterna=getVocal(substr($nombreCompleto[1], 1));
	$rfc.=$vocalInterna;
	$rfc.=substr($nombreCompleto[2], 0, 1);
	$rfc.=substr($nombreCompleto[0], 0, 1);
	$rfc.=substr($fechaNacimiento[2], 2);
	$rfc.=$fechaNacimiento[1];
	$rfc.=$fechaNacimiento[0];
	$rfc.= "-xxx";
	return strtoupper($rfc);
}

function normaliza ($cadena){
    $originales = 'ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝÞßàáâãäåæçèéêëìíîïðñòóôõöøùúûýýþÿŔŕ';
    $modificadas = 'aaaaaaaceeeeiiiidnoooooouuuuybsaaaaaaaceeeeiiiidnoooooouuuyybyRr';
    $cadena = utf8_decode($cadena);
    $cadena = strtr($cadena, utf8_decode($originales), $modificadas);
    $cadena = strtolower($cadena);
    return utf8_encode($cadena);
}

function getVocal($apellido){
	$vocales = ["a","e","i","o","u"];
	$vocal="";
	$apellido = str_split($apellido);
	foreach ($apellido as $key => $letraApellido) {
		foreach ($vocales as $key1 => $valueVocales) {
			if ($letraApellido == $valueVocales) {
				$vocal=$letraApellido;
				break 2;
			}
		}
	}
	return $vocal;
}

?>
<!DOCTYPE html>
<html>
<head lang="es-MX">
	<title>RFC</title>
	<meta charset="utf-8">
	<style>
		*{
			font-size: 120%;
			background-color: #595959;
			color: white;
		}
	</style>
</head>
<body>
	<br>
	<form align="center" action="" method="post">
		<label for="nombre">Nombre y apellido(s):</label>
		<br><br>
		<input type="text" name="nombre" placeholder="Nombre y apellido(s)">
		<br><br>
		<label for="edad">Fecha de nacimiento:</label>
		<br><br>
		<input type="text" name="fechaNac" placeholder="dd/mm/yyyy">
		<br><br>
		<input type="submit" value="Enviar">
	</form>
	<br>
	<p align="center"><?php
	if (isset($p['nombre'])&&
	isset($p['fechaNac'])) {
	$persona['nombre']= $p['nombre'];
	$persona['fechaNac']= $p['fechaNac'];
	$fechaArray=explode("/", $persona['fechaNac']);
	$nombres=explode(" ", normaliza($persona['nombre']));
	if (count($nombres)<3) {
		$nombres[2]="x";
	}else if(count($nombres)>3){
		unset($nombres[1]);
		$nombres = array_values($nombres);
	}
	echo getRFC($nombres,$fechaArray);
	}?></p>
</body>
</html>