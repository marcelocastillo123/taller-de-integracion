<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta name="description" content="ejemplo de html5" />
		<meta name="keywords" content="formulario, clase" />
		<title>Iniciar sesion</title>
        
        <style>
            body {
                width: 922px;
                height: 200px;
                margin: 120px;
              background:  url(http://www.corodecamaradeextremadura.es/img/fondo-otono.jpg);
              backgroun-repeat: no-repeat;
             
              
            }
            header{
                
             
                
                margin: 110px;
                width: 100%;
                height: 190px;
                margin-left: 35%;
               
            }
           
     
            nav{
                font-size:30px;
                text-align:center;
                color:white;
                margin: 7px;
                width: 100%;
                height: 10%;
                margin-left: 10px;
                margin-top: 50px;
               
            }
                
            
       
          
          
        </style>

	</head>
	<body>
            <header>
              
           <img src="logo.jpg"  width="50%" />
           
            </header>
            <navigation>
                   <center>
                           <form onsubmit=" return validarall()" action="login.php" method="post" >
                           <input type="text" name="correo" id="cor"placeholder="Usuario" /><br/>
                           <input type="password" name="pass" id="pa" placeholder="Contraseña" /><br/>
                           <input type="submit" value=" Inicar Sesion"/><br/>
                            
                   </center>
             </navigation>
               <nav>
                   <txt>
            esta pagina bla bla blaasdf aghjklsasd fasd fasdf asdfa sdfasdf 
                    </txt>
               </nav>
            
            
	</body>

</html>