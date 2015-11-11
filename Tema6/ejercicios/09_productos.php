<?php session_start(); ?>

        <h2> Detalles del producto:</h2>
<?php
//en este caso sin bbdd, cargamos nuestra variable array aqui mismo, 
//no puedo tirar de una session, ya que la vista de detalle incluye tambien a mis productos de tienda

$productos = array (
		"dron" => array ( "descripcion" => "Octocopter DJI s1000",  "precio" => "2849.99", "imagen" => "droneA.jpg",),
		"coche" => array ( "descripcion" => "RTR SAVAGE XL OCTANO",  "precio" => "1186.99", "imagen" => "cocheB.jpg",),
		"barco" => array ( "descripcion" => "Barco anfibio Siglo",  "precio" => "1525.99", "imagen" => "barcoC.jpg",),
		"gafas" => array ( "descripcion" => "FatShark Dominator V2",  "precio" => "545.99", "imagen" => "gafasD.jpg",),
		"dron1" => array ( "descripcion" => "Octocopter DJI s1000",  "precio" => "2849.99", "imagen" => "droneA.jpg",),
		"coche1" => array ( "descripcion" => "RTR SAVAGE XL OCTANO",  "precio" => "1186.99", "imagen" => "cocheB.jpg",),
		"barco1" => array ( "descripcion" => "Barco anfibio Siglo",  "precio" => "1525.99", "imagen" => "barcoC.jpg",),
		"gafas1" => array ( "descripcion" => "FatShark Dominator V2",  "precio" => "545.99", "imagen" => "gafasD.jpg",),
		"dron2" => array ( "descripcion" => "Octocopter DJI s1000",  "precio" => "2849.99", "imagen" => "droneA.jpg",),
		"coche2" => array ( "descripcion" => "RTR SAVAGE XL OCTANO",  "precio" => "1186.99", "imagen" => "cocheB.jpg",),
		"barco2" => array ( "descripcion" => "Barco anfibio Siglo",  "precio" => "1525.99", "imagen" => "barcoC.jpg",),
		"gafas2" => array ( "descripcion" => "FatShark Dominator V2",  "precio" => "545.99", "imagen" => "gafasD.jpg",),
);

//$producto= $_REQUEST['key'];

        foreach ($productos as $key => $prod)
        {
        	if($_REQUEST['key'] == $key)
        	{

    /*-- VARIABLES PARA RUTAS AUTOMATICAS ------------------------------------*/
       $nombrePag = $_SERVER['SCRIPT_NAME']; $ruta = $_SERVER['REQUEST_URI'];
       $pos = strpos($ruta, 'ejercicio=');  $numEj = substr($ruta,($pos+10),2);
   /*-- ---- cabecera -------------------------------------------------------*/
  ?><form class="articulos" action="<?= $nombrePag ?>" method="get">  
			<input type="hidden" name="ejercicio" value="<?= $numEj ?>">
	<!-- CAMPOS DEL FORM ------------------------------------------------------>
            <div>
                <img src="../img/<?= $prod['imagen'] ?>" height="400" width="400">
                <div style="font-size: 15px; color: #222B00"><?= $prod['descripcion'] ?></div>
                <div style="font-size: 20px; font-weight: bold; color: #88AA00"><?= $prod['precio'] ?>€
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
?>
<br>
	<a href="pagina.php?ejercicio=<?= $numEj ?>" class="volver">Volver a la tienda</a>
<br>