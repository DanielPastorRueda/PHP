<?php

/* Daniel Pastor Rueda. Ejercicio 07

Escribe un programa que guarde en una cookie el color de
fondo (propiedad <b>background-color</b>) de una página. Esta página
debe tener únicamente algo de texto y un formulario para cambiar el
color.

*/
?>  
<div id="coloreado" style="padding: 200px;">
<?php

	if (!isset($_COOKIE["color"])) 
	{
		setcookie("color", "white", time() + 3 * 24 * 3600);
		$color = "white";
	} 
	else 
	{
		$color = $_COOKIE["color"];
	}
	
	
	
	
	if (isset($_REQUEST['color'])) 
	{
		$color = $_REQUEST['color'];
		setcookie("color", $color, time() + 3 * 24 * 3600);
	}
	
	seleccionarColor();


	
	
	
	
    function seleccionarColor()
    {?>
		<form action="pagina.php" method="get">
		<input type="hidden" name="ejercicio" value="07">
		<p>Elige el color de fondo de la página.</p>      
		<input type="color" name="color" value="< ?=$color?>"><br><br>
		<input type="submit" value="Aceptar">
		</form>
<?php }?>





</div>
<script>
document.getElementById("coloreado").style.background="<?=$color?>";
</script>