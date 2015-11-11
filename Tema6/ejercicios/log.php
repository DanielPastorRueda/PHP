<?php session_start(); ?>
<style>

</style>
<?php

/** Daniel Pastor Rueda.
    control de log generico:
*/
//Cargo los datos de acceso a session, tb podría realizarse a una BBDD
	$_SESSION['user'] = "dani";
	$_SESSION['pass'] = "1234";
	$_SESSION['logeado'] = false;
	
////////////////////////////////////////////////////////////////////////	
if(!(isset($_REQUEST['iduser'])))
{
?>
    <h2 style="color: red">No estás logueado:</h2>
    <h3>Inicie session:</h3>
<?php
    formUserPass();
}    
elseif(($_REQUEST['iduser'] == $_SESSION['user']) &&($_REQUEST['idpass']  == $_SESSION['pass']))
{
    $_SESSION['logeado']=true;
    header('Location: ' . $_SERVER['HTTP_REFERER']);    //redirige a la pagina ANTERIOR

}
else{
print_r(get_defined_vars());
?>
    <h2 style="color: red">Los datos introducidos son incorrectos, </h2>
    <h3>Inicie session:</h3>
<?php      
    formUserPass();
}


if($_SESSION['logeado'])
{
?>
    <span id="log">Bienvenido : <?= ucwords($_SESSION['user'])?></span>  
<?php
}    



function formUserPass()
{
/* -- VARIABLES PARA RUTAS AUTOMATICAS ------------------------------------ */
	$nombrePag = $_SERVER ['SCRIPT_NAME'];	$ruta = $_SERVER ['REQUEST_URI'];
	$pos=strpos($ruta, 'ejercicio=' );	$numEj = substr ( $ruta, ($pos + 10), 2 );
/* -- ---- cabecera ------------------------------------------------------- */
?>
<!--        <form action="<?= $nombrePag ?>" method="get">
	<input type="hidden" name="ejercicio" value="< ?= $numEj  ?>">-->
        <form action="log.php" method="get">
<!-- CAMPOS DEL FORM ------------------------------------------------------>

	Nombre de usuario: <input type="text" name="iduser" autofocus="autofocus"><br>
	Contraseña: <input type="password" name="idpass" autofocus="autofocus"><br>
<!-- ---------------------------------------------------------------------->
	<input type="submit" value="Aceptar">
</form>
<?php
}

/////////////////////////////////////////////////////////////////////////////////////////////////
// NOTAS
/////////////////////////////////////////////////////////////////////////////////////////////////

//desde [pagina.php]+[ejercicio _*.php]+[&articulo($key)]
//<a href="pagina.php?ejercicio=<?= $numEj ? >_productos&key=<?=$key? >">


//header('Location: pagina.php?ejercicio=06');  //
//pagina.php?ejercicio=06&comprar=barco
//$_SESSION['pagina'] = "pagina.php?ejercicio=06_comprar";
// header('Location: pagina.php?ejercicio=06');  //



////hacia varias paginas (con una intermedia) se hace así: ///////////////////////////////////////////////////
//
//    //Estoy en la ---pagina A----
//    	$_SESSION['pagina']= "c.php";   				//1. guardo en session la ruta de C.php
//    	header('Location: b.php' );     				//2. dirijo hacia la B (intermedia)
//
//    //Estoy en la ---pagina B----
//
//        //realizo las acciones que desee...
//
//    	header('Location:' .$_SESSION['pagina'] );  	//3. redirige a la pagina C tras hacer las acciones en la B
//
/////////////////////////////////////////////////////////////////////////////////////////////////////////////

