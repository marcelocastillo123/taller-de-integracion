<?php 
	$conexion=mysqli_connect('localhost','root','','integracion') or die('No se pudo conectar con la base de datos');
 ?>
<!DOCTYPE html>

<html>
    <head>
        <title>Anuncios Index</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/bc_anuncio.js" type="text/javascript"></script>
        <style>
                #div_search{
                        margin-top: 175px;
                        position: absolute;
                        width: 13%;
                        height: 40px;
                        margin-left: 87%;

                    }
                #izquierda{
                        float: left;
                        text-align: center;
                        width: 20%;
                        height:500px;
                        background-color: lightgreen;
                }
                #medio{
                        float: left;
                        text-align: center;
                        width: 50%;
                        height:600px;
                        background-color: white;
                        margin-left:5%;
                }
                #derecha{
                        float: right;
                        text-align: center;
                        width: 20%;
                        height:600px;
                        background-color: lightgreen;
                }
                p{
                        border-style: double;
                        border-color: blue;
                        margin-bottom: 40px;
                }
                #anuncio{
                        width: 240px;
                        height: 150px;
                }
                
        </style>
    </head>

    <body>
            <header>
                <div id="div_search" >
                    <input id="ipt_search" type="text" />
                </div>
            </header>
            <nav>

            </nav>
            <section>
                    <aside id="izquierda"> <h3>¡Anuncios!</h3>
                            <p><b>Titulo:</b> Busco Contador Auditor <br>
                            <b>Ubicación:</b> Temuco <br>
                            <a href="ContadorAuditor.php"><b>¡Llevame allí!</b></a>
                            </p>

                            <p><b>Titulo:</b> Busco Desarrollador Web <br>
                            <b>Ubicación:</b> Santiago <br>
                            <a href="DesarrolladorWeb.php"><b>¡Llevame allí!</b></a>
                            </p>
                            <img id="anuncio" src="https://carlosguerraterol.com/wp-content/uploads/2015/03/power-editor-facebook.png">



                    </aside>
                    <aside id="medio"> 
                        <h3>¡Anuncios!</h3>
                        <div id="div_result">
                            <!--<div class="divs_items" title="$mostrar ['Titulo']">-->
                                <?php 

                                $sql='SELECT * from anuncios ';
                                $result=mysqli_query($conexion,$sql);
                                while($mostrar=mysqli_fetch_array($result)){
                                ?>
                                    <div class="divs_items" title="<?php echo $mostrar ['Titulo'] ?>">
                                        <p><b><?php echo $mostrar ['Titulo'] ?></b><br>                
                                        Descripción: <?php echo $mostrar ['Descripcion'] ?></p>
                                        <a href="Anuncios.php<?php echo "?ID=".$mostrar["ID"];?>">Ir al anuncio</a><br><br><br><br>
                                        <!--$_SESSION["ida"]=.$mostrar["ID"];-->
                                    </div>  
                                <?php
                                }


                                ?>
                               
                            
                        </div>          
                        

                    </aside>
                    <aside id="derecha"> <h3>¡Anuncios!</h3> 

                            <p><b>Titulo:</b> Busco Programador <br>
                            <b>Ubicación:</b> Concepción <br>
                            <a href="Programador.php"><b>¡Llevame allí!</b></a>
                            </p>

                            <p><b>Titulo:</b> Busco Abogado <br>
                            <b>Ubicación:</b> Valdivia <br>
                            <a href="Abogado.php"><b>¡Llevame allí!</b></a>
                            </p>
                            <img id="anuncio" src="https://carlosguerraterol.com/wp-content/uploads/2015/03/power-editor-facebook.png">
                    </aside>

            </section>

    </body>
</html>