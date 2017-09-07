<!DOCTYPE html>
<html>
    <head>
        <title> Noticias Dota </title>
        <meta charset="utf-8">
        <!--Fuentes de letras de google-->
        <link href = "https://fonts.googleapis.com/css?family=Exo:600i" rel="stylesheet"> 
        <!--Estilos css-->
        <link rel="stylesheet" href="noticiasDota.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <!--JavaScript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script src="noticiasDota.js"></script>
    </head>
    <body>
        <div id="header">
            <img class="imagenHeader" src="" id="imagen"> 
             <br>
            <h1> NotiGames </h1>
             <span class="glyphicon glyphicon-chevron-down"></span>
            <br>
        </div>
        
        <input type="checkbox" id="btn-menu">
        <label id="imgMenu" for="btn-menu"> <img  src="imagenes/menu.png"></label>
        
          
        <div id="nav">
            <ul>
                <a href="index.php"> <li> <span class="glyphicon glyphicon-home"></span>Inicio</li> </a>
                <a href="noticias.php"><li> <span class="glyphicon glyphicon-globe"></span> Noticias
                        <ul>
                            <a href="noticiasLoL.php">  <li> League Of Legends </li> </a>
                            <a href="noticiasWoW.php"> <li>World Of Warcraft</a>
                            <a href="noticiasDota.php"> <li> Dota </li> </a>
                            <a><li>Guild Wards 2 </li> </a>
                        </ul>
                    </li>
                </a>
                <a href="quienesSomos.php"><li> <span class="glyphicon glyphicon-question-sign"></span> Quienes Somos</li> </a>
                <a href="galeria.php"><li> <span class="glyphicon glyphicon-picture"></span> Galeria</li> </a>
                <a href="contactenos.php"> <li> <span class="glyphicon glyphicon-envelope"></span> Contactenos</li></a>
                
            </ul>
            
        </div>
        
        
       
        
        <div id="section">
            <br>
            <h1> Bienvenido/a a nuestro sitio web </h1>
            <h4> Noticias sobre Dota</h4>
            
            <!--Articulo 1-->
            <div id="article1"> 
                <img src="imagenes/imgDota3.png">
                <div id="descripcionArticuloI">
                    <h4>Dota</h4>
                    <strong>Dando la bienvenida a nuevos jugadores</strong>
                    <p class="text-left">
                        Algunos de los momentos más satisfactorios de Dota tienen lugar en las primeras fases de aprendizaje del juego, a medida que empiezas a ver estrategias complejas formarse en las batallas a tu alrededor...
                    </p>
                </div>
                

                 <div class="btn-group" role="group" aria-label="...">
                    <button data-toggle="modal" data-target=".NoticiasLol"  type="button" class="btn btn-default">Ver más...</button>
                </div>
                
            </div>
            <div class="modal fade NoticiasLol" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        
                        <div class="articulo1Dota">
                           <img src="imagenes/imgDota3.png">
                            
                            <div class="MenuArticulo">
                                <span id="facebook"><b>Facebook</b></span>
                                <span id="twiter"><b>Twitter</b></span>
                             </div>
                            <hr>
                            <strong>Dando la bienvenida a nuevos jugadores</strong> <br> <hr>
                            <p class="text-left">
                                Algunos de los momentos más satisfactorios de Dota tienen lugar en las primeras fases de aprendizaje del juego, a medida que empiezas a ver estrategias complejas formarse en las batallas a tu alrededor. Sin embargo, en el pasado han habido algunos problemas que daban lugar a desafíos innecesarios para los jugadores nuevos. Con la actualización de hoy hemos introducido dos características diseñadas para ayudar a los nuevos jugadores a encontrarse con la menor cantidad de barreras posibles a la hora de disfrutar de Dota.<br><br>
                                
                                La primera característica es un cambio al sistema de selección de héroes. Para ayudar a nuevos jugadores, hemos restringido su selección a un grupo reducido de veinte héroes durante sus primeras veinticinco partidas. Este grupo introductorio consiste de héroes que sabemos funcionan a la hora de ayudar a nuevos jugadores a aprender y disfrutar del juego.<br><br>
                                
                                La actualización de hoy también incluye una característica que empareja a los jugadores nuevos con aquellos que tengan consistentemente un buen comportamiento. Es especialmente importante para nuevos jugadores tener una buena experiencia social mientras intentan aprender el juego. El sistema de emparejamiento ahora se asegurará de que los jugadores nuevos se enfrenten a otros de similar nivel que tengan un buen historial de comportamiento.<br><br>
                                
                                ¡Se acerca The International, y esperamos daros la bienvenida en la <a href="http://www.dota2.com/international/overview/?l=spanish">retransmisión para jugadores nuevos</a><br><br>
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
                
        <div id="footer"> 
        
        </div>
    </body>
</html>