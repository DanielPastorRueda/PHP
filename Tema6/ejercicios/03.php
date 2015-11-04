<?php session_start(); ?>
<?php

/** Daniel Pastor Rueda.

Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras su suma no supere el valor 10000.
Cuando esto último ocurra, se debe mostrar el total acumulado, el
contador de los números introducidos y la media. Utiliza sesiones.
 */
    

if (! isset ( $_REQUEST ['number'] ))
{
	// $_creo variables de session:
	$_SESSION ['suma'] = 0;
	$_SESSION ['contador'] = 0;
	$_SESSION ['numeros'] = array();
        
	$num = 0;

	myForm ();
        
} elseif ($_SESSION ['suma'] < 10000) // he recibido el form:
{
	$num = $_REQUEST ['number'];
	$_SESSION ['suma'] += $num;
	$_SESSION ['contador'] ++;

	myForm ();


} else // ($_SESSION ['suma'] > 10000)
{
	$num = $_REQUEST ['number'];
	$_SESSION ['suma'] += $num;
	$_SESSION ['contador'] ++;
	
	echo "Total acumulado = " . $_SESSION ['suma'];
	echo "<br>";
	$media = ($_SESSION ['suma'] / $_SESSION ['contador']);
	echo "<br>";
	echo "Media = " . $media;
}
function myForm()
{
/* -- VARIABLES PARA RUTAS AUTOMATICAS ------------------------------------ */
	$nombrePag = $_SERVER ['SCRIPT_NAME'];	$ruta = $_SERVER ['REQUEST_URI'];
	$pos=strpos($ruta, 'ejercicio=' );	$numEj = substr ( $ruta, ($pos + 10), 2 );
/* -- ---- cabecera ------------------------------------------------------- */
?>
<form action="<?= $nombrePag ?>" method="get">
	<input type="hidden" name="ejercicio" value="<?= $numEj ?>">
<!-- CAMPOS DEL FORM ------------------------------------------------------>

	<input type="number" name="number" autofocus="autofocus"><br>

<!-- ---------------------------------------------------------------------->
	<input type="submit" value="Aceptar">
</form>
<?php
}


?>    