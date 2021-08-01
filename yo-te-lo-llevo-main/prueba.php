<!DOCTYPE html>

<html>

<head>

<link rel="stylesheet" href="style.css">

<title> Datos Recibidos </title>
<link rel="shortcut icon" type="image/x-icon" href="imagenes/moto.ico">
<meta charset="UTF-8">

</head>

<body background="imagenes/chef.png" >

<header>

<p><img src="imagenes/moto1.jpg" alt="Batman" widht="150" height="150" img class="izquierda"/></p>
<h1> Yo te lo llevo </h1>

</header>

<br>
<br>
<br>
<br>

<?php
          $servidor="localhost";
          $usuario="root";
          $clave="";
          $basededatos="prueba";

     
  $enlace= mysqli_connect($servidor, $usuario, $clave, $basededatos);

   if(!$enlace){
                    echo"Error en la conexion con el servidor"; 

                }

        if(isset($_POST['registrarse'])){

                                       $nombre=$_POST['name'];
                                       $apaterno=$_POST['apaterno'];
                                       $amaterno=$_POST['amaterno'];
                                       $edad=$_POST['edad'];
                                       $email=$_POST['email'];
                                       $contra=$_POST['pass'];
                                       $id= rand(1,99);

     $insertarDatos= "INSERT INTO registro VALUES('$nombre','$apaterno','$amaterno',
                                                   '$edad','$email','$contra','$id')"; 

      $ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

               if(!$ejecutarInsertar){

                                                echo"Error en la linea sql";                                            

                                            }                     

                                 }

echo "<h2><center>Recibi estos datos</h2><center>";

$consulta = "SELECT * FROM registro";
$ejecutarConsulta = mysqli_query($enlace, $consulta);

$verFilas = mysqli_num_rows($ejecutarConsulta);
$fila = mysqli_fetch_array($ejecutarConsulta);

		if(!$ejecutarConsulta){
				echo"Error en la consulta";
						}else{
						if($verFilas<1){
					echo"Sin registros";
				}else{
					for($i=0; $i<=$fila; $i++){
						echo'<center><Strong><span style="color:red">
							
								'.$fila[3].'<br>
								'.$fila[0].'<br>
								'.$fila[1].'<br>
								'.$fila[2].'<br>
                                                                '.$fila[4].'<br>
								'.$fila[5].'<br>		
                                                                '.$fila[6].'<br>
									</span></Strong></center>';
				$fila = mysqli_fetch_array($ejecutarConsulta);

								}

							}
						}

?>

<center> <button onclick="location.href='http://localhost/Yo_te_lo_llevo/Menu.html'">Volver a menu</button></center>


</body>

<footer>

<p>Siguenos en nuestras redes sociales</p>
<br>
<img src="imagenes/facebook.png" alt="Batman" widht="50" height="50"/>
<img src="imagenes/twitter.png" alt="Batman" widht="50" height="50"/>
<br>
Derechos Reservados 2021 Yo te lo llevo©
<br>
Autores:
<br>
Daniel Edgar Lopez Servin
<br>
Lorena de Jesus Cirilo
<br>
Ingrid Ariana Murcio Chavez
<br>
Jair Adrian Juarez Salazar
<br>
Alejandra Annet Flores Bejarano
<br>
Jesus Armando Godinez Garcia

</footer>


</html>