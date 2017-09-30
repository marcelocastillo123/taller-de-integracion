<?php 
	//Conectarse con el servidor
 $conn = mysqli_connect('localhost','root','');
 if (!$conn)
 {
	 die("Conexion Fallada" . mysqli_connect_error());
 }
 else
 {
	 $base = mysqli_select_db($conn,'foro2');
	 if (!$base)
	 {
		 echo "No se Encontro la Base De datos";
		 
	 }
 }
 $clave   = $_GET['clave'];
 $correo  = $_GET['correo'];
 //Hacer la sentencia de sql
 $sql = "INSERT INTO usuario (correo,clave) VALUES ('$correo',
                                                      '$clave')";
 //Ejecutar sentencia sql
 $ejecutar =mysqli_query($conn,$sql);
 if (!$ejecutar)
 {
	 echo "Se Produjo un error";
 }
 else
 {
	 header('Location: index.php');
 }


?>