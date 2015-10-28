<!DOCTYPE HTML>
<html>
<!--Ejercicio 9
Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 1/3*π r2 h.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 9</title>
</head>
<body>
	<p> El volumen de su cono es : 
        <?php
								echo round ( (M_PI * ($_POST ['radio'] ** 2) * $_POST ['alt']) / 3, 4 ) . " cm. cubicos";
								// tambien podria hacerse usando funciones: pi() y pow($var, 2)
								
								?> 
    </p>
</body>
</html>

