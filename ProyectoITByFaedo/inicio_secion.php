<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="HTML5 " content="hml,java,php">
<link href="css/main.css" rel="stylesheet" type="text/css" />
	<head>
		<title> Ventana 1</title>
	</head>
	<body>
		<header>
			
		</header>
	<nav>
		<ul>
			<li><a href="index.php"> Volver Menu Principal</a></li>
			<li><a href="ayuda.php"> Ayuda</a> </li>
		</ul>
	</nav>
	<!--Seccion uno parte de los Foros Nuevos-->
	<section id="section1">
		<form onsubmit="validaForm()" method="post"  action="valida.php">
			<p><u>Inicia Seccion</u></p> 
				Correo: <br>
				<input type="text" id="correo" name="correo" /> <br>
				Clave: <br>
				<input type="password" id="clave" name="clave" /><br>
				<input type="submit" name="Enviar" />
    
			</form>
        <p><a href="registrarse.html">Registrarse</a></p>
		</section>	
		<script type="text/javascript" src="js/java.js"></script>

	</body>
</html>