<?php session_start(); ?>
<?php  

/** Daniel Pastor Rueda. Ej 6
AmplÃ­a el programa anterior de tal forma que se pueda ver el
detalle de un producto. Se podrÃ¡n aÃ±adir productos al carrito tanto
desde la vista de listado como desde la vista de detalle.
*/
?>
<style>
section{
    margin: 20px; 
    padding: 20px; 
    display: inline-block;
    }    
.articulos{
    position: relative;
    float: left;
    display: block;
    padding: 10px;
}
#carrito
{
    position:relative; 
    float:right; 
    width: 12%;
/*    height: 800px;*/
}
#productos
{
    position:relative; 
    /*left: -90px;*/
/*    width: 75%;
    height: 800px;*/
}
</style>

<?php 
$productos = array (
    "dron" => array ( "descripcion" => "Octocopter DJI s1000",  "precio" => "2849.99", "imagen" => "droneA.jpg",),   
    "coche" => array ( "descripcion" => "RTR SAVAGE XL OCTANO",  "precio" => "1186.99", "imagen" => "cocheB.jpg",),   
    "barco" => array ( "descripcion" => "Barco anfibio Siglo",  "precio" => "1525.99", "imagen" => "barcoC.jpg",),   
    "gafas" => array ( "descripcion" => "FatShark Dominator V2",  "precio" => "545.99", "imagen" => "gafasD.jpg",)
);

    if((!isset($_REQUEST['comprar'])) && count($_SESSION['carrito']) == 0 )//or (!isset($_REQUEST['eliminar'])) )//|| count($_SESSION['carrito']) == 0 )
    {
        ?><section id="productos"><?php    
            echo"<h2>Nuestro catálogo de productos:</h2>";
            mostrarProductos($productos);
        ?></section><?php 
    }
    else //si (he recibido algo para comprar)
    {
        //si no se ha logeado, inicio session de usuario
    	if(!$_SESSION['logeado'])
    	{
    		include 'log.php';
                //header('Location: pagina.php?ejercicio=01');
                //header('Location:log.php');
    	}
    	else //puede comprar 
    	{

	        if(isset($_REQUEST[comprar]))
	        {
                    if(isset($productos[$_REQUEST[comprar]]))
                    {
                        if(isset($_SESSION[carrito][$_REQUEST[comprar]]))
                        {
                            $_SESSION[carrito][$_REQUEST[comprar]][contador]++;
                        }
                        else
                        {
                            foreach ($productos as $key => $value) 
                            {
                                if($_REQUEST['comprar'] == $key)
                                {
                                    $_SESSION['carrito'][$key]= $value;
                                    $_SESSION['carrito'][$key]['contador']=1;
                                }
                            }
                        }
                    }    
	        }// o he recibido algo para eliminar 
	        elseif(isset($_REQUEST['eliminar']))
	        {
	            foreach ($_SESSION['carrito'] as $key => $value) 
	            {
	                if($_REQUEST['eliminar'] == $key)
	                {
	                    //echo "elimino articulo";
	                    unset($_SESSION['carrito'][$key]);
	                }
	            }
	        }
	
            //mustro los articulos:
	        ?><section id="productos"><?php        
	            echo"<h2>Gracias por su compra!, ¿Desea comprar algo mas?:</h2>";
	            mostrarProductos($productos);
	
	        ?></section><?php
                    
            //muestro carrito de compra
	        ?><section id="carrito"><?php        
	            echo"<h2>Carrito de compra:</h2>";
	            $total = mostrarCarrito($_SESSION['carrito']);
	            echo"<h3> Total: $total € </h3>";
	        ?></section><?php
	
	    }
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
<form class="articulos" action="<?= $nombrePag ?>" method="get">  
       <input type="hidden" name="ejercicio" value="<?= $numEj ?>">
    <!-- CAMPOS DEL FORM ------------------------------------------------------>
            <div>
                <a href="06_productos.php?key=<?=$key?>">
                    <img href="pagina" src="../img/<?= $prod[imagen] ?>" height="230" width="230">
                </a>
                <div style="font-size: 15px; color: #222B00"><?= $prod[descripcion] ?></div>
                <div style="font-size: 20px; font-weight: bold; color: #88AA00"><?= $prod[precio] ?>€
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
    /*-- VARIABLES PARA RUTAS AUTOMATICAS ------------------------------------*/
       $nombrePag = $_SERVER['SCRIPT_NAME']; $ruta = $_SERVER['REQUEST_URI'];
       $pos = strpos($ruta, 'ejercicio=');  $numEj = substr($ruta,($pos+10),2);
   /*-- ---- cabecera -------------------------------------------------------*/
?> 
    <form form class="articulos" action="<?= $nombrePag ?>" method="get">  
        <input type="hidden" name="ejercicio" value="<?= $numEj ?>">
    <!-- CAMPOS DEL FORM ------------------------------------------------------>
        <div>
            <a href="06_productos.php?key=<?=$key?>"><img src="../img/<?= $prod[imagen] ?>" height="100" width="100"></a>
            <div style="font-size: 10px; color: #222B00"><?= $prod[descripcion] ?></div>
            <div style="font-size: 10px; color: #222B00">UNIDADES: <?= $prod[contador] ?></div>
            <div style="font-size: 15px; font-weight: bold; color: #88AA00"><?= $precio = ($prod[contador] > 1) ? ($prod[precio]*$prod[contador]) : $prod[precio]; ?>€
                <span style="position: relative; left: 4px; top: -2px;">
                        <input type="hidden" value="<?= $key ?>" name="eliminar">
                        <input type="submit" value="Quitar">
                </span>    
            </div> 
        </div>   
    </form>
<?php
    $totalPedido += $precio;
    }
    return $totalPedido;
}
