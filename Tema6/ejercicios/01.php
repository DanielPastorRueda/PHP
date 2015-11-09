<?php session_start(); ?>
<?php

/*
 * Daniel Pastor Rueda.
 *
 * Escribe un programa que calcule la media de un conjunto de números positivos introducidos
 * por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario
 * indicará que ha terminado de introducir los datos cuando meta un número negativo. Utiliza
 * sesiones
 */

/** control-log EJ4*/

if($_SESSION['logeado'] == false)
{
?>
    	<h2 style="color: red">No estás logueado, acceda al ejercicio 4 para iniciar session</h2>
    	<h3>Inicie session:</h3>
<?php
			include '04.php';
}
else
{

    if (! isset ( $_REQUEST ['number'] ))
    {
            // $_creo variables de session:
            $_SESSION ['suma'] = 0;
            $_SESSION ['contador'] = 0;
            $num = 0;

            myForm ();
    } elseif ($_REQUEST ['number'] > 0) // he recibido el form:
    {
            $num = $_REQUEST ['number'];
            $_SESSION ['suma'] += $num;
            $_SESSION ['contador'] ++;

            myForm ();

//            echo "<br>";
//            echo "La suma es:" . $_SESSION ['suma'];
//            echo "<br>";
//            echo "Contador (Session): " . $_SESSION ['contador'];
//            echo "<br>";
//            echo "Contador (variable): " . $contador;
    } else // ($num < 0)
    {
            $media = ($_SESSION ['suma'] / $_SESSION ['contador']);
            echo "<br>";
            echo "Media = " . $media;
    }
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