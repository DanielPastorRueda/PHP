<!DOCTYPE html>
<!-- Psgina X template -->
<HTML>
<HEAD>
<title>Ejercicios de PHP</title>
<link href="../css/dpr.css" rel="stylesheet" type="text/css">
<meta charset="UTF-8">
<meta name="author" content="Daniel Pastor">
</HEAD>
<body>
	<!-- comienzo header-->
	<HEADER>
		<h1>EJERCICIOS DE PHP</h1>
		<h2>EJERCICIO Nº <?= $_GET['ejercicio'] ?> </h2>
		<img src="../img/logo.svg" alt="logo">
	</HEADER>
	<!-- fin header-->
	<SECTION>
        <?php
								include $_GET ['ejercicio'] . '.php';
								?>
	</SECTION>

	<SECTION>
		<a href="../index.html">Volver al listado</a>
	</SECTION>
	<!-- comienzo footer-->
	<FOOTER>
		<p>© Daniel Pastor Rueda</p>
	</FOOTER>
	<!-- fin footer-->
</body>
</HTML>