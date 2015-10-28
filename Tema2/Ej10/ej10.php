<!DOCTYPE HTML>
<html>
<!--Ejercicio 10
Realiza un conversor de Mb a Kb.
-->
<head>
<meta charset="UTF-8">
<title>Ejercicio 10</title>
</head>
<body>
	<p> El tamaño en Kb es : 
        <?php
								$mb = $_POST ['mb'];
								echo $mb * 1024 . " Kb";
								?> 
    </p>
</body>
</html>