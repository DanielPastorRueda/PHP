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
												
												if (! isset ( $num ))
												{
													?>
                Introduzca un número para saber si es primo o no.<br>
		<form action=16.php method="post">
			<input type="number" name="n" min="0" autofocus><br> <input
				type="submit" value="Aceptar">
		</form>
                <?php
												} else
												{
													$esPrimo = true;
													
													for($divisor = 2; $divisor < $num; $divisor ++)
													{
														if ($num % $divisor == 0)
														{
															$esPrimo = false;
														}
													}
													
													// El 0 y el 1 no se consideran primos
													if (($num == 0) || ($num == 1))
													{
														$esPrimo = false;
													}
													
													if ($esPrimo)
													{
														echo "El $num es primo.";
													} else
													{
														echo "El $num no es primo.";
													}
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
