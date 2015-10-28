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
												$num = $_POST ['n'];
												$suma = $_POST ['suma'];
												$numeroDeElementos = $_POST ['numeroDeElementos'];
												
												// Inicializa variables
												if (! isset ( $num ))
												{
													$suma = 0;
													$numeroDeElementos = - 1;
												}
												
												if ($suma < 10000)
												{
													$suma += $num;
													$numeroDeElementos ++;
												}
												
												if ((! isset ( $num )) || ($suma < 10000))
												{
													?>
                Introduzca un número. El programa seguirá pidiendo números mientras la suma de ellos sea inferior a 10000.<br>
		<form action="23.php" method="post">
			<input type="number" name="n" autofocus=""><br> <input type="hidden"
				name="numeroDeElementos" value="<?php echo $numeroDeElementos; ?>">
			<input type="hidden" name="suma" value="<?php echo $suma; ?>"> <input
				type="submit" value="Aceptar">
		</form>
                <?php
												}
												
												if ($suma >= 10000)
												{
													echo "Ha introducido un total de $numeroDeElementos números.<br>";
													echo "La suma total es $suma<br>";
													echo "La media es " . ($suma / $numeroDeElementos);
												}
												?>
            <br>
		<br> <a href="index.html">>> Volver</a>
	</section>
	<FOOTER>
		<p>© Daniel Pastor Rueda</p>
	</FOOTER>

</body>
</html>
