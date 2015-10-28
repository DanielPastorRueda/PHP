<html>
<!--   Ejercicio 4
Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP
para familiarizarte con éste último.
-->
<head>
<meta charset="UTF-8">
<title>Practica 4</title>
</head>
<body>
	<h1>Horario:</h1>



	<!-- Abro tabla con PHP -->
        <?php echo "<table>"; ?>
        <tr>
		<!-- pruebo alineacion -->
		<th>Lunes</th>
		<th>Martes</th>
		<th>Mi�rcoles</th>
		<th>Jueves</th>
		<th>Viernes</th>
	</tr>

	<!-- pruebo abrir un tr con PHP -->
        <?php echo "<tr>"; ?>
            <td>DWES</td>
	<td>DWEC</td>
	<td>DWES</td>
	<td>DWEC</td>
	<td>DIW</td>
	</tr>
	<tr>
		<td>DWES</td>
		<td>DWEC</td>
		<td>DWES</td>
		<td>DWEC</td>
		<td>DIW</td>
	</tr>
	<tr>
		<td>DWES</td>
		<td>DWEC</td>
		<td>DWES</td>
		<td>DWEC</td>
		<td>DIW</td>
	</tr>
	<!-- Cierro sin PHP -->        
        <?php
								
echo '<tr rowspan="5" align="right"> ' . '<td align="center">RECREO</td>' . '</tr>';
								?>
        <tr>
		<td>EINEM</td>
		<td>DAW</td>
		<td>HLC</td>
		<td>EINEM</td>
		<td>DIW</td>
	</tr>
	<!-- Bloques de HTML a PHP -->            
<?php

ECHO '<tr>
            <td>DIW</td>
            <td>DAW</td>
            <td>HLC</td>      
            <td>EINEM</td>
            <td>DWES</td>
        </tr>'?>
        <tr>
		<td>DIW</td>
		<td>DAW</td>
		<td>HLC</td>
		<td>EINEM</td>
		<td>DWES</td>
	</tr>
	<!-- Cierro sin PHP -->
	</table>
</body>
</html>