  /**
    * Array con las imagenes que se iran mostrando en la web
    */
    var imagenes=new Array(
        'imagenes/imgWow1.jpg',
        'imagenes/imgWow2.jpg',
        "imagenes/imgWow3.jpg",
        "imagenes/imgWow4.png"
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
