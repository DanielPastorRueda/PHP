<!DOCTYPE HTML>
<html>
<!--Ejercicio 9
    Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax 2 + bx + c = 0).
    -->
<head>
<meta charset="UTF-8">
<title>Ejercicio 9</title>
</head>
<body>
	<p> Los resultados de la ecuacion son : 
            <?php
$a = $_REQUEST ['valorA'];
$b = $_REQUEST ['valorB'];
$c = $_REQUEST ['valorC'];

// $disc = ($b * $b) - (4 * $a * $c); //b^2 - 4ac

/**
* Paso 1 - paso x a un lado:
* x= (- b +/- raiz(b^2 -4ac) ) /2*a
*
* Paso 2 - resulevo la resta dentro de la raiz:
* (b^2) - (4*ac)
*
* Paso 3 - Resolver la raiz de
* (b^2 -4ac)
*
* Paso 4 - Obtener denominador:
* (2*a)
*
* Paso 5: Obtener valores de x (+/-):
* (-b + "resulRaiz")/2*a
* (-b - "resulRaiz")/2*a
*/

// paso 1:

// paso2
// Exponencia = number pow ( number $base , number $exp )
// $paso2 = (pow($b, 2)) - (4*$a*$c);
// $paso2 = ($b*$b) - (4*$a*$c);
$paso2a = ($b * $b);
$paso2b = (4 * $a * $c);

// $paso2 = 49-40;
$paso2 = $paso2a - $paso2b;

// paso3
// raiz = float sqrt ( float $arg )
if ($paso2 > 0)
{
$noSolution = false;
$paso3 = sqrt ( $paso2 );
} else
{
$noSolution = true;
}
// paso4
$paso4 = 2 * $a;

// paso5
$resultado1 = ((- $b) + $paso3) / $paso4;
$resultado2 = ((- $b) - $paso3) / $paso4;

if ($noSolution == true)
{
echo "Esta ecuacion no tiene solucion";
} else
{
echo "<br> Resultado 1  = $resultado1";
echo "<br> Resultado 2  = $resultado2 </p>";
}

echo "<p> <br> --------------------------------------------------------------- ";
echo "<br> DEPURACION ERRORES: ";
echo "<br> --- VARIABLES: --- ";
echo "<br> A = $a";
echo "<br> B = $b";
echo "<br> C = $c";
echo "<br> ------------------ ";
echo "<br> Paso2a  (b^2)              = $paso2a";
echo "<br> Paso2b  (4*a*c)            = $paso2b";
echo "<br> Paso 2  ($paso2a)-($paso2b)     = $paso2";
echo "<br> ------------------ ";
echo "<br> Paso 3  (raiz de $paso2) = $paso3";
echo "<br> ------------------ ";
echo "<br> Paso 4  (2*$a)= $paso4 ";
echo "<br> ---------------------------------------------------------------</p>";

// Solucion:
// // 0x^2 + 0x + 0 = 0
// if (($a == 0) && ($b == 0) && ($c == 0))
// {
// echo "La ecuación tiene infinitas soluciones.";
// }
//
// // 0x^2 + 0x + c = 0 con c distinto de 0
// if (($a == 0) && ($b == 0) && ($c != 0))
// {
// echo "La ecuación no tiene solución.";
// }
//
//
// // ax^2 + bx + 0 = 0 con a y b distintos de 0
// if (($a != 0) && ($b != 0) && ($c == 0))
// {
// echo "x<sub>1</sub> = 0";
// echo "<br>x<sub>2</sub> = ", (-$b / $a);
// }
//
//
// // 0x^2 + bx + c = 0 con b y c distintos de 0
// if (($a == 0) && ($b != 0) && ($c != 0))
// {
// echo "x<sub>1</sub> = x<sub>2</sub> = ", (-$c / $b);
// }
//
//
// // ax^2 + bx + c = 0 con a, b y c distintos de 0
// if (($a != 0) && ($b != 0) && ($c != 0))
// {
// $discriminante = ($b * $b) - (4 * $a * $c);
//
// if ($disc < 0)
// {
// echo "La ecuación no tiene soluciones reales";
// } else
// {
// echo "<br>X<sub>1</sub> = ", (-$b + sqrt($disc)) / (4 * $a * $c);
// echo "<br>X<sub>2</sub> = ", (-$b - sqrt($disc)) / (4 * $a * $c);
// }
// }
?> 


</body>
</html>