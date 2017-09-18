<?php
   echo "<h1 style='text-align:center;'> Tarea #2 </h1>";
/*
 1. Crear un programa en PHP que calcule el impuesto de ventas, el total a pagar y el vuelto dado el subtotal, y el monto con que pago.
    Ejemplo, subtotal es 100, pago con 200, debe dar impuesto = 13, total a pagar 113 y el vuelto es 87. Investigue la funcion number_format
*/
    echo "<h2> Ejercicio #1 </h2>";
    $pago = 200.43;
    $subtotal = 100;
    $imp = 13;
    
    $total = $imp + $pago - $subtotal;
    $vuelto =  $pago - $total;
    
    $total2= number_format($total,2);
    echo "Pago = $$pago <br> 
          Subtotal = $$subtotal <br> 
          Impuesto = $$imp <br> 
          Vuelto: $$vuelto <br> 
          Total = $$total2 ";
    
//================================================================================================================================================
        
/*
    2.Crear un programa en PHP que reciba un numero natural y muestre la secuencia de Fibonacci. Usa ciclos.
    
*/
    echo "<h2> Ejercicio #2 </h2>";
    
    $tamaño = 10;
    
    $val1 = 0;
    $val2 = 1;
    for($i=1; $i<$tamaño; $i++){
        
        $val1 = $val1 + $val2;
        $val2 = $val1 - $val2;
        echo $val2;
        
        //Opcional
        if($i < $tamaño-1){
            echo ", ";
        }else{
            echo ".";
        }
        
    }

//================================================================================================================================================

/*
    3. Crear un programa en PHP que reciba el salario por hora de un funcionario, y calcule el salario bruto (a razon de 4 semanas por mes, 40 horas de trabajo por semana) una deduccion de la CCSS del 9% y que muestre el monto del salario bruto, la deduccion de la CCSS y el salario neto. Use number_format
 
*/


    echo "<h2> Ejercicio #3 </h2>";
    
//================================================================================================================================================

/*

    4. Crear un programa en PHP que calcule el area y la circunferencia de un circulo dado su diametro

*/
    echo "<h2> Ejercicio #4 </h2>";
    
    $d = 12;//diametro
    
    $A = pi()*pow($d/2,2);    
    echo "El area es: $A mts.";

//================================================================================================================================================

/*
    5. Crear un programa en PHP que reciba una direccion de correo electronico y que indique si está decuadamente bien formateada. Use strpos, strstr.
    
*/  
    echo "<h2> Ejercicio #5</h2>";
    
    $correo = 'joelz2000@live.com'; // correo correcto'

    $correo2 = "joelz@f3live.cd"; //correo incorrecto


    //verificacion para el correo correcto 
   $pos = strpos($correo, "@");
   $pos2 = strpos($correo, ".com");
   $pos3 = strpos($correo, ".es");
    
    
   if ($pos === false OR ($pos2 === false AND $pos3 === false)) {
        echo "Correo electrónico <b> $correo </b> no es válido </ br>";
   } else {
        echo "El correo electornico <b> $correo </b> es valido<br>";
   }

    //verificacion para correo no correcto
    $pos = strpos($correo2, "@");
    $pos2 = strpos($correo2, ".com");
    $pos3 = strpos($correo2, ".es");
    
    if ($pos === false OR ($pos2 === false AND $pos3 === false)) {
        echo "Correo electrónico <b> $correo2 </b> no es válido </ br>";
   } else {
        echo "El correo electornico <b> $correo2 </b> es valido";
   }    

//codigo de ayuda por Esteban Juarez... en la pagina web: https://es.stackoverflow.com/questions/56485/comprobar-correo-con-php

//================================================================================================================================================
    
/*
    6.Expanda el programa del IMC para que podamos digitar los datos de altura y peso y muestre segun rangos en (https://es.wikipedia.org/wiki/%C3%8Dndice_de_masa_corporal#Interpretaci.C3.B3n)

*/
//Este ejercicio se usa la pagina web imc2.html y ejercicio6.php
    
    echo "<h2> Ejercicio #6 </h2>";

    echo "<a href='imc2.html'> 1. Ir para ver el proceso del ejercicio 6</a><br>";

//================================================================================================================================================
    
/*
    8. Escribe un programa para recibir un numero con formato (con simbolos de moneda, decimales y separador de miles) y mantenga unicamente la parte entera del numero. 
    Ejempo, $123,456.99 debe generar 123456
*/
    echo "<h2> Ejercicio #8 </h2>";

    $n = number_format(123456.99);
    
    $a = (int) $n;
    echo $n;
    

?> 

