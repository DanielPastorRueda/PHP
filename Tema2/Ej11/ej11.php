<!DOCTYPE HTML>
<html>
<!--Ejercicio 10
Realiza un conversor de Mb a Kb.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 11</title>
</head>
<body>
	<p> El tamaño en Mb es : 
        <?php
								$kb = $_POST ['kb'];
								echo $kb / 1024 . " Mb";
								?> 
    </p>
</body>
</html>