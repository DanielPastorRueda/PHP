<!DOCTYPE HTML>
<html>
<!--Ejercicio 7
Escribe un programa que calcule el total de una factura a partir de la base imponible.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 7</title>
</head>
<body>
	<p> El TOTAL es: 
        <?php
								// Fórmula: total = base * (1+iva%)
								$iva = 21;
								
								echo ($_POST ['base'] * (1 + ($iva / 100))) . "€; <br> Calculado sobre el IVA de regimen general (21%)";
								?> 
    </p>
</body>
</html>