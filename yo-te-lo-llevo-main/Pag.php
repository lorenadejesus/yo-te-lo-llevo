<?php

    $servidor="localhost";
          $usuario="root";
          $clave="";
          $basededatos="prueba";

     
  $enlace= mysqli_connect($servidor, $usuario, $clave, $basededatos);

   if(!$enlace){
                    echo"Error en la conexion con el servidor"; 

                }

if(isset($_POST['registro'])){

$sexo=$_POST['sexo'];
$direccion=$_POST['dire'];
$telefono=$_POST['telefono'];

$insertarDatos="INSERT INTO pagina VALUES('$sexo','$direccion','$telefono')";

$ejecutarInsertar= mysqli_query($enlace, $insertarDatos);

if(!$ejecutarInsertar){

echo "Error en la linea sql";




}


}

?>