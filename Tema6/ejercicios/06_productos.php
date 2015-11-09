<?php session_start(); ?>
<!DOCTYPE html>
<!-- Psgina X template -->
<HTML>
<HEAD>
<title>Practicas de PHP</title>
<!--link href="\_Template\css\default.css" rel="stylesheet" type="text/css"-->
<link href="..\css\dpr.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<meta name="keywords" content="PHP practicas, ejemplos PHP">
<meta name="author" content="Daniel Pastor">
</HEAD>
<body>
<!-- comienzo header-->
	<HEADER>
		<h1>APRENDIENDO PHP CON EJERCICIOS</h1>
		<H2>TEMA 6</H2>
		<img src="..\img\logo.svg" alt="logo">

	</HEADER>
<!-- fin header-->
	<section>
        <h2> Detalles del producto:</h2>
<?php
//en este caso sin bbdd, cargamos nuestra variable array aqui mismo:
$productos = array (
		"dron" => array ( "descripcion" => "Octocopter DJI s1000",  "precio" => "2849.99", "imagen" => "droneA.jpg",),
		"coche" => array ( "descripcion" => "RTR SAVAGE XL OCTANO",  "precio" => "1186.99", "imagen" => "cocheB.jpg",),
		"barco" => array ( "descripcion" => "Barco anfibio Siglo",  "precio" => "1525.99", "imagen" => "barcoC.jpg",),
		"gafas" => array ( "descripcion" => "FatShark Dominator V2",  "precio" => "545.99", "imagen" => "gafasD.jpg",)
);

$producto= $_REQUEST['key'];

        foreach ($productos as $key => $prod)
        {
        	if($_REQUEST['key'] == $key)
        	{
?>                              
<!--/////////////
?>
<form class="articulos" action="<?= $nombrePag ?>" method="get">  
       <input type="hidden" name="ejercicio" value="<?= $numEj ?>">
     CAMPOS DEL FORM ----------------------------------------------------
            <div>
                <a href="06_productos.php?key=<?=$key?>">
                    <img href="pagina" src="../img/<?= $prod[imagen] ?>" height="230" width="230">
                </a>
                <div style="font-size: 15px; color: #222B00"><?= $prod[descripcion] ?></div>
                <div style="font-size: 20px; font-weight: bold; color: #88AA00"><?= $prod[precio] ?>â‚¬
                    <span style="position: relative; left: 25px; top: -2px;">
                        <input type="hidden" value="<?= $key ?>" name="comprar">
                        <input type="submit" value="Lo quiero">
                    </span>    
                </div> 
            </div>
    </form>
///////////////-->
                                <img src="../img/<?= $prod['imagen'] ?>" height="400" width="400">
				<h3>ID Articulo : <?= $key ?></h3>
				<h3>Descripción : <?= $prod['descripcion'] ?></h3>
				<h3>Precio : <?= $prod['precio'] ?></h3>
<?php
        	}
        }
        
        
	//	include $_GET['$key'] . '.php';
?>
	</section>

	<br>
	<a href="pagina.php?ejercicio=06">Volver al listado</a>
	<br>
	
<!-- comienzo footer-->
	<FOOTER>
		<p>© Daniel Pastor Rueda</p>
	</FOOTER>
<!-- fin footer-->
</body>
</HTML>