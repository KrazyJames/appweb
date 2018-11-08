<?php 
$p=$_GET;
$error=false;
$resultado=0;
if (!isset($p['numero1']) ||
	!isset($p['operacion']) ||
	!isset($p['numero2']) ){
	$error = true;
}else{
	include('functions.php');
	$resultado = operacion($p['operacion'],$p['numero1'],$p['numero2']);
}
?>
<h3>Calculadora</h3>
<h4><?php echo $resultado; ?></h4>
<form action="" method="get">

	Numero 1: <input type="number" name="numero1" placeholder="Número 1"><br>
	Operacion: <input type="text" name="operacion" placeholder="Operacion"><br>
	Numero2: <input type="number" name="numero2" placeholder="Número 2"><br>
	<button type="submit" name="calcular">Calcular</button><br>
</form>