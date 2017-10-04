<?php
//Primera parte

    echo "<h2 style='text-align:center;'>Examen 1</h2>";
    $db = new mysqli("localhost","joelz","1234","examen1as");
    
    $sql = "select * from lineas";

	$consulta = $db->query($sql);
	if($consulta === FALSE){
		echo "<h2>Error.".$db->error."</h2>";
	}
    
    echo "<h2> I Parte </h2>";
    echo "<h3 >Lineas Telefonicas:</h3>";

    echo "<table  border='1' cellpadding='2' cellspacing='0'> 
            <tr>  
                <th> Numero </th>
                <th></th> 
            </tr>";
        
    while($fila=$consulta->fetch_assoc()){
        
         $link = "detalles.php?numero=".$fila['numero'];
		echo 
           
            "<tr><th>".$fila['numero']. "</th>".
            "<th> <a href='$link'>Ver detalles</a> </th></tr>
        "; 
     }
    echo "</table>";
    echo "<br> <a href='crear.php'> Crear </a><hr>";
	$db->close();
//----------------------------------------------------------------------

//Segunda parte
    
    //Con descuento
    echo "<h2> II Parte </h2>";
    
    //a.
    $subtotal = 30000;
    $impuestoV = $subtotal * 0.13;
    $total = $subtotal + $impuestoV;
    $descuento = 0;

    
    if($total > 20000){
        $descuento = ($impuestoV*0.10);
        $total = $total - $descuento;
    }

    

    echo "<h4>Subtotal ----- $subtotal <br>";
    echo "Impuesto ---- $impuestoV <br>";
    echo "Descuento --- $descuento <br>" ;
    echo "Total ---------  $total</h4>";

    
?>
