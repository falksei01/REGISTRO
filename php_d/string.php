<?php
#front-end
echo "<form method=post>";

echo "<input type=text name=cadena placeholder='íngresa la cadena'> ";
echo "<input type=submit name=enviar>";
echo "<br><br> <input type=text name=buscar placeholder='íngresa la letra a buscar'> ";
echo "<input type=submit name=buscar letra value='Buscar letra'>";
echo "</form>";
echo "<input type=submit name=buscarletra value='stropes'>";
echo "<br><br><input type=text name=text1 placeholder='Ingresa el Texto a Reemplazar' size=40>";
echo "<br><br><input type=text name=text2 placeholder='Ingresa el Texto que deseas Reemplazar' size=40>";
echo "<input type=submit name=reemplazar value='str_replace' size=40>";
echo "</form>";

#back-end
if (isset ($_POST['enviar']))
{
	if (empty($_POST['cadena']))
	{echo "Ingresa una cadena";
	}
	else
	{
$string = $_POST['cadena'];
echo "<br> La Cadena es : $string";
echo"<br> Su longuitud es de : ".strlen($string);
echo"<br> Su numero de palabras: ".str_word_count($string);
echo"<br> Revertir cadena: ".strrev($string);
echo"<br> Convertir Mayusculas: ".strtoupper($string);
echo"<br> Convierte en Minisculas: ". strtolower($string);
echo"<br> Convierte mayusculas el primer caracter de cada palabra: ".ucwords($string);

} 
}
if (isset ($_POST['buscar letra']))
{
	if(empty($_POST['buscar']))
	{
	"<font color=red size=6>Ingresa una letra</font>";
}
else
{
	$buscar = $_POST['buscar'];
	echo "<br> La posicion de la letra es :
	".strpos($_POST['cadena'].$buscar);
}
if (isset($_POST['reemplazar']))
if (empty($_POST['cadena']) or empty ($_POST['texto1'])
or empty ($_POST['texto2']))
{
	echo "<font color=red size=6> Te Falta Ingresar Datos </font>";
}else
{
	$string =$_POST['cadena'];
	$texto1 =$_POST['texto1'];
	$texto2 =$_POST['texto2'];
	echo "<br> la cadena origen es   : $string";
	echo "<br> texto 1: $texto1";
	echo "<br> texto 2: $texto2";
	echo "<br> Nueva cadena".str_replace($texto1, $texto1, string);
}
}
?>