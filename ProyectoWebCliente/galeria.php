<!DOCTYPE html>
<html>
    <head>
        <title> Galeria </title>
        <meta charset="utf-8">
        <!--Fuentes de letras de google-->
        <link href = "https://fonts.googleapis.com/css?family=Exo:600i" rel="stylesheet"> 
        <!--Estilos css-->
        
		<link rel="stylesheet" href="galeria.css">
       <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <!--JavaScript-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        
        <script src="index.js"></script>
    </head>
    <body>
        <div id="header">
            <img class="imagenHeader" src="" id="imagen"> 
             <br>
            <h1> NotiGames </h1>
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
        
        
            <h1>Galeria</h1>

           <h2>League of Legends</h2>


         <ul class="galeria">
                <li><a href="#img1"><img src="galeriaimg/lol1.jpg"></a></li>
                <li><a href="#img2"><img src="galeriaimg/lol2.jpg"></a></li>
                <li><a href="#img3"><img src="galeriaimg/lol3.jpg"></a></li>
                <li><a href="#img4"><img src="galeriaimg/lol4.jpg"></a></li>
                <li><a href="#img5"><img src="galeriaimg/lol5.jpg"></a></li>
        </ul>

        <div class="modal" id="img1">
         <h3>League of Legends</h3>
         <div class="imagen">
            <a href="#img5">&#60;</a>
            <a href="#img2"><img src="galeriaimg/lol1.jpg"></a>
            <a href="#img2">></a>
         </div>
         <a class="cerrar" href="">X</a>

        </div>

       <div class="modal" id="img2">
         <h3>League of Legends</h3>
         <div class="imagen">
            <a href="#img1">&#60;</a>
            <a href="#img3"><img src="galeriaimg/lol2.jpg"></a>
            <a href="#img3">></a>
         </div>
         <a class="cerrar" href="">X</a>

        </div>

        <div class="modal" id="img3">
         <h3>League of Legends</h3>
         <div class="imagen">
            <a href="#img2">&#60;</a>
            <a href="#img4"><img src="galeriaimg/lol3.jpg"></a>
            <a href="#img4">></a>
         </div>
         <a class="cerrar" href="">X</a>

        </div>

        <div class="modal" id="img4">
         <h3>League of Legends</h3>
         <div class="imagen">
            <a href="#img3">&#60;</a>
            <a href="#img5"><img src="galeriaimg/lol4.jpg"></a>
            <a href="#img5">></a>
         </div>
         <a class="cerrar" href="">X</a>
        </div>

        <div class="modal" id="img5">
         <h3>League of Legends</h3>
         <div class="imagen">
            <a href="#img4">&#60;</a>
            <a href="#img1"><img src="galeriaimg/lol5.jpg"></a>
            <a href="#img1">></a>
         </div>
         <a class="cerrar" href="">X</a>
        </div>

        <!--galeria 2-->
        <h2>Guild Wards 2</h2>

          <ul class="galeria2">
                <li><a href="#imge1"><img src="galeriaimg/gw1.jpg"></a></li>
                <li><a href="#imge2"><img src="galeriaimg/gw2.jpg"></a></li>
                <li><a href="#imge3"><img src="galeriaimg/gw3.jpg"></a></li>
                <li><a href="#imge4"><img src="galeriaimg/gw4.png"></a></li>
                <li><a href="#imge5"><img src="galeriaimg/gw5.jpg"></a></li>
        </ul>


        <div class="modal" id="imge1">
         <h3>Guild Wars 2</h3>
        <div class="imagen">
            <a href="#imge5">&#60;</a>
            <a href="#imge2"><img src="galeriaimg/gw1.jpg"></a>
            <a href="#imge2">></a>
         </div>
         <a class="cerrar" href="">X</a>

        </div>

       <div class="modal" id="imge2">
         <h3>Guild Wars 2</h3>
         <div class="imagen">
            <a href="#imge1">&#60;</a>
            <a href="#imge3"><img src="galeriaimg/gw2.jpg"></a>
            <a href="#imge3">></a>
         </div>
         <a class="cerrar" href="">X</a>

        </div>

        <div class="modal" id="imge3">
         <h3>Guild Wars 2</h3>
         <div class="imagen">
            <a href="#imge2">&#60;</a>
            <a href="#imge4"><img src="galeriaimg/gw3.jpg"></a>
            <a href="#imge4">></a>
         </div>
         <a class="cerrar" href="">X</a>

        </div>

        <div class="modal" id="imge4">
         <h3>Guild Wars 2</h3>
         <div class="imagen">
            <a href="#imge3">&#60;</a>
            <a href="#imge5"><img src="galeriaimg/gw4.png"></a>
            <a href="#imge5">></a>
         </div>
         <a class="cerrar" href="">X</a>
        </div>

        <div class="modal" id="imge5">
         <h3>Guild Wars 2</h3>
         <div class="imagen">
            <a href="#imge4">&#60;</a>
            <a href="#imge1"><img src="galeriaimg/gw5.jpg"></a>
            <a href="#imge1">></a>
         </div>
         <a class="cerrar" href="">X</a>
        </div>

        <!--galeria 3-->
        <h2>World of Warcraf</h2>

          <ul class="galeria3">
                <li><a href="#image1"><img src="galeriaimg/wow1.jpg"></a></li>
                <li><a href="#image2"><img src="galeriaimg/wow2.jpg"></a></li>
                <li><a href="#image3"><img src="galeriaimg/wow3.jpg"></a></li>
                <li><a href="#image4"><img src="galeriaimg/wow4.jpg"></a></li>
                <li><a href="#image5"><img src="galeriaimg/wow5.jpg"></a></li>
        </ul>


        <div class="modal" id="image1">
         <h3>World of Warcraf</h3>
        <div class="imagen">
            <a href="#image5">&#60;</a>
            <a href="#image2"><img src="galeriaimg/wow1.jpg"></a>
            <a href="#image2">></a>
         </div>
         <a class="cerrar" href="">X</a>

        </div>

       <div class="modal" id="image2">
         <h3>World of Warcraf</h3>
         <div class="imagen">
            <a href="#image1">&#60;</a>
            <a href="#image3"><img src="galeriaimg/wow2.jpg"></a>
            <a href="#image3">></a>
         </div>
         <a class="cerrar" href="">X</a>

        </div>

        <div class="modal" id="image3">
         <h3>World of Warcraf</h3>
         <div class="imagen">
            <a href="#image2">&#60;</a>
            <a href="#image4"><img src="galeriaimg/wow3.jpg"></a>
            <a href="#image4">></a>
         </div>
         <a class="cerrar" href="">X</a>

        </div>

        <div class="modal" id="image4">
         <h3>World of Warcraf</h3>
         <div class="imagen">
            <a href="#image3">&#60;</a>
            <a href="#imgae5"><img src="galeriaimg/wow4.jpg"></a>
            <a href="#imgae5">></a>
         </div>
         <a class="cerrar" href="">X</a>
        </div>

        <div class="modal" id="image5">
         <h3>World of Warcraf</h3>
         <div class="imagen">
            <a href="#image4">&#60;</a>
            <a href="#image1"><img src="galeriaimg/wow5.jpg"></a>
            <a href="#image1">></a>
         </div>
         <a class="cerrar" href="">X</a>
        </div>
      
		
		
    </body>
</html>