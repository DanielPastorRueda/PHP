<!DOCTYPE html>
<html>
<HEAD>
<title>Practicas de PHP</title>
<!--link href="\_Template\css\default.css" rel="stylesheet" type="text/css"-->
<link href="dpr.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<meta name="keywords" content="PHP practicas, ejemplos PHP">
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
$alturaIntroducida = $_POST ['alturaIntroducida'];
$figura = $_POST ['figura'];

if (! isset ( $alturaIntroducida ))
{
	?>
                <h2>Pirámide hueca</h2>
		<form action="20.php" method="post">
			Altura: <input type="number" name="alturaIntroducida" min="1"
				max="10" autofocus=""><br> Figura base: <select name="figura">
<?php
	$figura = array (
			"bolita" => "Bolita",
			"ladrillo" => "Ladrillo",
			"pinguino" => "Pingüino",
			"pina" => "Piña",
			"sol" => "Sol" 
	);
	
	foreach ( $figura as $clave => $valor )
	{
		?>
                            <option 
                                value="<?= $clave; ?>" 
                                style="
                                    background-image: url(<?= $clave ?>.png);
                                    background-repeat: no-repeat;
                                    background-size: 15px;
                                    background-position: 1px;
                                    padding-left:20px;
                            "><?= $valor ?></option>
<?php
	}
	?>
                    </select> <input type="submit" value="Aceptar">
		</form>
<?php
} else
{
	// pinta la pirámide ///////////////////////////////////////////////////////////
	$altura = 1;
	$divisor = 0;
	$espaciosPorDelante = $alturaIntroducida - 1;
	$espaciosInternos = 0;
	
	while ( $altura < $alturaIntroducida )
	{
		// inserta espacios por delante
		for($divisor = 1; $divisor <= $espaciosPorDelante; $divisor ++)
		{
			?>
                        <img src="img/blanco.png" width="36">
<?php
		}
		// pinta la línea
		?>
                    <img src="img/<?= $figura?>.png" width="36">
<?php
		for($divisor = 1; $divisor < $espaciosInternos; $divisor ++)
		{
			?>          
                        <img src="img/blanco.png" width="36">
<?php
		}
		
		if ($altura > 1)
		{
			?>
                        <img src="img/<?= $figura?>.png" width="36">
<?php
		}
		echo "<br>";
		
		$altura ++;
		$espaciosPorDelante --;
		$espaciosInternos += 2;
	} // while
	  
	// base de la pirámide
	for($divisor = 1; $divisor < $altura * 2; $divisor ++)
	{
		?>
                    <img src="img/<?= $figura?>.png" width="36">
<?php
	}
} // else
?>
            
        </section>

	<section>
		<a href="index.html">Volver</a>
	</section>
	<FOOTER>
		<p>© Daniel Pastor Rueda</p>
	</FOOTER>

</body>
</html>