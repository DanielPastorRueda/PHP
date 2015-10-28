
<html>
<!-- Ejercicio 3
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.
 -->
<head>
<meta charset="UTF-8">
<title>ej3</title>
</head>
<body>

	<!--<table border="2" width="50" cellspacing="1" cellpadding="10">
          <thead>
              <tr>
                  <th>colA</th>
                  <th>colB</th>
              </tr>
          </thead>
          <tbody>
          <?php
										for($cont = 1; $cont < 11; $cont ++)
										{
											?>
              <tr>
                  <td>colA<?= $cont ?></td>
                  <td>colB<?= $cont ?></td>
              </tr>
          <?php
										}
										?>
          </tbody>
      </table>
      -->
 
     <?php
					echo "<table>";
					?>
     
     <tr>
		<th>Ingles</th>
		<th>Español</th>
		</th>
	
	
	<tr>
		<td>hello</td>
		<td>hola</td>
	</tr>
	<tr>
		<td>world</td>
		<td>mundo</td>
	</tr>
	<tr>
		<td>cofee</td>
		<td>cafe</td>
	</tr>
	<tr>
		<td>milk</td>
		<td>leche</td>
	</tr>
	<tr>
		<td>beautiful</td>
		<td>precioso</td>
	</tr>
	<tr>
		<td>like</td>
		<td>gustar</td>
	</tr>
	<tr>
		<td>breakfast</td>
		<td>desayuno</td>
	</tr>
	<tr>
		<td>think</td>
		<td>pensar</td>
	</tr>
	<tr>
		<td>tomorrow</td>
		<td>mañana</td>
	</tr>
	<tr>
		<td>desktop</td>
		<td>escritorio</td>
	</tr>
     
    <?php
				echo "</table>";
    ?>
 
  </body>
</html>

