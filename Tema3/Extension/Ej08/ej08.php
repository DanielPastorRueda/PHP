<!DOCTYPE HTML>
<!--Ejercicio 8

Amplía el programa anterior para que diga la nota del boletín (insuficiente, suficiente, bien, notable
o sobresaliente).
-->
<html>

<head>
<meta charset="UTF-8">
<title>Ejercicio 8</title>
</head>
<body>
	<p> La nota media es: 
        <?php
								$media = round ( ($_POST ['nota1'] + $_POST ['nota2'] + $_POST ['nota3']) / 3, $precision = 2 );
								echo " $media, has sacado un ";
								
								if ($media >= 5)
								{
									if ($media > 8.99)
									{
										echo "sobresaliente";
									} elseif ($media > 6.99)
									{
										echo "notable";
									} elseif ($media > 5.49)
									{
										echo "bien";
									} else
									{
										echo "suficiente";
									}
								} else
								{
									echo "insuficiente";
								}
								?> 
    </p>
</body>
</html>