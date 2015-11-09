<!DOCTYPE HTML>
<html>
<!--Ejercicio 2
Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 2</title>
</head>
<body>
<?php
$hora = $_REQUEST ['hora'];

if (($hora > 0) && ($hora < 24))
{
    if (($hora > 5) && ($hora < 13)) // de 6 a 12
    {
            echo "Buenos días";
    } else if (($hora > 12) && ($hora < 21)) // de 13 a 20
    {
            echo "Buenas tardes";
    } else
    {
            echo "Buenas noches";
    }
} else
{
    echo "Introduzca la hora nuevamente (sale de los parametros de 01 a 23).";
}
?> 
</body>
</html>