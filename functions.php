<?php

function imprimirNombre($persona=Array()){
	$result= "Hola $persona[nombre] $persona[apellido]";
	$result.=", tienes $persona[edad] años.";
	echo $result;
}

function saludar($inicial){
	switch ($inicial) {
		case 'a':
		return "Arturo";
			break;
		case 'c':
		return "Carlos";
			break;
		case 'j':
		return "Jaime";
			break;
		case 'e':
		return "Eduardo";
			break;
		default:
		return ":)";
			break;
	}
}

function operacion($op,$v1,$v2){
	switch ($op) {
		case 's':
			return $v1." + ".$v2." = ".($v1+$v2);
			break;
		case 'r':
			return $v1." - ".$v2." = ".($v1-$v2);
			break;
		case 'm':
			return $v1." * ".$v2." = ".($v1*$v2);
			break;
		case 'd':
			return $v1." / ".$v2." = ".($v1/$v2);
			break;
		case null:
			return "verifique, nulo";
			break;
		default:
			return "error al realizar la operacion, verifique";
			break;
	}
}

?>