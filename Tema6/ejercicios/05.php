<?php session_start(); ?>
<style>
form {
    position: relative;
    float: left;
    display: inline;
    padding: 18px;
}
</style>

<?php
/** Daniel Pastor Rueda. Ej 5
Crea un carrito de la compra sencillo que permita añadir y quitar productos (tres o cuatro productos diferentes). 
De cada producto se debe conocer al menos la descripción, el precio y debe tener una imagen que lo identifique.
 */
    
$productos = array (
    "dron" => array ( "descripcion" => "Octocopter DJI s1000",  "precio" => "2.849,99 €", "imagen" => "droneA.jpg",),   
    "coche" => array ( "descripcion" => "RTR SAVAGE XL OCTANO",  "precio" => "1.186,99 €", "imagen" => "cocheB.jpg",),   
    "barco" => array ( "descripcion" => "Barco anfibio Siglo",  "precio" => "1.525,99 €", "imagen" => "barcoC.jpg",),   
    "gafas" => array ( "descripcion" => "FatShark Dominator V2",  "precio" => "545.99 €", "imagen" => "gafasD.jpg",)
);


if((!isset($_REQUEST['comprar'])) && count($_SESSION['carrito']) == 0 )//or (!isset($_REQUEST['eliminar'])) )//|| count($_SESSION['carrito']) == 0 )
{
    ?><section><?php
	echo"<h2>Nuestro catálogo de productos:</h2>";
	mostrarProductos($productos);
    ?></section><?php 
}
else
{
    if(isset($_REQUEST['comprar']))
    {
        foreach ($productos as $key => $value) 
        {
            if($_REQUEST['comprar'] == $key)
            {
                $_SESSION['carrito'][]= $value;
            }
        }
    }
    elseif(isset($_REQUEST['eliminar']))
    {
        foreach ($_SESSION['carrito'] as $key => $value) 
        {
            if($_REQUEST['eliminar'] == $key)
            {
                echo "elimino articulo";
                unset($_SESSION['carrito'][$key]);
            }
        }
    }
    
    //? ><article style=" position: relative; display: block; width: 20%; height:100%">< ?php
    ?><section style="position: relative; top:0; right: 0; float:right; width:200px;"><?php        
        echo"<h2>Carrito de compra:</h2>";
	$total = mostrarCarrito($_SESSION['carrito']);
        echo"<h3>Total: $total € </h3>";
    ?></section><?php
            
   // ? ><article style=" position:absolute; width:60%; height:100%; ">< ?php
   ?><section style="position: relative; top:0; right: 0; float:left; width:800px;"><?php        
        echo"<h2>Gracias por su compra!, ¿Desea comprar algo mas?:</h2>";
        mostrarProductos($productos);
        
    ?></section><?php

}
    

function mostrarProductos($productos)
{
    foreach ($productos as $key =>$prod) 
    {
     /*-- VARIABLES PARA RUTAS AUTOMATICAS ------------------------------------*/
        $nombrePag = $_SERVER['SCRIPT_NAME']; $ruta = $_SERVER['REQUEST_URI'];
        $pos = strpos($ruta, 'ejercicio=');  $numEj = substr($ruta,($pos+10),2);
    /*-- ---- cabecera -------------------------------------------------------*/
?>
    <form action="<?= $nombrePag ?>" method="get">  
       <input type="hidden" name="ejercicio" value="<?= $numEj ?>">
    <!-- CAMPOS DEL FORM ------------------------------------------------------>
            <div>
                <img src="../img/<?= $prod[imagen] ?>" height="230" width="230">
                <div style="font-size: 15px; color: #222B00"><?= $prod[descripcion] ?></div>
                <div style="font-size: 20px; font-weight: bold; color: #88AA00"><?= $prod[precio] ?>
                    <span style="position: relative; left: 25px; top: -2px;">
                        <input type="hidden" value="<?= $key ?>" name="comprar">
                        <input type="submit" value="Lo quiero">
                    </span>    
                </div> 
            </div>
    </form>
<?php
    }
}


function mostrarCarrito($productos)
{
    $totalPedido = 0;
    foreach ($productos as $key =>$prod) 
    {
        
        $totalPedido += $prod[precio];
    /*-- VARIABLES PARA RUTAS AUTOMATICAS ------------------------------------*/
       $nombrePag = $_SERVER['SCRIPT_NAME']; $ruta = $_SERVER['REQUEST_URI'];
       $pos = strpos($ruta, 'ejercicio=');  $numEj = substr($ruta,($pos+10),2);
   /*-- ---- cabecera -------------------------------------------------------*/
?> 
    <form action="<?= $nombrePag ?>" method="get">  
        <input type="hidden" name="ejercicio" value="<?= $numEj ?>">
    <!-- CAMPOS DEL FORM ------------------------------------------------------>
        <div>
            <img src="../img/<?= $prod[imagen] ?>" height="100" width="100">
            <div style="font-size: 10px; color: #222B00"><?= $prod[descripcion] ?></div>
            <div style="font-size: 15px; font-weight: bold; color: #88AA00"><?= $prod[precio] ?>
                <span style="position: relative; left: 4px; top: -2px;">
                        <input type="hidden" value="<?= $key ?>" name="eliminar">
                        <input type="submit" value="Quitar">
                </span>    
            </div> 
        </div>   
    </form>
<?php
    }
    return $totalPedido;
}

