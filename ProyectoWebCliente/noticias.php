<!DOCTYPE html>
<html>
    <head>
        <title> Noticias </title>
        <meta charset="utf-8">
        <!--Fuentes de letras de google-->
        <link href = "https://fonts.googleapis.com/css?family=Exo:600i" rel="stylesheet"> 
        <!--Estilos css-->
        <link rel="stylesheet" href="noticias.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <!--JavaScript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script src="noticias.js"></script>
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
                            <a href="noticiasWoW.php"> <li>World Of Warcraft</li></a>
                            <a href="noticiasDota.php"> <li> Dota </li> </a>
                            <a><li>Guild Wards 2 </li> </a>
                        </ul>
               </a>
                <a href="quienesSomos.php"><li> <span class="glyphicon glyphicon-question-sign"></span> Quienes Somos</li> </a>
                <a href="galeria.php"><li> <span class="glyphicon glyphicon-picture"></span> Galeria</li> </a>
                <a href="contactenos.php"> <li> <span class="glyphicon glyphicon-envelope"></span> Contactenos</li></a>
                
            </ul>
            
        </div>
        
       
        
        <div id="section">
            <br>
            <h1> Bienvenido/a a nuestro sitio web </h1>
            <h4> Seleccione un tipo de juego para ver sus noticias:</h4>
            <br>
            
            <div id="menuNoticias">
                <ul>
                    <a href="noticiasLoL.php">  <li> League Of Legends </li> </a>
                    <a href="noticiasWoW.php"> <li>World Of Warcraft</a>
                    <a href="noticiasDota.php"> <li> Dota </li> </a>
                    <a><li>Guild Wards 2 </li> </a>
                </ul>
            </div>
        </div>
                
        <div id="footer"> 
        
        </div>
    </body>
</html>