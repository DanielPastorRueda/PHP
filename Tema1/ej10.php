<!DOCTYPE HTML>
<html lang="es">
<!-- Ejercicio 10
Escribe un programa que pinte por pantalla una pirámide rellena a base de asteriscos. La base de la
pirámide debe estar formada por 9 asteriscos.
-->
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
    <?php
				
				// echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*";
				// echo "<br>";
				// echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp* *";
				// echo "<br>";
				// echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp* * *";
				// echo "<br>";
				// echo "&nbsp&nbsp&nbsp&nbsp&nbsp* * * *";
				// echo "<br>";
				// echo "&nbsp&nbsp&nbsp&nbsp* * * * *";
				// echo "<br>";
				// echo "&nbsp&nbsp&nbsp* * * * * *";
				// echo "<br>";
				// echo "&nbsp* * * * * * * *";
				// echo "<br>";
				// echo "* * * * * * * * *";
				
				// function crear_piramide($filas)
				// {
				// $cadena = null;
				// for ($i = 1; $i <= $filas; $i++)
				// {
				// for ($h = $i; $h <= $i; $h++)
				// {
				// $cadena .= "*";
				// }
				//
				// for ($h = $i; $h <= $i; $h++)
				// {
				// $cadena .= "*";
				// }
				// echo $cadena . "<br />";
				// }
				// }
				//
				//
				function crear_piramide($filas)
				{
					$cadena = null;
					// $espacios = intval($filas/2);
					
					for($contador = 0; $contador < $filas; $contador ++)
					{
						// pinto espacios en blanco
						for($espacios = $filas - $contador; $espacios > 0; $espacios --)
						{
							// $cadena .= "&nbsp";
							echo '&nbsp';
						}
						// pinto asteriscos
						for($pinta = $contador; $pinta <= $contador; $pinta ++)
						{
							echo '*&nbsp';
							// $cadena .= "*";
						}
						// salto hacia nueva linea
						echo '<br>';
						// echo $cadena . "<br />";
					}
				}
				
				// usar la funcion:
				crear_piramide ( 9 );
				
				?>
    
</body>
</html>