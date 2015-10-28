<!DOCTYPE HTML>
<html>
<!--Ejercicio 13
Escribe un programa que ordene tres números enteros introducidos por teclado, solo con ternarios.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 13</title>
</head>
<body>
        <?php
								$num1 = $_REQUEST ['num1'];
								$num2 = $_REQUEST ['num2'];
								$num3 = $_REQUEST ['num3'];
								$salida = "";
								
								// ERROR, la salida no es correcta:
								// ($num1 <= $num2 && $num2 <= $num3 )? $salida= "$num1 ,$num2, $num3 " :
								// ($num1 <= $num3 && $num3 <= $num2 )? $salida= "$num1, $num3, $num2 " : //1,3,2
								// ($num2 <= $num1 && $num1 <= $num3 )? $salida= "$num2, $num1, $num3 " : //2,1,3
								// ($num2 <= $num3 && $num3 <= $num1 )? $salida= "$num2, $num3, $num1 " : //2,3,1
								// ($num3 <= $num1 && $num1 <= $num2 )? $salida= "$num3 ,$num1, $num2 " : //3,1,2
								// "$num3 ,$num2, $num1 "; //3,2,1
								//
								// ERROR, prueba de si ternario espera una salida y debe crearse una signacion inicial:
								// $salida= ($num1 <= $num2 && $num2 <= $num3 )? "$num1 ,$num2, $num3 " :
								// ($num1 <= $num3 && $num3 <= $num2 )? "$num1, $num3, $num2 " : //1,3,2
								// ($num2 <= $num1 && $num1 <= $num3 )? "$num2, $num1, $num3 " : //2,1,3
								// ($num2 <= $num3 && $num3 <= $num1 )? "$num2, $num3, $num1 " : //2,3,1
								// ($num3 <= $num1 && $num1 <= $num2 )? "$num3 ,$num1, $num2 " : //3,1,2
								// "$num3 ,$num2, $num1 "; //3,2,1
								
								// ERROR: Todo en una misma linea da el mismo resultado :
								// $salida= ($num1 <= $num2 && $num2 <= $num3 )? "$num1 ,$num2, $num3 " :($num1 <= $num3 && $num3 <= $num2 )? "$num1, $num3, $num2 " :($num2 <= $num1 && $num1 <= $num3 )? "$num2, $num1, $num3 " : ($num2 <= $num3 && $num3 <= $num1 )? "$num2, $num3, $num1 " :($num3 <= $num1 && $num1 <= $num2 )? "$num3 ,$num1, $num2 " :"$num3 ,$num2, $num1 ";
								
								// BIEN, Con if y else
								// if($num1 <= $num2 && $num2 <= $num3 )
								// {
								// $salida= "$num1 ,$num2, $num3 " ; //1,2,3
								// }
								// else
								// {
								// if($num1 <= $num3 && $num3 <= $num2 )
								// {
								// $salida= "$num1, $num3, $num2 " ; //1,3,2
								// }
								// else
								// {
								// if($num2 <= $num1 && $num1 <= $num3 )
								// {
								// $salida= "$num2, $num1, $num3 " ; //2,1,3
								// }
								// else
								// {
								// if($num2 <= $num3 && $num3 <= $num1 )
								// {
								// $salida= "$num2, $num3, $num1 "; //2,3,1
								// }
								// else
								// {
								// if($num3 <= $num1 && $num1 <= $num2 )
								// {
								// $salida= "$num3 ,$num1, $num2 "; //3,1,2
								// }
								// else
								// {
								// $salida= "$num3 ,$num2, $num1 "; //3,2,1
								// }
								// }
								// }
								// }
								// }
								
								// BIEN, dividido en partes
								// $menor= ($num1 <= $num2 && $num1 <= $num3)?"$num1" : (($num2 <= $num1 && $num2 <= $num3)?"$num2" : "$num3");
								//
								// $resto= ($menor == "$num1" && $num2 <= $num3)? ", $num2, $num3" :(
								// ($menor == "$num2" && $num3 <= $num2)? ", $num3, $num3" :(
								// ($menor == "$num3" && $num1 <= $num2)? ", $num1, $num2" : ", $num2, $num1"));
								// echo "Ordenados de menor a mayor ---> $menor$resto";
								
								// BIEN , CON PARENTESIS:
								$salida = ($num1 <= $num2 && $num2 <= $num3) ? "$num1 ,$num2, $num3 " : (($num1 <= $num3 && $num3 <= $num2) ? "$num1, $num3, $num2 " : ( // 1,3,2
($num2 <= $num1 && $num1 <= $num3) ? "$num2, $num1, $num3 " : ( // 2,1,3
($num2 <= $num3 && $num3 <= $num1) ? "$num2, $num3, $num1 " : ( // 2,3,1
($num3 <= $num1 && $num1 <= $num2) ? "$num3 ,$num1, $num2 " : ( // 3,1,2
"$num3 ,$num2, $num1 "))))); // 3,2,1
								
								echo "Ordenados de menor a mayor ---> $salida";
								
								// CONCLUSIONES: Los paréntesis eran la clave de que los ternarios divididos en líneas no funcionasen correctamente!
								?> 
    </p>
</body>
</html>