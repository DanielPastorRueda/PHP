<h2>Diccionario español - inglés</h2>
<?php
if (isset ( $_GET ['palabra'] ))
{
	$palabra = $_GET ['palabra'];
	
	$diccionario = array (
			"ordenador" => "computer",
			"gato" => "cat",
			"rojo" => "red",
			"árbol" => "tree",
			"pingüino" => "penguin",
			"sol" => "sun",
			"agua" => "water",
			"viento" => "wind",
			"siesta" => "siesta",
			"arriba" => "up",
			"ratón" => "mouse",
			"estadio" => "arena",
			"calumnia" => "aspersion",
			"aguacate" => "avocado",
			"cuerpo" => "body",
			"concurso" => "contest",
			"cena" => "dinner",
			"salida" => "exit",
			"lenteja" => "lentil",
			"cacerola" => "pan",
			"pastel" => "pie",
			"membrillo" => "quince" 
	);
	
	foreach ( $diccionario as $clave => $valor )
	{
		$palabrasEspanolas [] = $clave;
	}
	
	if (in_array ( $palabra, $palabrasEspanolas ))
	{
		echo "<b>$palabra</b> en inglés es <b>" . $diccionario [$palabra] . "</b><br><br>";
	} else
	{
		echo "Lo siento, no conozco esa palabra.<br><br>";
	}
}
?>
<!--<form action="pagina.php" method="get">
  <input type="hidden" name="ejercicio" value="11">
  Palabra en español : <input type="text" name ="palabra" autofocus="" required="">
  <input type="submit" value="OK">
</form>-->
<?php
function pedirForm($nVeces, $tipoValor)
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