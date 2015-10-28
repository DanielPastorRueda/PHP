<!DOCTYPE html>
<html>
<!-- Ejercicio 5
Escribe un programa que utilice las variables $x y $y. 
Asignales los valores 144 y 999 respectivamente. 
A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división
y la multiplicación.
-->
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
        <?php
								$x = 144;
								$y = 999;
								echo print_r ( get_defined_vars () );
								
								echo "<br><br>";
								
								echo "x($x) + y($y) = ";
								echo $x + $y;
								
								echo "<br>";
								echo "x($x) - y($y) =";
								echo $x - $y;
								
								echo "<br>";
								echo "x * y =";
								echo $x * $y;
								echo "<br>";
								echo "x / y = " . $x / $y;
								
								?>
    </body>
</html>
