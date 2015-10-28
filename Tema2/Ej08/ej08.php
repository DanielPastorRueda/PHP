<!DOCTYPE HTML>
<html>
<!--Ejercicio 8
Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas.
Se pagarán 12 euros por hora.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 8</title>
</head>
<body>
	<p> El el salario semanal es: 
        <?php
								// dia: horas/8 ; sem L-V (dias*5)
								$jornada = 8;
								$dias = 5;
								$precioHora = 12;
								
								echo ((($_POST ['horas'] * $precioHora) / $jornada) * $dias) . "€ a la semana";
								?> 
    </p>
</body>
</html>