<!DOCTYPE HTML>
<html>
<!--Ejercicio 10
Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 10</title>
</head>
<body>
        <?php
								$fecha = $_REQUEST ['fecha']; // 1985-03-25
								
								$ano = substr ( $fecha, 0, 4 );
								$mes = substr ( $fecha, 5, 2 );
								$dia = substr ( $fecha, - 2 );
								// echo "$fecha , $dia , $mes , $ano";
								
								$signo = "";
								$detalle = "";
								
								switch ($mes)
								{
									case 1 : // enero
										$signo = ($dia > 20) ? "Acuario" : "Capricornio";
										break;
									// ($dia > 20)? $signo = "Acuario": $signo = "Capricornio"; break;
									case 2 :
										($dia > 18) ? $signo = "Piscis" : $signo = "Acuario";
										break;
									case 3 : // marzo
										($dia > 20) ? $signo = "Aries" : $signo = "Piscis";
										break;
									case 4 :
										($dia > 20) ? $signo = "Tauro" : $signo = "Aries";
										break;
									case 5 : // mayo
										($dia > 21) ? $signo = "Géminis" : $signo = "Tauro";
										break;
									case 6 :
										($dia > 21) ? $signo = "Cáncer" : $signo = "Géminis";
										break;
									case 7 : // julio
										($dia > 22) ? $signo = "Leo" : $signo = "Cáncer";
										break;
									case 8 :
										($dia > 23) ? $signo = "Virgo" : $signo = "Leo";
										break;
									case 9 : // septiembre
										($dia > 23) ? $signo = "Libra" : $signo = "Virgo";
										break;
									case 10 :
										($dia > 22) ? $signo = "Acuario" : $signo = "Libra";
										break;
									case 11 : // noviembre
										($dia > 22) ? $signo = "Sagitario" : $signo = "Acuario";
										break;
									case 12 :
										($dia > 21) ? $signo = "Capricornio" : $signo = "Sagitario";
										break;
								}
								function mostrarDetalle($signo)
								{
									switch ($signo)
									{
										case "Aries" :
											$detalle = "Del 21 de marzo al 20 de abril";
											break;
										case "Tauro" :
											$detalle = "Del 21 de abril al 21 de mayo";
											break;
										case "Géminis" :
											$detalle = "Del 22 de mayo al 21 de junio";
											break;
										case "Cáncer" :
											$detalle = "Del 22 de junio al 22 de julio";
											break;
										case "Leo" :
											$detalle = "Del 23 de julio al 23 de agosto";
											break;
										case "Virgo" :
											$detalle = "Del 24 de agosto al 23 de septiembre";
											break;
										case "Libra" :
											$detalle = "Del 24 de septiembre al 23 de octubre";
											break;
										case "Escorpión" :
											$detalle = "Del 24 de octubre al 22 de noviembre";
											break;
										case "Sagitario" :
											$detalle = "Del 23 de noviembre al 21 de diciembre";
											break;
										case "Capricornio" :
											$detalle = "Del 22 de diciembre al 20 de enero";
											break;
										case "Acuario" :
											$detalle = "Del 21 de enero al 18 de febrero";
											break;
										case "Piscis" :
											$detalle = "Del 19 de febrero al 20 de marzo";
											break;
									}
									return $detalle;
								}
								$detalle = mostrarDetalle ( $signo );
								echo "<p> Su horoscopo es $signo ($dia-$mes-$ano)</p>" . "<p> Detalles = $detalle  </p>";
								?> 
    </p>
</body>
</html>