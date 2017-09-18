<?php
    $alt = $_POST['alt'];
    $peso = $_POST['peso'];

    
    $IMC = $peso/pow($alt,2);


    if($IMC < 18.50){
        echo "Su Masa corporal es: $IMC <br>";
        echo "<br>Respuesta: Tienes bajo Peso";
    }else if($IMC >=18.5 && $IMC <=24.99){
        echo "Su Masa corporal es: $IMC <br>";
        echo "<br>Respuesta: Tu peso es normal";
    }else if($IMC >=25 && $IMC <=29.99){
        echo "Su Masa corporal es: $IMC <br>";
        echo "<br>Respuesta: Tenes sobrepeso";
    }else{
         echo "Su Masa corporal es: $IMC <br>";
        echo "<br>Respuesta: Tenes Obecidad";
    }

    echo "<br><a href='imc2.html'>Regresar</a>";
  
?>