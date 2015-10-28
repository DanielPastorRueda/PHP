<h2>Resalta el mínimo y sus diagonales</h2>
<?php
// Genera un array con números aleatorios que no se repiten
// Primero se meten en un array lineal (todos seguidos)...
$i = 0;
do
{
	$n = rand ( 100, 999 );
	if (! in_array ( $n, $lineal )) // valor a comprobar, donde
	{
		$lineal [] = $n;
		$i ++;
	}
} while ( $i < 54 );
// ...y después se vuelca en un array de 9x6
// al mismo tiempo que se calculan las coordenadas
// del mínimo
$minimo = 999;
$i = 0;
for($x = 0; $x < 9; $x ++)
{
	for($y = 0; $y < 6; $y ++)
	{
		$numero [$x] [$y] = $lineal [$i];
		$i ++;
		if ($numero [$x] [$y] < $minimo)
		{
			$minimo = $numero [$x] [$y];
			$xMinimo = $x;
			$yMinimo = $y;
		}
	}
}

// Se muestra el array con el mínimo en azul y sus
// diagonales en verde
// Nota: abs($x) devuelve el valor absoluto de $x
echo "<table>";
for($x = 0; $x < 9; $x ++)
{
	echo "<tr>";
	for($y = 0; $y < 6; $y ++)
	{
		if ($numero [$x] [$y] == $minimo)
		{
			echo '<td><span style="color: blue; font-weight:bold">' . $numero [$x] [$y] . ' </span></td>';
		} else if (abs ( (abs ( $x ) - abs ( $xMinimo )) ) == abs ( (abs ( $y ) - abs ( $yMinimo )) ))
		{
			echo '<td><span style="color: green; font-weight:bold">' . $numero [$x] [$y] . ' </span></td>';
		} else
		{
			echo '<td>' . $numero [$x] [$y] . '</td>';
		}
	}
	echo "</tr>";
}
echo "</table>";
// $numIteracciones=15;
$numIteracciones = 3;
$array = explode ( ' ', pedirFormCiclico ( $numIteracciones ) );

echo "Array original:<br>";
echo "<table><tr>";

for($i = 0; $i < $numIteracciones; $i ++)
	echo "<td>$i</td>";

echo "</tr>";

for($i = 0; $i < $numIteracciones; $i ++)
	echo "<td>" . $array [$i] . "</td>";

echo "</tr></table>";

// Rota los elementos del array hacia la derecha

$aux = $array [($numIteracciones - 1)];

for($i = ($numIteracciones - 1); $i > 0; $i --)
	$array [$i] = $array [$i - 1];

$array [0] = $aux;

// Muestra el array rotado

echo "<br>Array rotado:<br>";
echo "<table><tr>";

for($i = 0; $i < $numIteracciones; $i ++)
	echo "<td>$i</td>";

echo "</tr>";

for($i = 0; $i < $numIteracciones; $i ++)
	echo "<td>" . $array [$i] . "</td>";

echo "</tr></table>";