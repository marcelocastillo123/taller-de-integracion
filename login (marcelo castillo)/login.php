         <?php
        session_start();   
        
        $correo=$_POST["correo"];
        $pass=$_POST["pass"];
        //$URL = $_POST["URL"];
        //$numero = $_POST["numero"];
        //echo $correo." - ".$pass." - ".$URL." - ".$numero;
        
        if ($correo == "admin01" && $pass == "123"){
        $_SESSION["estado"]=1;
        $_SESSION["correo"]="admin01";
        $_SESSION["pass"]="123";
        $_SESSION["nombre"]="marcelo";
        header("location: index.php");
        }
        else{
        $_SESSION["estado"]=0; 
        header("location: ingresar.php");
        }
                
  

