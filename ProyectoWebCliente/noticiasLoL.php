<!DOCTYPE html>
<html>
    <head>
        <title> Noticias LoL </title>
        <meta charset="utf-8">
        <!--Fuentes de letras de google-->
        <link href = "https://fonts.googleapis.com/css?family=Exo:600i" rel="stylesheet"> 
        <!--Estilos css-->
        <link rel="stylesheet" href="noticiasLoL.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <!--JavaScript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script src="noticiasLoL.js"></script>
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
            <h4> Noticias sobre League Of Legends</h4>
            
            <!--Articulo 1-->
            <div id="article1"> 
                <img src="imagenes/imgLeague2.jpg">
                <div id="descripcionArticuloI">
                    <h4>League Of Legends</h4>
                    <strong>Notas de la versión 7.14</strong>
                    <p class="text-left">
                        Bienvenidos a la versión 7.14. En esta versión trajimos a la mesa varios nombres que no hemos escuchado hace mucho tiempo...
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
                        
                        <div class="articulo1Lol">
                            <img class="imgLol" src="imagenes/imgLeague2.jpg">
                            
                            <div class="MenuArticulo">
                                <span id="facebook"><b>Facebook</b></span>
                                <span id="twiter"><b>Twitter</b></span>
                             </div>
                            <hr>
                            <strong>Notas de la versión 7.14</strong> <br> <hr>
                            <p class="text-left">
                                Bienvenidos a la versión 7.14. En esta versión trajimos a la mesa varios nombres que no hemos escuchado hace mucho tiempo. Desde Singed y Garen hasta Diana. Bueno, a estas alturas, no tenemos mucho orden en nuestros anuncios. Muchos de estos campeones llevan un tiempo en el olvido y estamos felices de desempolvarlos.

                                Además tenemos algunas modificaciones para los objetos. La actualización de Cota de Espinas les da a los campeones tipo tanque acceso a Heridas Graves, con Vesta Espinosa como componente clave similar a Sorbechizos, Fajín de Mercurio y otros tipos de objetos para mejorarse a uno mismo. También dimos una pasada a los objetos de letalidad de la tienda para asegurarnos de que están ofreciendo opciones satisfactorias y con sentido a los asesinos.

                                Finalmente, seríamos desconsiderados si no mencionáramos la sombra acechando en el horizonte. No pierdan a Kayn de vista... Aunque de nada servirá una vez que salga del muro detrás de ustedes.
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Articulo 2-->
            <div id="article1"> 
                <img src="imagenes/imgLeague3.jpg">
                <div id="descripcionArticuloI">
                    <h3>League Of Legends</h3>
                    <strong>Ofertas tempranas de julio: 28/07/17 - 31/07/17</strong>
                    <p class="text-left">
                       ¡Llegó oficialmente la Oferta Temprana de julio! Para comenzar, ¡los siguientes ...
                    </p>
                </div>
                

                 <div class="btn-group" role="group" aria-label="...">
                    <button data-toggle="modal" data-target=".NoticiasLol2"  type="button" class="btn btn-default">Ver más...</button>
                </div>
                
            </div>
            <div class="modal fade NoticiasLol2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        
                        <div class="articulo1Lol">
                            <img src="imagenes/imgLeague3.jpg">
                            
                            
                            <div class="MenuArticulo">
                                <span id="facebook"><b>Facebook</b></span>
                                <span id="twiter"><b>Twitter</b></span>
                             </div>
                            <hr>
                            <strong>Ofertas tempranas de julio: 28/07/17 - 31/07/17</strong> <br> <hr>
                            
                            <p class="text-left">
                                ¡Llegó oficialmente la Oferta Temprana de julio! Para comenzar, ¡los siguientes aspectos que no son de Legado de los últimos 4 a 6 meses estarán en oferta a partir de la medianoche del 28 de julio de 2017 hasta la medianoche del 31 de julio de 2017! 
                            </p>
                            
                            <h3>Ofertas tempranas de julio: </h3>
                            <table class="table table-bordered table-striped text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">Aspecto</th>
                                        <th class="text-center">Precio (RP)</th>
                                        <th class="text-center">Precio de oferta (RP)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Diana Luna de Sangre</td>
                                        <td>1350</td>
                                        <td>975</td>
                                    </tr>
                                    <tr>
                                        <td>Gangplank Nova Terrorífica</td>
                                        <td>1350</td>
                                        <td>975</td>
                                    </tr>
                                    <tr>
                                        <td>Anivia Reina del Carnaval</td>
                                        <td>975</td>
                                        <td>750</td>
                                    </tr>
                                    <tr>
                                        <td>Ahri Estrella del Pop (Amatista)</td>
                                        <td>290</td>
                                        <td>195</td>
                                    </tr>
                                    <tr>
                                        <td>Ahri Estrella del Pop (Ojo de Gato)</td>
                                        <td>290</td>
                                        <td>195</td>
                                    </tr>
                                    <tr>
                                        <td>Ahri Estrella del Pop (Cuarzo)</td>
                                        <td>290</td>
                                        <td>195</td>
                                    </tr>
                                    <tr>
                                        <td>Ahri Estrella del Pop (Perla)</td>
                                        <td>290</td>
                                        <td>195</td>
                                    </tr>
                                    <tr>
                                        <td>Ahri Estrella del Pop (Cuarzo Rosa)</td>
                                        <td>290</td>
                                        <td>195</td>
                                    </tr>
                                    <tr>
                                        <td>Ahri Estrella del Pop (Rubí)</td>
                                        <td>290</td>
                                        <td>195</td>
                                    </tr>
                                </tbody>
                            </table>
                            <h5>Heho por Riot Queen Cobra</h5>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            
            <!--Articulo 3-->
            <div id="article1"> 
                <img src="imagenes/imgLeague4.jpg">
                <div id="descripcionArticuloI">
                    <h3>League Of Legends</h3>
                    <strong>Pregúntale a Riot: Edición de Honor</strong>
                    <p class="text-left">
                       ¡Bienvenidos a Pregúntale a Riot! 
                        Ha pasado un mes (eso fue rápido) desde que lanzamos el sistema de honor ...
                    </p>
                </div>
                

                 <div class="btn-group" role="group" aria-label="...">
                    <button data-toggle="modal" data-target=".NoticiasLol3"  type="button" class="btn btn-default">Ver más...</button>
                </div>
                
            </div>
            <div class="modal fade NoticiasLol3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        
                        <div class="articulo1Lol">
                            <img src="imagenes/imgLeague4.jpg">
                            
                            
                            <div class="MenuArticulo">
                                <span id="facebook"><b>Facebook</b></span>
                                <span id="twiter"><b>Twitter</b></span>
                             </div>
                            <hr>
                            <strong>Pregúntale a Riot: Edición de Honor</strong> <br> <hr>
                            
                            <p class="text-left">
                                ¡Bienvenidos a Pregúntale a Riot! 
                                Ha pasado un mes (eso fue rápido) desde que lanzamos el sistema de honor, y solamente en el primer par de semanas otorgamos más de 56 millones de puntos de honor. Ahora que ya tuvimos todos algunas partidas con él, comencemos con una edición exclusiva de honor de Pregúntale a Riot. <br><br>
                            </p>
                            
                            <h4>¿Qué ocurre si ya tengo los aspectos de Warwick y Twitch? ¿No se me darán recompensas? </h4> <br>

                            <p class="text-left">
                                Seguirán obteniendo fragmentos de llave, adornos de pantalla de carga, recompensas al final de la temporada y el resto de los premios de las Cápsulas de Honor. Entendemos que ya no son tan emocionantes si ya tienen esos aspectos, pero la buena noticia es que añadiremos más cosas a las cápsulas en el futuro, así que vienen más recompensas.<br>
                                BionicNinja, diseño, comportamiento del jugador. 
                            </p><hr><br>
                            
                            <h4>¿Por qué solo puedo otorgar honor a una persona el nuevo sistema?</h4><br>

                            <p class="text-left">
                                La meta era hacer que el honor se sintiera bien tanto para quien lo da como para quien lo recibe. Otorgar honor a una persona por partida resulta en tener que considerar cuidadosamente a quién dar su voto. El honor no debería ser equivalente a darle la mano a todos al final de la partida. Piensen en ello más como un premio que le pueden dar a un compañero en cada partida. Es por eso que tenemos categorías. Cuando reciben honor, saben que alguien decidió premiarlos con el que tenía para esa partida bajo una categoría específica. <br><br>
                                Al principio exploramos conceptos que involucraban selecciones múltiples, pero al final decidimos optar por una sola selección para hacerla más valiosa y para mantener breve el proceso de votación, ya que ahora ocurre en cada partida. <br><br>
                                    RiotBoourns, diseño de experiencia, comportamiento del jugador 
                            </p><hr><br>
                            
                            <h4>¿Tienen planeado reemplazar a "oponente honorable"? ¡Los enemigos también pueden ser honorables!</h4><br>
                            <p class="text-left">
                                Los enemigos definitivamente pueden ser honorables también, pero, normalmente al jugar LoL, hablan más con su propio equipo que con el equipo enemigo. Tienen una mayor habilidad de juzgar lo honorable que fueron los jugadores en su equipo que los del equipo enemigo, así que quisimos que los compañeros de equipo fueran el enfoque principal del honor. Además, quisimos simplificar el proceso de dar honor y hacer la decisión tan directa como fuera posible. Elegir entre dos y cuatro opciones es menos labor que elegir entre cinco y nueve.
                                Estamos explorando algunas alternativas que permitan reconocer a los oponentes, pero no tenemos nada concreto todavía.
                                Simurgh, diseño, comportamiento del jugador 
                            </p><hr><br>
                            
                            <h4>Tenía cientos de puntos de honor en el antiguo sistema. Ahora ya no están. ¿Y eso?</h4><br>
                            <p class="text-left">
                                Los entendemos. Estamos planeando un pequeño regalo para los jugadores que estaban muy invertidos en el sistema de honor clásico. En cuanto a diseño, nos quitamos el sombrero para los jugadores a los que realmente les importaba y eran activos con el honor clásico. Todavía estamos afinando los detalles y les haremos saber en cuanto esté listo. <br><br>
                                Riot NaKyle, comunicaciones, comportamiento del jugador 
                            </p><hr><br>
                            
                            <h4>¿Cuál es la mejor manera de subir de nivel? ¿Por qué no hay una barra de progreso de nivel?</h4><br>
                            <p class="text-left">    
                                La mejor manera de subir de nivel es clara: jueguen partidas, consigan honor con frecuencia y no reciban penalizaciones. También, ¡todo el equipo recibe una pequeña bonificación cuando todos los compañeros en una partida otorgan honor! La pregunta de la barra de progreso tiene una respuesta más complicada:
                                Es terrible sentir que no están teniendo progreso para subir de nivel, y no tener información de su progreso ha sido una situación claramente molesta hasta ahora. Es algo que queremos solucionar, pero no con una barra de progreso. Debido a que los niveles de honor están pensados para toda la temporada, una barra de honor que subiera lentamente se sentiría como una tarea muy tediosa. 
                                La respuesta al problema, probablemente, es tener notificaciones más claras y frecuentes acerca de los puntos de honor que hayan recibido conforme vayan avanzando. Esas notificaciones pueden otorgar información interesante. Por ejemplo, saber si la mayoría de sus puntos de honor provienen de buenas decisiones. Información como esa puede ayudarles a enfocarse en sus fortalezas como jugadores, al mismo tiempo que son señal de progreso en el sistema de niveles. <br><br>
                                Riot NaKyle, comunicaciones, comportamiento del jugador 
                            </p><hr><br>
                            
                            <h5>Heho por  Rumtumtummers</h5><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                
        <div id="footer"> 
        
        </div>
    </body>
</html>