<?php session_start(); ?>
<!DOCTYPE html>
<!-- Psgina X template -->
<HTML>
<HEAD>
<title>Practicas de PHP</title>
<!--link href="/_Template/css/default.css" rel="stylesheet" type="text/css"-->
<link href="../css/dpr.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<meta name="keywords" content="PHP practicas, ejemplos PHP">
<meta name="author" content="Daniel Pastor">
</HEAD>

<body>
<!-- comienzo header-->
	<HEADER>
		<h1>APRENDIENDO PHP CON EJERCICIOS</h1>
		<H2>TEMA 6</H2>
		<img src="../img/logo.svg" alt="logo">
<?php
    if($_SESSION['logeado'])
    {
    ?>
                <span id="log">Bienvenido : <?= ucwords($_SESSION['user'])?></span>
    <?php 
    }
?>
	</HEADER>
<!-- fin header-->
	<section>
        <?php
			include $_GET ['ejercicio'] . '.php';
	?>
	</section>

	<br>
	<a href="../index.html" class="volver">Volver al listado</a>
	<br>
	
<!-- comienzo footer-->
	<FOOTER>
		<p>© Daniel Pastor Rueda</p>
	</FOOTER>
<!-- fin footer-->
</body>
</HTML>