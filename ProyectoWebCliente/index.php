<!DOCTYPE html>
<html>
    <head>
        <title> Inicio </title>
        <meta charset="utf-8">
        <!--Fuentes de letras de google-->
        <link href = "https://fonts.googleapis.com/css?family=Exo:600i" rel="stylesheet"> 
        <!--Estilos css-->
        <link rel="stylesheet" href="index.css">
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
            <br>
            
            <h3>Noticias mas recientes:</h3>
<!--Articulo 1-->
            <div id="article1"> 
                <img src="imagenes/imgWow3.jpg">
                <div id="descripcionArticuloI">
                    <h4>World Of WarCraft</h4>
                    <strong>¡El Terreno de Pruebas del Mythic Dungeon Invitational ya está aquí!</strong>
                    <p class="text-left">
                    ¡Asegúrate una plaza* en el Mythic Dungeon Invitational superando mazmorras de piedra angular mítica del 26 de julio al 9 de agosto... 
                </p>
                </div>
                

                 <div class="btn-group" role="group" aria-label="...">
                    <button data-toggle="modal" data-target=".NoticiasWoW"  type="button" class="btn btn-default">Ver más...</button>
                </div>
                
            </div>
            <div class="modal fade NoticiasWoW" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        
                        <div class="articulo1Wow">
                           <img src="imagenes/imgWow3.jpg">
                            
                            <div class="MenuArticulo">
                                <span id="facebook"><b>Facebook</b></span>
                                <span id="twiter"><b>Twitter</b></span>
                             </div>
                            <hr>
                            <strong>¡El Terreno de Pruebas del Mythic Dungeon Invitational ya está aquí!</strong> <br> <hr>
                            <p class="text-left">
                                ¡Asegúrate una plaza* en el Mythic Dungeon Invitational superando mazmorras de piedra angular mítica del 26 de julio al 9 de agosto durante el Terreno de Pruebas! Los aspirantes con mejor puntuación serán invitados a formar parte de los 32 equipos de todo el mundo que competirán por una parte de los 100.000 $ del premio total.
                                <br><br>
                                Los equipos deberán dominar varias mazmorras durante este período de dos semanas para ser tenidos en cuenta. Juzgaremos la actuación del equipo en las 5 mazmorras en las que consiga el mayor nivel de piedra angular durante este periodo.
                                <br><br>
                                Tras estas dos semanas, los equipos tendrán que enviarnos su mejor puntuación utilizando<a href="https://mythicdungeoninvitational.wufoo.com/forms/m154hh9q1s6vx23/" target="_blank">este formulario</a>. Tened en cuenta que no se tendrá en cuenta ninguna puntuación recibida antes de que termine el periodo del Terreno de Pruebas (9 de agosto). Deberéis mandar vuestro formulario antes del 11 de agosto a las 23:59 CEST. Solo entrarán en concurso aquellas mazmorras completadas durante el Terreno de Pruebas.
                                <br><br>
                                Podéis encontrar el anuncio original <a href="https://worldofwarcraft.com/es-es/news/20873067/" target="_blank">aquí</a> y echarle un ojo a la <a href="https://worldofwarcraft.com/es-es/esports" target="_blank">web oficial de <em>esports</em> de <em>World of Warcraft</em></a>
                                <br><br>
                            </p>
                                <h4>
                                Preguntas frecuentes sobre el Terreno de Pruebas
                                </h4>
                            <p class="text-left">
                                P: ¿Vale cualquier mazmorra de piedra angular completada o la tengo que completar antes de que se agote el tiempo para que sea válida?<br>
                                R: Solo contarán las mazmorras completadas en el tiempo establecido (p. ej. Fauce de Almas debe completarse en menos de 24 minutos, Torreón Grajo Negro debe completarse en menos de 39 minutos, etc.). Si mandáis una mazmorra que no hayáis completado en el tiempo establecido, corréis el riesgo de que se invalide vuestra participación.
                                <br><br>
                                P: ¿Puedo enviar la misma mazmorra dos veces?<br>
                                R: Tenéis que enviar los tiempos de 5 mazmorras diferentes, sin repeticiones. Por ejemplo, no podréis enviar un tiempo de 22 minutos para Cámaras del Valor y otro de 21 minutos.
                                <br><br>
                                P: ¿Cómo sé cuáles son mis mejores mazmorras al final del Terreno de Pruebas?<br>
                                R: Es tarea vuestra mantener un registro de vuestras mejores puntuaciones de las dos semanas del Terreno de Pruebas, ya sea con capturas de pantalla, con referencias a la interfaz de las mazmorras de piedra angular, o con las <a href="https://worldofwarcraft.com/es-es/game/pve/leaderboards" target="_blank">clasificaciones de piedra angular mítica</a> de vuestro reino.
                                <br><br>
                                P: ¿Tenemos que usar siempre los mismos personajes durante el Terreno de Pruebas? ¿O puedo usar personajes alternativos, o invitar a otros miembros de la hermandad para intentar conseguir mejores resultados?<br>
                                R: Los 5 tiempos de mazmorras que enviéis los tienen que haber hecho los mismos 5 personajes; si utilizáis personajes alternativos o participan otros jugadores, se invalidará vuestra participación. (Sin embargo, durante las fases regional y global de Mythic Dungeon Invitational vuestro equipo de 5 jugadores podrá usar varios personajes y no estáis limitados a una sola clase cada uno).
                                <br><br>
                                P:¿Solo puedo utilizar mis personajes normales durante el Terreno de Pruebas? ¿Y en las últimas fases del torneo?<br>
                                R: Tendréis que utilizar vuestro plantel de personajes normales durante esta parte del torneo. Si al final vuestro equipo está entre los 32 equipos seleccionados para competir en el cuadro de Mythic Dungeon Invitational, se os dará acceso a un reino especialmente configurado para el torneo en vuestra región, donde encontraréis todo lo que necesitáis para competir (consumible, equipo, etc.).  Esto nos permitirá configurar afijos de piedra angular diferentes a las combinaciones utilizadas para esa semana, lo que normalizará el nivel de equipo y artefacto entre todos los competidores.
                                <br><br>
                                P: Si me invitan a participar en las fases finales, ¿tendré que desplazarme?<br>
                                R: Todas las fases de Mythic Dungeon Invitational se jugarán online, por lo que no os tendréis que desplazar. Hay un reino de torneo por cada región para minimizar la posibilidad de latencia durante las fases regional y global del torneo.
                                <br><br>
                                *Podéis descargar <a href="https://bnetcmsus-a.akamaihd.net/cms/content_entry_media/38/38YENKII1N8C1500302208584.pdf"><em> completas</em><em> de Mythic Dungeon Invitational&nbsp;(en inglés)</em></a>
                            </p>
                            <hr>
                            <h3>Hecho por Blizzard Entertainment en julio 24 a las 5:00pm</h3>
                        </div>
                    </div>
                </div>
            </div>
            
    <!--Articulo 2-->
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
                    <button data-toggle="modal" data-target=".NoticiasDota"  type="button" class="btn btn-default">Ver más...</button>
                </div>
                
            </div>
            <div class="modal fade NoticiasDota" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
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
            
            <div id="article1"> 
                <img src="imagenes/imgLeague2.jpg">
                <div id="descripcionArticuloI">
                    <h4>League Of Legends</h4>
                    <strong>Notas de la versión 7.14</strong>
                    <p class="text-left">
                    Bienvenidos a la versión 7.14. En esta versión trajimos a la mesa varios nombres que no hemos escuchado hace mucho tiempo. Desde Singed y Garen hasta Diana. Bueno, a estas alturas, no tenemos mucho orden en nuestros anuncios....
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
            
          
        </div>
                
        <div id="footer"> 
        
        </div>
    </body>
</html>