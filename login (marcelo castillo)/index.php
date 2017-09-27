     <?php
        session_start();
        if ($_SESSION["estado"] != 1) {
        header("location: ingresar.php");
                                  }
      ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" charset=UTF-8">
       	
        <title>PAGINA  CREPY</title>
        <meta content="text/html; charset=UTF-8">
       	
  
<style>
            body {
               
                text-align:center;
                background-image:url("hola.jpg");
               
            } 
            #header{
             text-align:center;
                font-size:50px;
                margin: 30px;
                background-color: windowframe;
                width: 100%;
                height: 100px;
            }
             #navigation{
                text-align:center;
                font-size:20px;
                margin-top: -350px;
                background-color: black;
                margin-left: 20px;
                width: 150px;
                height: 600px;
                
            } 
              #navigation2{
                text-align:center;
                font-size:20px;
                margin-top: -600px;
                background-color: #00cccc;
                margin-left: 830px;
                width: 150px;
                height: 600px;
                
            } 
                            
            #extra {
		text-align:center;
		width: 100%;
		height: 140px;
                
                
				}                

          
            #content{
                text-align:center;
                width: 600px;
                height: 150%;
                border-left:100px black ;
                border-right:0px solid #DDDDDD;
                margin: auto;
                margin-left: auto;
                margin-top: 0px;
                background-color: black;
            }
        </style>
    </head>
    <body>
     hola
        </body>
        </html>
        
        
   

