<?php session_start(); ?>
<?php

/*
 * Daniel Pastor Rueda.
 
Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo 
y nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares.
El número negativo sólo se utiliza para indicar el final de la
introducción de datos pero no se incluye en el cómputo. Utiliza sesiones.
 */

if (! isset ( $_REQUEST ['number'] ))
{
	// $_creo variables de session:
	$_SESSION ['arrayPar'] = array();
	$_SESSION ['arrayImpar'] = array();
	$num = 0;
	
	myForm();
} 
elseif ($_REQUEST['number'] > 0) // he recibido el form:
{
	$num = $_REQUEST ['number'];
	($_REQUEST['number']%2 == 0) ? ($_SESSION['arrayPar'][]=$num) : ($_SESSION['arrayImpar'][]=$num);
	
	
	
	myForm();
	
// 	//DEBUGEO SESSION = array();
// 	echo "Array de pares:";
// 	print_r($_SESSION['arrayPar']);
// 	echo "<br>";
// 	echo "Media de impares:";
// 	print_r($_SESSION['arrayImpar']);
	
// 	//muestro datos durante cada iteraccion: 
// 	echo "<br>";
// 	echo "El mayor de los pares:" . $mayor;
// 	echo "<br>";
// 	echo "La media de los impares" . $mediaImpar;
// 	echo "<br>";
// 	echo "Contador (variable): " . $contador;
	
	
} else // ($num < 0)
{
	if (count($_SESSION['arrayImpar'] >0))
	{
		$SumImpar= 0;
		$contImpares= 0;
	
		foreach ($_SESSION['arrayImpar'] as $impares)
		{
			$SumImpar+= $impares;
			$contImpares++;
		}
	
		$mediaImpar = $SumImpar/$contImpares;
	}
	
	if (count($_SESSION['arrayPar'] >0))
	{
		$mayor=0;
		foreach ($_SESSION['arrayPar'] as $par)
		{
			if($par > $mayor)
				$mayor = $par;
		}
	}
	
	echo "<br>";
	echo "El mayor de los pares es : " . $mayor;
	echo "<br>";
	echo "La media de los impares es :" . $mediaImpar;

}


function myForm()
{
	/* -- VARIABLES PARA RUTAS AUTOMATICAS ------------------------------------ */
	$nombrePag = $_SERVER ['SCRIPT_NAME'];
	$ruta = $_SERVER ['REQUEST_URI'];
	$pos = strpos ( $ruta, 'ejercicio=' );
	$numEj = substr ( $ruta, ($pos + 10), 2 );
	/* -- ---- cabecera ------------------------------------------------------- */
	?>
<form action="<?= $nombrePag ?>" method="get">
	<input type="hidden" name="ejercicio" value="<?= $numEj ?>">
	<!-- CAMPOS DEL FORM ------------------------------------------------------>

	<input type="number" name="number" autofocus="autofocus"><br>

	<!-- ---------------------------------------------------------------------->
	<input type="submit" value="Aceptar">
</form><?php
}

?>