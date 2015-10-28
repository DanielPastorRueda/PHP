<!DOCTYPE HTML>
<html lang="ES">
<!-- Ejercicio 8
Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar
almacenada en una variable.
-->
<head>
<meta charset="UTF-8">
<title>Practica 8</title>
</head>
<body>
    <?php
				$euroApts = 166.386;
				$pesetas = 100;
				?>
    
    <h1>Conversor de euros a pesetas:</h1>

	<p>Introduzca la cantidad de euros:</p>
	<input align="right" type="text" name="euros"
		value=" <?php echo $pesetas; ?> €">
    <?php
				$resultado = $euroApts * $pesetas;
				?>
    <p>Su resultado a pesetas es:  <?php echo $resultado; ?> pesetas</p>

	<!-- Aun no s� como hacer que el valor de la variable cambie en el input input -->


</body>
</html>