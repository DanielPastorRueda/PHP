<?php session_start(); ?>
<?php

/** Daniel Pastor Rueda.
4 - Establece un control de acceso mediante nombre de usuario y contraseña para 
cualquiera de los programas de la relación anterior.

La aplicación no nos dejará continuar hasta que iniciemos sesión con
un nombre de usuario y contraseña correctos.

 */
    

if (! isset ( $_REQUEST['texto'] ))
{
	// creo variables de session para user/pass:
	$_SESSION['user'] = "dani";
	$_SESSION['pass'] = "1234";
	$_SESSION['logeado'] = false;

	formUserPass();
        
} elseif(  ($_REQUEST['texto'] == $_SESSION['user']) 
		 &&($_REQUEST['pass']  == $_SESSION['pass']) )
{
    
	echo "<br>";
	echo "Bienvenido " . ucwords($_SESSION['user']);
	$_SESSION['logeado'] = true;
        
	//sleep(5);
	header('Location: pagina.php?ejercicio=01');




}
else // datos incorrectos
{

	echo "<br>";
	echo "Datos incorrectos, Introduzca nuevamente para acceder: ";
	
	formUserPass();
	
}
function formUserPass()
{
/* -- VARIABLES PARA RUTAS AUTOMATICAS ------------------------------------ */
	$nombrePag = $_SERVER ['SCRIPT_NAME'];	$ruta = $_SERVER ['REQUEST_URI'];
	$pos=strpos($ruta, 'ejercicio=' );	$numEj = substr ( $ruta, ($pos + 10), 2 );
/* -- ---- cabecera ------------------------------------------------------- */
?>
<form action="<?= $nombrePag ?>" method="get">
	<input type="hidden" name="ejercicio" value="<?= $numEj ?>">
<!-- CAMPOS DEL FORM ------------------------------------------------------>

	Nombre de usuario <input type="text" name="texto" autofocus="autofocus"><br>
	Contraseña <input type="password" name="pass" autofocus="autofocus"><br>
<!-- ---------------------------------------------------------------------->
	<input type="submit" value="Aceptar">
</form>
<?php
}


?>    