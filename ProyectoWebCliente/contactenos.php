<!DOCTYPE html>
<html>
    <head>
        <title> Contactenos </title>
        <meta charset="utf-8">
        <!--Fuentes de letras de google-->
        <link href = "https://fonts.googleapis.com/css?family=Exo:600i" rel="stylesheet"> 
        <!--Estilos css-->
        <link rel="stylesheet" href="contactenos.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <!--JavaScript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
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
                    <a href="noticias.html"><li> <span class="glyphicon glyphicon-globe"></span> Noticias 
                        <ul>
                            <a href="noticiasLoL.php">  <li> League Of Legends </li> </a>
                            <a href="noticiasWoW.php"> <li>World Of Warcraft</li></a>
                            <a href="noticiasDota.php"> <li> Dota </li> </a>
                            <a><li>Guild Wards 2 </li> </a>
                        </ul>
                    </a>
                    <a href="quienesSomos.php"><li> <span class="glyphicon glyphicon-question-sign"></span> Quienes Somos</li> </a>
                    <a href="galeria.php"><li> <span class="glyphicon glyphicon-picture"></span> Galeria</li> </a>
                    <a href="#"> <li> <span class="glyphicon glyphicon-envelope"></span> Contactenos</li></a>

                </ul>
            </div>
			
        <div id="section">
            <h1>Contactenos</h1>
				<h4>Envianos tus datos si deseas obtener mas informacion </h4>
			
			<div id="formulario">
                <form>
                    <label>Nombre:</label>
                    <input type="text" placeholder="Ingrese tu Nombre" required>
                    <label>Telefono:</label>
                    <input type="text" placeholder="Telefono" required>
                    <label>Correo:</label>
                    <input type="text" placeholder="Correo" required>
                    <label>Comentario:</label>
                    <textarea placeholder="Ingrese su comentario" required></textarea>   
                    <button>Enviar</button>
                </form>
			</div>	
			<p>
                Si deseas comunicarte con nosotros puedes enviarnos un correo a:<br> notigames@gmail.com<br><br> O comunicarte al telefono:<br>
			    +506 2533 1916
            </p>
        </div>
			
            
    </body>			 
</html>			 
			