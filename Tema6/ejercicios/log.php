<?php session_start(); ?>
<?php

/** Daniel Pastor Rueda.
    control de log generico:
 */
    
//if(! isset( $_REQUEST['texto'] ))
//{
	// creo variables de session para user/pass: o accedo a una BBDD
	$_SESSION['user'] = "dani";
	$_SESSION['pass'] = "1234";
	$_SESSION['logeado'] = false;

	//formUserPass(); 
//        
//        
//        
//} 

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
    
    echo 'truuuuuee';
    //sleep(5);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    
//    $nombrePag = $_SERVER ['SCRIPT_NAME'];	
//    $ruta = $_SERVER ['REQUEST_URI'];
//    $pos=strpos($ruta, 'ejercicio=' );	
//    $numEj = substr ( $ruta, ($pos + 10), 2 );
    
    
    
    //header('Location:' .$_getenv('HTTP_REFERER'));
    
    //pagina.php?ejercicio=06&comprar=barco (PREGUNTAR!!!)
    //sleep(5);
	
    //header('Location: pagina.php?ejercicio=01');
    
    
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


?>    