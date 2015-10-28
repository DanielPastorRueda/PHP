<!DOCTYPE HTML>
<html lang="es">
<!-- Ejercicio 11
Igual que el programa anterior, pero esta vez la pirámide estará hueca (se debe ver únicamente el
contorno hecho con asteriscos).
-->
<head>
<meta charset="UTF-8">
<title></title>
</head>
<body>
    <?php
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*";
				echo "<br />";
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*&nbsp&nbsp*";
				echo "<br />";
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp*";
				echo "<br />";
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*";
				echo "<br />";
				echo "&nbsp&nbsp&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*";
				echo "<br />";
				echo "&nbsp&nbsp&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*";
				echo "<br />";
				echo "&nbsp*&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*";
				echo "<br />";
				// echo "*&nbsp*&nbsp*&nbsp*&nbsp*&nbsp*&nbsp*&nbsp*&nbsp*";
				echo "*********";
				
				// function crear_piramide ($filas)
				// {
				// $cadena = null;
				// // $espacios = intval($filas/2);
				//
				// for ($contador = 0; $contador < $filas; $contador++)
				// {
				// //pinto espacios en blanco
				// for ($espacios = $filas - $contador; $espacios > 0; $espacios--)
				// {
				// //$cadena .= "&nbsp";
				// echo "&nbsp";
				// }
				// //pinto asteriscos
				// //si el la primera fila, pinto 1
				// if ($contador == 0)
				// {
				// $cadena .= "*<br />";
				// }
				// //si el la ultima fila, pinto toda la base
				// else if ($contador == 8)
				// {
				// $cadena .= "*********<br />";
				// }
				// else //($contador > 0 && $contador < 8)
				// {
				// //pinto el asterisco inicial
				// $cadena .= "*";
				// for ($pinta = $contador; $pinta <= $contador; $pinta++)
				// {
				// //pinto espacios
				// $cadena .= "&nbsp";
				// }
				// //pinto el asterisco final
				// $cadena .= "*";
				// }
				//
				// //salto hacia nueva linea
				// //echo "<br />";
				// echo $cadena . "<br />";
				// }
				// }
				//
				// // usar la funcion:
				// crear_piramide (9);
				//
				?>
    
</body>
</html>