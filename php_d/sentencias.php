<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sentencias de Php</title>
</head>

<body>
<h2 align="center">Sentencias de Php</h2>
<?php
//echo "Mis primeras lineas en PHP";
echo "<center>";
echo "<h2>Aprendiendo a programar en el lenguaje Php</h2>";
echo "<hr>";
echo "<img src=images/php.jpg>";
?>

<?php
#segmento de codigo en php
$variable ="PHP";
echo "<br></br>";
echo "Programando en $variable";
echo "<br></br>";
echo "Progra
mando en ". $variable;
$edad =18;
echo "<br></br>";
echo "tu edad es de".$edad;
if ($edad >=18)
{
echo "<br> Mayor de Edad";
}
else
echo "<br> Menor de Edad";
echo "<br></br>";
var_dump($variable);
echo "<br></br>";
var_dump($edad);
echo "<br></br>";


?>
<?php
class alumno {
    function alumno() {
        $this->nombre = "josue fernando flores contreras";
		 $this->matricula = 18040035;
		  $this->carrera = "tecnologias de la informacion";
    }
}

// create an object
$herbie = new alumnos();

// show object properties
echo $nombre->nombre;
echo $matricula->matricula;
echo $carrera->carrera;
?>
</body>
</html>