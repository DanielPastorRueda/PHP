<?php
$puntuacion = array (
		'as' => 11,
		'dos' => 0,
		'tres' => 10,
		'cuatro' => 0,
		'cinco' => 0,
		'seis' => 0,
		'siete' => 0,
		'sota' => 2,
		'caballo' => 3,
		'rey' => 4 
);

$palo = array (
		'oros',
		'copas',
		'bastos',
		'espadas' 
);

$figura = array (
		'as',
		'dos',
		'tres',
		'cuatro',
		'cinco',
		'seis',
		'siete',
		'sota',
		'caballo',
		'rey' 
);

$cartasEchadas = "";
$contadorCartasEchadas = 0;
$puntosTotales = 0;

do
{
	// creo carta al azar:
	// Palo
	$paloCarta = $palo [rand ( 0, 3 )];
	// figura
	$figuraCarta = $figura [rand ( 0, 9 )];
	// puntos
	$puntosCarta = $puntuacion [$figuraCarta];
	
	$nombreCarta = "$figuraCarta de $paloCarta";
	
	// Si NO (aguja($nombreCarta) en $pajar ($cartasEchadas))
	if (! in_array ( $nombreCarta, $cartasEchadas ))
	{
		// muestro sus puntos
		echo "$nombreCarta - $puntosCarta puntos<br>";
		// la meto al array
		$cartasEchadas [] = $nombreCarta;
		// sumo
		$contadorCartasEchadas ++;
		// calculo puntuacion total
		$puntosTotales += $puntosCarta;
	}
} while ( $contadorCartasEchadas < 10 );

echo "<br><b>Total: $puntosTotales puntos</b>";
?>    


