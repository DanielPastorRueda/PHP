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
												$cuentaNumeros = $_POST ['cuentaNumeros'];
												$num = $_POST ['n'];
												$positivos = $_POST ['positivos'];
												
												if (! isset ( $num ))
												{
													$cuentaNumeros = 1;
													$positivos = 0;
												} else
												{
													$cuentaNumeros ++;
												}
												
												if ($num > 0)
												{
													$positivos ++;
												}
												
												if ($cuentaNumeros == 1)
												{
													echo "Este programa lee una lista de diez números y determina cuántos son positivos, ";
													echo " y cuántos son negativos.<br>";
												}
												
												if ($cuentaNumeros < 11)
												{
													?>
                <form action="13.php" method="post">
                    Número <?php echo $cuentaNumeros; ?> <input
				type="number" name="n" autofocus> <input type="hidden"
				name="cuentaNumeros" value="<?php echo $cuentaNumeros; ?>"> <input
				type="hidden" name="positivos" value="<?php echo $positivos; ?>"> <input
				type="submit" value="Aceptar">
		</form>
                <?php
												}
												
												if ($cuentaNumeros == 11)
												{
													echo "Se han introducido $positivos números positivos y ", (10 - $positivos), " números negativos.<br>";
												}
												?>
            <br>
		<br> <a href="index.html">Volver</a>
	</section>
	<FOOTER>
		<p>© Daniel Pastor Rueda</p>
	</FOOTER>
</body>
</html>
