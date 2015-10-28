<!DOCTYPE html>
<html>
<!--
    Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. 
    A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado 
    de introducir los datos cuando meta un número negativo.
    -->

<HEAD>
<title>Practicas de PHP</title>
<link href="dpr.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<meta name="keywords" content="PHP, practicas, ejemplos, ejercicios">
<meta name="author" content="Daniel Pastor">
</HEAD>
<body>
	<HEADER>
		<h1>APRENDIENDO PHP CON EJERCICIOS</h1>
		<H2>TEMA 4</H2>
		<img src="logo.svg" alt="logo" />
	</HEADER>
	<section>

<?php

// incicializo variables:
$num = 0;
$contNum = 0;
$SumaTotal = 0;
$media = 0;
$itero = null;

do
{
	$itero = false;
	
	?>
		<p>Introduzca un numero positivo, cuando introduzcas un numero
			negativo el programa devolverá la media entre positivos introducidos:</p>

		<form action="10.php" method="post">
			<input type="number" name="num" autofocus> <input type="hidden"
				name="sumaTotal" value="<?= $SumaTotal; ?>"> <input type="hidden"
				name="contNum" value="<?= ++$contNum; ?>"> <input type="submit"
				value="Aceptar">
		</form>
	<?php
	
	// con ECHO en PHP
	/**
	 * echo '<p>Introduzca un numero positivo, cuando introduzcas un numero negativo el programa devolverá la media entre positivos introducidos:</p>
	 * <form action="10.php" method="post">
	 * <input type="number" name="num" autofocus>
	 * <input type="hidden" name="sumaTotal" value="SumaTotal">
	 * <input type="hidden" name="contNum" value="contNum">
	 * <input type="submit" value="Aceptar">
	 * </form>';
	 */
	
	if (isset ( $_REQUEST ['num'] )) // si he obtenido NUM
	{
		echo "he obtenido valor de NUM";
		// recojo las variables del formulario
		$num = $_REQUEST ['num'];
		$contNum = $_REQUEST ['contNum'];
		$SumaTotal = $_REQUEST ['SumaTotal'];
		
		if ($num > 0) // si NUM es>0
		{
			echo "mayor de 0, VARIABLES:  ";
			// print_r(get_defined_vars());
			$itero = true; // mientras sean positivos, se iterará
			               
			// realizo las operaciones
			$SumaTotal += $_REQUEST ['num'];
			// $contNum++;
			$media = $SumaTotal / $contNum;
			echo "media = $media";
			echo "numeros introducidos = $contNum ";
			echo "media = $media";
		} else
		{
			$itero = false;
			echo "media = $media";
			echo "numeros introducidos = $contNum ";
			// $media = $SumaTotal/$contNum;
			echo "media = $media";
		}
	} else
	{
		echo "NO he obtenido valor de NUM";
		// incicializo variables:
		$num = 0;
		$contNum = 0;
		$SumaTotal = 0;
		$media = 0;
		$itero = null;
	}
} while ( $itero == true && $num < 0 ); // Mientras $bandera!=true

/**
 * do{
 * ?>
 * <p>Introduzca un numero positivo, cuando introduzcas un
 * numero negativo el programa devolverá la media entre positivos
 * introducidos:</p>
 * <form action="10.php" method="post">
 * <input type="number" name="num" autofocus> <input type="hidden"
 * name="sumaTotal" value="<?= $SumaTotal; ?>"> <input type="hidden"
 * name="contNum" value="<?= $contNum; ?>"> <input type="submit"
 * value="Aceptar">
 * </form>
 * <?php
 * // si se se ha recibido algun valor+ del formulario
 * // cargo los datos anteriores :
 * // relizo operaciones
 * // las muestro:
 * while ( $_REQUEST ['num'] && ($_REQUEST ['num'] > 0) );
 *
 * ?>
 *
 *
 *
 *
 *
 *
 *
 *
 * <!-- ?php (aqui y en la 55)
 * $contNum=0;
 * $SumaTotal=0;
 * $media=0;
 * $num=0;
 *
 *
 *
 *
 *
 *
 * if(isset($_REQUEST['contNum'])) //si se se ha recibido algun valor del formulario
 * {
 * $contNum= $_REQUEST['contNum'];
 *
 * if($_REQUEST['num'] < 0 )
 * {
 * $media = $SumaTotal/$contNum;
 * echo "La media obtenida es: $media";
 * }
 * else
 * {
 * $SumaTotal += $_REQUEST['num'];
 * ?>
 * <p>Introduzca un numero positivo, cuando introduzcas un numero negativo el programa devolverá la media entre positivos introducidos:</p>
 * <form action="10.php" method="post">
 * <input type="number" name="num" autofocus>
 * <input type="hidden" name="SumaTotal" value="<?= $SumaTotal; ?>">
 * <input type="hidden" name="contNum" value="<?= ++$contNum; ?>">
 * <input type="submit" value="Aceptar">
 * </form>
 * < ?php
 * }
 * }
 * else
 * {
 * $contNum=0;
 * $SumaTotal=0;
 * $media=0;
 * $num=0;
 * }
 * ? >
 *
 * <!-- section>
 * Este programa calcula la media de los números positivos introducidos.<br>
 * Vaya introduciendo números (puede parar introduciendo un número negativo).<br>
 * < ?php
 * $n = $_POST['n'];
 * $total = $_POST['total'];
 * $cuentaNumeros = $_POST['cuentaNumeros'];
 *
 * if (!isset($n) || ($n > 0))
 * {
 * $total += $n;
 * $cuentaNumeros++;
 * ?>
 * <form action="10.php" method="post">
 * <input type="number" name="n" autofocus>
 * <input type="hidden" name="total" value="< ?php echo $total; ?>">
 * <input type="hidden" name="cuentaNumeros" value="< ?php echo $cuentaNumeros; ?>">
 * <input type="submit" value="Aceptar">
 * </form>
 * < ?php
 * } else
 * {
 * ?>
 * <br><br>La media de los números introducidos es < ?php echo $total / ($cuentaNumeros - 1); ?>
 * <br><br>
 * <a href="index.html">>> Volver</a>
 *
 *
 * < ?php
 * }
 */
?>
	</section>
	<FOOTER>
		<p>© Daniel Pastor Rueda</p>
	</FOOTER>

</body>
</html>
