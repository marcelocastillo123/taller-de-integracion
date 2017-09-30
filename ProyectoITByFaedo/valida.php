<?php


session_start();
	$clave=$_POST["clave"];
	$email=$_POST["correo"];
	
// Conexion con Base de datos
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
$sql = "SELECT correo from usuario where correo='$email'";
$sql2 = "SELECT clave from usuario where clave='$clave'";
 //Ejecutar sentencia sql
 $ejecutar =mysqli_query($conn,$sql);
 $ejecutar2 = mysqli_query($conn,$sql2);
 if (!$ejecutar and !$ejecutar2)
 {
	 echo "Se Produjo un error";
 }
 else
 {
     $correoC = mysqli_fetch_array($ejecutar);
     $claveC= mysqli_fetch_array($ejecutar2);
	 //Condicion si se cumple la conexion y la consulta
 if ($email == $correoC[0] and $clave == $claveC[0])
	{
		$_SESSION["estado"]=1;
	}
	if ($_SESSION["estado"] !=0 )
	{
		header('Location: index_iniciado.php');
	}
	else 
	{
		header('Location: inicio_secion.php');
	} 
 }
 










	
?>