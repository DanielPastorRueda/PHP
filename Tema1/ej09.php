<!DOCTYPE HTML>
<html lang="ES">
<!-- Ejercicio 9
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar
almacenada en una variable.
-->
<head>
<meta charset="UTF-8">
<title>Practica 9</title>
</head>
<body>
    <?php
				$hora = 166.386;
				$pesetas = 1000;
				$resultado = $pesetas / $hora;
				?>
    
    <h1>Conversor de pesetas a euros:</h1>

	<p>
		Introduzca la cantidad e pesetas: <input align="right" type="text"
			name="euros" value=" <?php echo $pesetas; ?> Pesetas">
	</p>
	<p>Su resultado a euros es:  <?php echo $resultado; ?> Euros </p>

	<!-- Aun no sé como hacer que el valor de la variable cambie en el input input -->


</body>
</html>
mañto
