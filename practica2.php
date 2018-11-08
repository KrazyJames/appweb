<?php 
$p=$_POST;
print_r($p);
$nombres=array();

if (isset($p['nombres'])) {
	$nombres = $p['nombres'];
	$nombresSeparados=explode(",", $nombres);
}

function primera($nombre){
	return substr(trim($nombre), 0, 1);
}
?>
<form action="" method="post">
	<textarea name="nombres" rows="8" cols="80">Jaime Escobar, Blanca Ruiz, Joshua Gomez</textarea>
	<button type="submit" name="enviar" value="enviado">Enviar</button>
</form>
<ul>
	<?php 
	if (isset($nombresSeparados)) {
		foreach ($nombresSeparados as $key => $value) {?>
		<li><?php echo $value." empieza con: ".primera($value); ?></li>
	<?php }}else{?>
		<h2 style="color:#F00;">No se ha enviado el formulario</h2>
	<?php } ?>
</ul>
