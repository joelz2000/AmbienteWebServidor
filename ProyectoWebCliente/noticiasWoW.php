<!DOCTYPE html>
<html>
    <head>
        <title> Noticias WoW </title>
        <meta charset="utf-8">
        <!--Fuentes de letras de google-->
        <link href = "https://fonts.googleapis.com/css?family=Exo:600i" rel="stylesheet"> 
        <!--Estilos css-->
        <link rel="stylesheet" href="noticiasWoW.css">
        <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.css">
        <!--JavaScript-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="bootstrap-3.3.7-dist/js/bootstrap.js"></script>
        <script src="noticiasWoW.js"></script>
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
            <h4> Noticias sobre World Of Warcraft</h4>
            
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
                                <strong> Preguntas frecuentes sobre el Terreno de Pruebas </strong>
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
                <img src="imagenes/imgWow4.png">
                <div id="descripcionArticuloI">
                    <h4>World Of WarCraft</h4>
                    <strong>Los mejores equipos de arena se verán las caras en la final del World of Warcraft European Championship</strong>
                    <p class="text-left">
                    ¡Todos los caminos llevan a la gamescom para los contendientes de World of Warcraft en Europa! Del 23 al ...
                    </p>
                </div>
                

                 <div class="btn-group" role="group" aria-label="...">
                   <button data-toggle="modal" data-target=".NoticiasWoW1"  type="button" class="btn btn-default">Ver más...</button>
                </div>
                
            </div>
            <div class="modal fade NoticiasWoW1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        
                        <div class="articulo1Wow">
                            <img src="imagenes/imgWow4.png">
                            <div class="MenuArticulo">
                                <span id="facebook"><b>Facebook</b></span>
                                <span id="twiter"><b>Twitter</b></span>
                             </div>
                            <hr>
                            <strong>Los mejores equipos de arena se verán las caras en la final del World of Warcraft European Championship</strong> <br> <hr>
                            <p class="text-left">
                                ¡Todos los caminos llevan a la gamescom para los contendientes de World of Warcraft en Europa! Del 23 al 26 de agosto, los 12 mejores equipos de arena de todo el continente se enfrentarán en Colonia, Alemania, en la final del World of Warcraft European Championship.<br><br>
                                
                                Profesionales del JcJ han luchado con uñas y dientes en eventos de la comunidad y en torneos clasificatorios oficiales para asegurarse un puesto en la gamescom. Ahora, el panorama que se nos presenta es una contienda protagonizada por algunos de los mejores:<br><br>
                            </p>
                            
                            <div id="section">
                                <div id="article1">
                                    <img src="https://bnetcmsus-a.akamaihd.net/cms/content_entry_media/TZMF3IKH3IEW1477442703461.png">
                                <div id="descripcionArticuloI">
                                    
                                    <h4 class="text-left">Method, una fuerza dominante en los últimos años, ganó el Arena World Championship en 2015, y el año siguiente, en 2016, luchó por defender su título. ¿Mantendrán este impulso en la gamescom?</h4><br>
                                    
                                </div>
                            </div>
                            
                            <div id="article1">
                                   <img src="https://bnetcmsus-a.akamaihd.net/cms/content_entry_media/DEMF2NIW79E31477510362148.png">
                                <div id="descripcionArticuloI">
                                    
                                    <h4 class="text-left">
                                        Con un total de nueve caras conocidas de la BlizzCon entre sus jugadores, Northern Gaming Blue es uno de los equipos con más experiencia del torneo. Como vigentes campeones europeos, estarán ansiosos por anotarse otra victoria en frente de su ejército de fans.
                                    </h4><br>
                                    
                                </div>
                            </div>
                                
                                <div id="article1">
                                   <img src="https://bnetcmsus-a.akamaihd.net/cms/content_entry_media/ik/IKZLB0SWN6ZJ1500905613604.png">
                                <div id="descripcionArticuloI">
                                    
                                    <h4 class="text-left">
                                        Ningún miembro de los Rockets Esports, recién llegados (relativamente) a la escena competitiva, había aparecido en un torneo de World of Warcraft antes de que empezara el año. Desde entonces, han tenido que arrasar a sus rivales para ganarse el pase a la final de la European Championship.
                                    </h4><br>
                                    
                                </div>
                            </div>
                            </div>
                            
                                 <br><br>

                               <p class="text-left">
                                Les espera una gran fortuna, por lo que los equipos estarán dispuestos a sacar las garras para llevarse el mayor pellizco de los 100 000 $ que hay en premios. Echad un vistazo a la distribución de los premios:
                                <br><br>
                                </p>
                                <table width="500" class="table table-striped table-bordered table-hover" style="margin: 0px auto; width: 500px;">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Puesto</th>
                                        <th style="text-align: center;">Total para el equipo (en $)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;"><span style="text-align: -webkit-center;">1.</span><sup style="text-align: -webkit-center;">o</sup></td>
                                        <td style="text-align: center;"><span style="text-align: -webkit-center;">50&nbsp;000&nbsp;$</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;"><span style="text-align: -webkit-center;">2.</span><sup style="text-align: -webkit-center;">o</sup></td>
                                        <td style="text-align: center;"><span style="text-align: -webkit-center;">20&nbsp;000&nbsp;$</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;"><span style="text-align: -webkit-center;">3.</span><sup style="text-align: -webkit-center;">o</sup></td>
                                        <td style="text-align: center;"><span style="text-align: -webkit-center;">12&nbsp;000&nbsp;$</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;"><span style="text-align: -webkit-center;">4.</span><sup style="text-align: -webkit-center;">o</sup></td>
                                        <td style="text-align: center;"><span style="text-align: -webkit-center;">8&nbsp;000&nbsp;$</span></td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: center;"><span style="text-align: -webkit-center;">5.</span><sup style="text-align: -webkit-center;">o</sup><span style="text-align: -webkit-center;"> y 6.</span><sup style="text-align: -webkit-center;">o</sup></td>
                                        <td style="text-align: center;"><span style="text-align: -webkit-center;">5&nbsp;000&nbsp;$</span></td>
                                    </tr>
                                </tbody>
                            </table>
                            <br><br>
                            <p class="text-left">
                            Pero hay mucho más que dinero en juego: los cuatro mejores equipos del evento de la gamescom también se clasificarán para la final del Arena World Championship de World of Warcraft, que tendrá lugar en la BlizzCon este año.
                            <br><br>
                            Si queréis conocer las últimas noticias y ver las clasificaciones, pasaos por la página del Arena World Championship 2017. Si no podéis estar en la gamescom este año, aseguraos de seguir World of Warcraft en Twitch, retransmitido en directo, para no perderos ni un segundo de acción.<br><br>
                            
                            En las próximas semanas daremos a conocer más detalles sobre la final de la European Championship, entre los que se incluyen la lista completa de los equipos clasificados y el calendario del torneo. ¡Seguid atentos!<br><br>
                            </p>
                            <hr>
                            <h3>Hecho por Blizzard Entertainment en julio 24 a las 5:00pm</h3>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
                
        <div id="footer"> 
        
        </div>
    </body>
</html>