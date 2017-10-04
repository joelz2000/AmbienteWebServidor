<?php
$db = new mysqli("localhost","joelz","1234","examen1as");

	if(isset($_GET['numero'])){
		$num=$_GET['numero'];
		$consulta=$db->prepare("select * from lineas where numero=?");
		$consulta->bind_param("i",$num);
		$consulta->execute();
		$filas = $consulta->get_result();
		/*Como es solamente una fila, no necesito while*/
		$miFila=$filas->fetch_assoc();
		echo "<p>Numero: ".$miFila['numero']."</p> ";
        echo "<p>Opeador: ".$miFila['operador']."</p> ";
        echo "<p>Plan: ".$miFila['plan']."</p> ";
        echo "<p>Marca: ".$miFila['marcacelular']."</p> ";
        echo "<p>Modelo: ".$miFila['modelocelular']."</p> ";
        echo "<p>Fecha de contrato: ".$miFila['fechafirmacontrato']."</p>";
        echo "<p>Plazo en meses: ".$miFila['plazomeses']."</p> ";
		echo "<hr><a href='index.php'>Regresar</a>";

	}else{

		echo "<a href='index.php'>Regresar</a>";
	}
	$db->close();
?>