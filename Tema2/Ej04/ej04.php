<!DOCTYPE HTML>
<html>
<!-- Ejercicio 4
Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 4</title>
</head>
<body>
	<p> Las operaciones de  suma, resta, multiplicacion y división posibles son:
        <?php
								$a = $_POST ['numA'];
								$b = $_POST ['numB'];
								
								// $a = $_REQUEST[ 'numA' ];
								// $b = $_REQUEST[ 'numB' ];
								
								echo "<br>";
								echo "$a + $b es igual a " . ($a + $b) . "<br>";
								echo "$a - $b es igual a " . ($a - $b) . "<br>";
								echo "$b - $a es igual a " . ($b - $a) . "<br>";
								echo "$a x $b es igual a " . ($a * $b) . "<br>";
								echo "$a / $b es igual a " . ($a / $b) . "<br>";
								echo "$b / $a es igual a " . ($b / $a);
								?> 
    </p>
</body>
</html>