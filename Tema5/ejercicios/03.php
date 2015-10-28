<?php
/*
 * Escribe un programa que lea 15 números por teclado y que
 * los almacene en un array. Rota los elementos de ese array, es
 * decir, el elemento de la posición 0 debe pasar a la posición 1, el
 * de la 1 a la 2, etc. El número que se encuentra en la última
 * posición debe pasar a la posición 0. Finalmente, muestra el
 * contenido del array.
 */

//
function pedirFormCiclico($nVeces, $tipoValor)
{
	/* ---------------------------------------------------------------------------- */
	/*
	 * FUNCION PARA FORMULARIOS ITERATIVA, by DPR ----------------------------------
	 *
	 * IN -->
	 * $nVeces --> numero de veces que se itera el formulario.
	 * $tipoValor --> 0 (para pedir números), 1 (para pedir strings)
	 *
	 * OUT ->
	 * $cadena = entrada + ' ' ...
	 *
	 * para obtenerla usar: $array = explode(' ', pedirFormCiclico(10, 1));
	 * - if(count($array) == 10), muestrs cuando tengas 10 entradas.
	 * - foreach ($array as $n){echo '<br>' . $n;} recorrerlo.
	 * ------------------------------------------------------------------------------
	 */
	$nombrePag = $_SERVER ['SCRIPT_NAME']; // echo "<br>PAG:--> ". $nombrePag;
	$ruta = $_SERVER ['REQUEST_URI']; // echo "<br>RUTA:--> ". $ruta;
	$pos = strpos ( $ruta, 'ejercicio=' ); // echo "<br>POS de 'ejercicio=':--> ". $pos;
	$numEj = substr ( $ruta, ($pos + 10), 2 ); // echo "<br>Num del ejercicio :--> ". $numEj;
	/* ---------------------------------------------------------------------------- */
	
	if (! isset ( $_GET ['entrada'] )) // si no he obtenido del form, incializo vars
	{
		$contNum = 0;
		$cadenaComSimple = null;
	} else
	{
		$contNum = $_GET ['contNum'];
		$cadenaComSimple = $_GET ['cadenaComSimple'];
	}
	
	if ($contNum <= $nVeces)
	{
		$contNum = $_GET ['contNum'];
		$n = $_GET ['entrada'];
		$cadenaComSimple = $_GET ['cadenaComSimple'];
		
		if ($cadenaComSimple == "")
		{
			$cadenaComSimple = $n;
		} else
		{
			$cadenaComSimple = $cadenaComSimple . ' ' . $n;
		}
		
		$contNum ++;
	}
	
	if (! isset ( $_GET ['entrada'] ) || ($contNum <= $nVeces))
	{
		?>
<form action="<?= $nombrePag ?>" method="get">
	<input type="hidden" name="ejercicio" value="<?= $numEj ?>">
            <?php
		switch ($tipoValor)
		{
			case 0 :
				echo "Introduzca un número:";
				?><input type="number" name="entrada" autofocus=""
		required=""><?php
				break;
			case 1 :
				echo "Introduzca una palabra:";
				?><input type="text" name="entrada" autofocus=""
		required=""><?php
				break;
		}
		?>            
            <input type="hidden" name="cadenaComSimple"
		value="<?= $cadenaComSimple ?>"> <input type="hidden" name="contNum"
		value="<?= $contNum ?>"> <input type="submit" value="OK">
</form>
<?php
	}
	return $cadenaComSimple;
}

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
?>
