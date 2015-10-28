<!DOCTYPE HTML>
<html>
<!--Ejercicio 12
    Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en
    el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación
    obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan
    de conocimientos en las diferentes asignaturas del curso.
    -->
<head>
<meta charset="UTF-8">
<title>Ejercicio 12</title>
</head>
<body>
        <?php
								// function comprobarTest($respuestaCorrecta)
								// {
								// if ($value == $respuestaCorrecta)
								// {
								// $puntuacionGlobal = $puntuacionGlobal + 1;
								// $resultado = "CORRECTO";
								// } else
								// {
								// $puntuacionGlobal = $puntuacionGlobal - 0.5;
								// $resultado = "INCORRECTO";
								// }
								// echo "<br>PREGUNTA $pregunta . = $resultado";
								// echo "<br>PUNTOS = $puntuacionGlobal";
								// return $puntuacionGlobal;
								// }
								$puntuacionGlobal = 0.00; // muestra la puntuacion final del test.
								
								foreach ( $_REQUEST ['r'] as $pregunta => $value )
								{
									
									// echo "valor = ". $value . "pregunta =". $contador;
									switch ($pregunta)
									{
										case 1 :
											if ($value == 3)
											{
												$puntuacionGlobal = $puntuacionGlobal + 1;
												$resultado = "CORRECTO";
											} else
											{
												$resultado = "INCORRECTO";
												$puntuacionGlobal = $puntuacionGlobal - 0.5;
											}
											echo "<br>PREGUNTA $pregunta . =  $resultado";
											echo "<br>PUNTOS = $puntuacionGlobal";
											break;
										case 2 :
											if ($value == 2)
											{
												$puntuacionGlobal = $puntuacionGlobal + 1;
												$resultado = "CORRECTO";
											} else
											{
												$resultado = "INCORRECTO";
												$puntuacionGlobal = $puntuacionGlobal - 0.5;
											}
											echo "<br>PREGUNTA $pregunta . =  $resultado";
											echo "<br>PUNTOS = $puntuacionGlobal";
											break;
										case 3 :
											if ($value == 3)
											{
												$puntuacionGlobal = $puntuacionGlobal + 1;
												$resultado = "CORRECTO";
											} else
											{
												$resultado = "INCORRECTO";
												$puntuacionGlobal = $puntuacionGlobal - 0.5;
											}
											echo "<br>PREGUNTA $pregunta . =  $resultado";
											echo "<br>PUNTOS = $puntuacionGlobal";
											break;
										case 4 :
											if ($value == 3)
											{
												$puntuacionGlobal = $puntuacionGlobal + 1;
												$resultado = "CORRECTO";
											} else
											{
												$resultado = "INCORRECTO";
												$puntuacionGlobal = $puntuacionGlobal - 0.5;
											}
											echo "<br>PREGUNTA $pregunta . =  $resultado";
											echo "<br>PUNTOS = $puntuacionGlobal";
											break;
										case 5 :
											if ($value == 2)
											{
												$puntuacionGlobal = $puntuacionGlobal + 1;
												$resultado = "CORRECTO";
											} else
											{
												$resultado = "INCORRECTO";
												$puntuacionGlobal = $puntuacionGlobal - 0.5;
											}
											echo "<br>PREGUNTA $pregunta . =  $resultado";
											echo "<br>PUNTOS = $puntuacionGlobal";
											break;
										case 6 :
											if ($value == 3)
											{
												$puntuacionGlobal = $puntuacionGlobal + 1;
												$resultado = "CORRECTO";
											} else
											{
												$resultado = "INCORRECTO";
												$puntuacionGlobal = $puntuacionGlobal - 0.5;
											}
											echo "<br>PREGUNTA $pregunta . =  $resultado";
											echo "<br>PUNTOS = $puntuacionGlobal";
											break;
										case 7 :
											if ($value == 2)
											{
												$puntuacionGlobal = $puntuacionGlobal + 1;
												$resultado = "CORRECTO";
											} else
											{
												$resultado = "INCORRECTO";
												$puntuacionGlobal = $puntuacionGlobal - 0.5;
											}
											echo "<br>PREGUNTA $pregunta . =  $resultado";
											echo "<br>PUNTOS = $puntuacionGlobal";
											break;
										case 8 :
											if ($value == 3)
											{
												$puntuacionGlobal = $puntuacionGlobal + 1;
												$resultado = "CORRECTO";
											} else
											{
												$resultado = "INCORRECTO";
												$puntuacionGlobal = $puntuacionGlobal - 0.5;
											}
											echo "<br>PREGUNTA $pregunta . =  $resultado";
											echo "<br>PUNTOS = $puntuacionGlobal";
											break;
										case 9 :
											if ($value == 3)
											{
												$puntuacionGlobal = $puntuacionGlobal + 1;
												$resultado = "CORRECTO";
											} else
											{
												$resultado = "INCORRECTO";
												$puntuacionGlobal = $puntuacionGlobal - 0.5;
											}
											echo "<br>PREGUNTA $pregunta . =  $resultado";
											echo "<br>PUNTOS = $puntuacionGlobal";
											break;
										case 10 :
											if ($value == 3)
											{
												$puntuacionGlobal = $puntuacionGlobal + 1;
												$resultado = "CORRECTO";
											} else
											{
												$resultado = "INCORRECTO";
												$puntuacionGlobal = $puntuacionGlobal - 0.5;
											}
											echo "<br>PREGUNTA $pregunta . =  $resultado";
											echo "<br>PUNTOS = $puntuacionGlobal";
											break;
										// case 3:
										// ($value == 3) ? $puntuacionGlobal+=1 && $resultado = "CORRECTO": $resultado = "INCORRECTO" && $puntuacionGlobal-=0.5 ;
										// echo "PREGUNTA $pregunta . = $resultado";
										// echo "PUNTOS = $puntuacionGlobal";
										// break;
										// case 4:
										// ($value == 1) ? $puntuacionGlobal+=1 && $resultado = "CORRECTO": $resultado = "INCORRECTO" && $puntuacionGlobal-=0.5 ;
										// echo "PREGUNTA $pregunta . = $resultado";
										// echo "PUNTOS = $puntuacionGlobal";
										// break;
										// case 5:
										// $respuestaCorrecta = 2;
										// $puntuacionGlobal = comprobarTest($respuestaCorrecta);
										// break;
										// case 6:
										// $respuestaCorrecta = 3;
										// $puntuacionGlobal = comprobarTest($respuestaCorrecta);
										// break;
									}
								}
								?> 
    </p>
</body>
</html>