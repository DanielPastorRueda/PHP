<!DOCTYPE HTML>
<html>
<!--Ejercicio 5
Escribe un programa que calcule el área de un rectángulo.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 5</title>
</head>
<body>
	<p> Su área es: 
        <?php
								echo ($_POST ['alto'] * $_POST ['ancho']);
								?> 
    </p>
</body>
</html>