<head>

<title>Datos Recibidos</title>
<meta charset="UTF-8">

</head>

<body background="imagenes/chef.png">

<?php

echo("<h1><center><font size=50px>Yo te lo llevo</h1></center></font>");

$nombre=$_GET['nombre'];

echo("<h2><center><font size=30px><font color='blue'>Datos Recibidos</font></h2></center></font>");

echo"Hola <strong><font color='red'> $nombre </font></strong> <br>";
echo("Tus datos son:<br><br>");

$datos=array(
$correo=$_GET['correo'],
$contra=$_GET['contra'],
$sexo=$_GET['sex'],
);

for($i=0; $i<count($datos); $i++)
{
echo($datos[$i]."<br/><br/>");
}

?>

</body>