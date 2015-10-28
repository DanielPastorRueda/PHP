<!DOCTYPE HTML>
<html>
<!-- Ejercicio 1
Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 1</title>
</head>
<body>
	<p> El resultado de multiplicar  
        <?php
								$a = $_GET ['numA'];
								$b = $_GET ['numB'];
								
								echo "$a x $b es igual a " . ($a * $b);
								?> 
        , que tengas un buen día. 
    </p>
</body>
</html>