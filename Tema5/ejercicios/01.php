<?php
/**
 * Define tres arrays de 20 números enteros cada una, con nombres "numero","cuadrado" y "cubo". 
 * 
 * Carga el array "numero" con valores aleatorios entre 0 y 100. 
 * En el array "cuadrado" se deben almacenar los cuadrados de los valores que hay en el array "numero". 
 * En el array "cubo" se deben almacenar los cubos de los valores que hay en "numero". 
 * A continuación, muestra el contenido de los tres arrays dispuestos en tres columnas. 
 */

// declaro 3 variables que seran arrays:
$numero;
$cuadrado;
$cubo;
$numIteracciones = 20;

for($contador = 0; $contador < $numIteracciones; $contador ++)
{
	// $numero[$contador] = rand(0,100);
	$numero [] = rand ( 0, 100 );
	// echo "$numero[$contador] , ";
}

foreach ( $numero as $num )
{
	$cuadrado [] = $num * $num;
	$cubo [] = pow ( $num, 3 );
}

?>
<table>
	<tr>
		<td>Contador</td>
		<td>Número</td>
		<td>Cuadrado</td>
		<td>Cubo</td>
	</tr>
<?php
$cont = 0;
do
{
	echo "<tr>";
	echo "<td>" . $cont . "</td>";
	echo "<td>" . $numero [$cont] . "</td>";
	echo "<td>" . $cuadrado [$cont] . "</td>";
	echo "<td>" . $cubo [$cont] . "</td>";
	echo "<tr>";
	$cont ++;
} while ( $cont < $numIteracciones );

?>
  </table>

<!--  <table>
  <tr><td>Número</td><td>Cuadrado</td><td>Cubo</td></tr>
<?php
for($cont = 0; $cont < 20; $cont ++)
{
	echo "<tr>";
	echo "<td>" . $numero [$cont] . "</td>";
	echo "<td>" . $cuadrado [$cont] . "</td>";
	echo "<td>" . $cubo [$cont] . "</td>";
	echo "</tr>";
}

?>
  </table>-->

