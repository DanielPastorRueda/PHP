<!DOCTYPE HTML>
<html>
<!-- Ejercicio 2
Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se
deberá introducir por teclado.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 3</title>
</head>
<body>
	<p> Su resultado a pesetas es: 
        <?php
								$hora = 166.386;
								echo ($_POST ['pts'] / $hora) . " euros";
								?> 
    </p>
</body>
</html>