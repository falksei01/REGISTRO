<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body bgcolor="#00CCFF">
<center>
<form id="form1" name="form1" method="post" action="">
  <p>Mi agenda</p>
  <p>
    <label for="nombre">Nombre<br />
    </label>
    <input type="text" name="Nombre" id="Nombre"/>
  </p>
  <p>
    <label for="Celular">Celular</label>
  </p>
  <p>
    <input type="text" name="Celular" id="Celular" />
  </p>
  <p>
    <input type="submit" name="Enviar" id="Enviar" value="Enviar datos" />
  </p>
</form>
</center>
</body>
</html>
<?php
if (isset($_POST['enviar']))
{
echo "<br>Nombre:".$POST['Nombre'];
echo "<br>Celular:".$POST['Celular'];
}
?>