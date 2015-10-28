<!DOCTYPE HTML>
<html>
<!--Ejercicio 6
Escribe un programa que calcule el área de un triángulo.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 6</title>
</head>
<body>
	<p> Su área es: 
        <?php
								echo (($_POST ['alto'] * $_POST ['ancho']) / 2);
								?> 
    </p>
</body>
</html>