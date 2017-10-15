<?php
    require("listaPersonas.php");
    $lista = new personas();
    
    if(isset($_POST['ced'])){
        $nom = $_POST['nom'];
        $apel = $_POST['apel'];
        $ced = intval($_POST['ced']);
        echo "<h3>Datos:</h3>";
   
        $lista->insertar($nom, $apel, $ced);
    }
   $lista->mostrarDatos();
    echo "<a href='index.php'>Regresar</a>"
?>