  /**
    * Array con las imagenes que se iran mostrando en la web
    */
    var imagenes=new Array(
        'imagenes/imgHeader1.jpg',
        'imagenes/imgWow1.jpg',
        'imagenes/imgDota1.jpg',
        'imagenes/imgDota2.jpg',
        'imagenes/imgGuildWards1.jpg',
        'imagenes/imgGuildWards2.jpg',
        'imagenes/imgLeague1.jpg',
        'imagenes/imgLeague2.jpg',
        'imagenes/imgSmite1.png',
        'imagenes/imgSmite2.jpg',
        'imagenes/imgWow2.jpg',
        'imagenes/imgLeague3.jpg',
        "imagenes/imgLeague4.jpg",
        "//bnetcmsus-a.akamaihd.net/cms/blog_thumbnail/eo/EO7NBBHO9Q051500486908943.jpg"
    );
 
    /**
    * Funcion para cambiar la imagen
    */
    function rotarImagenes()
    {
        // obtenemos un numero aleatorio entre 0 y la cantidad de imagenes que hay
        var index=Math.floor((Math.random()*imagenes.length));
 
        // cambiamos la imagen
        document.getElementById("imagen").src=imagenes[index];
    }
 
    /**
    * Función que se ejecuta una vez cargada la página
    */
    onload=function()
    {
        // Cargamos una imagen aleatoria
        rotarImagenes();
 
        // Indicamos que cada 5 segundos cambie la imagen
        setInterval(rotarImagenes,5000);
    }
