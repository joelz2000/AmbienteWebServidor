
<h3>Agregar Lineas telefonicas</h3>
<?php 
    $db = new mysqli("localhost","joelz","1234","examen1as");
    
    if(isset($_POST['num'])){
        $num = $_POST['num'];
        $oper = $_POST['oper'];
        $plan = $_POST['plan'];
        $mar = $_POST['mar'];
        $mod = $_POST['mod'];
        $fec = $_POST['fec'];
        $plazo = $_POST['plazo'];
        
       
        $consulta=$db->prepare("insert into lineas(numero, operador, plan, marcacelular, modelocelular, fechafirmacontrato, plazomeses) values(?,?,?,?,?,?,?)");
        $consulta->bind_param("issssss", $num, $oper, $plan, $mar, $mod, $fec, $plazo );
        $consulta->execute();
        if($consulta->affected_rows>0){
            echo "<h2>Insercion Existo</h2>";
            echo "<a href='index.php'> Regresar </a>";
        }else{
            echo "<h2>Fallo al insertar</h2>";
            echo "<h3>".$db->error."</h3>";
            echo "<a href='index.php'> Regresar </a>";
        }
    }
           
       $db->close();
    
?>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
		Numero: <br><input type="text" name="num"> <br>
		Operador:  <br><input type="text" name="oper"> <br>
		Plan:  <br><input type="text" name="plan"> <br>
        Marca:  <br><input type="text" name="mar"> <br>
        Modelo:  <br><input type="text" name="mod"> <br>
		Fecha Contrato (AAA-MM-DD): <br><input type="text" name="fec"> <br>
		Plazo Meses: <br><input type="text" name="plazo"> <br> <br>
		<button type="submit">Crear</button>
        <a href="index.php">Cancelar</a>
	</form>