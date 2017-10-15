<?php
    class personas{
        public $cedula;
        public $nombre;
        public $apellido;
        

        
        
        function insertar($nombre, $apellido, $cedula){
            $db = new mysqli("localhost", "joelz", "1234", "tarea3");
            
            if(isset($cedula)){
                $consulta=$db->prepare("insert into personas(cedula,nombre, apellido) values(?,?,?)");
                $consulta->bind_param("iss", $cedula, $nombre, $apellido);
                $consulta->execute();
                if($consulta->affected_rows>0){
                    echo "<h2>Insercion Existo</h2>";
                    echo "<a href='index.php'> Regresar </a><br>";
                }else{
                    echo "<h2>Fallo al insertar</h2>";
                    echo "<h3>".$db->error."</h3>";
                    echo "<a href='index.php'> Regresar </a><br>";
                }
            }
           
            $db->close();
        }
        
        function mostrarDatos(){
            $db = new mysqli("localhost", "joelz", "1234", "tarea3");
            
	       //Consultar datos
                $sql = "select * from personas";// *= todas las columnas de la tabla

                $consulta = $db->query($sql);
                if($consulta === FALSE){
                    echo "<h2>Error.".$db->error."</h2>";
                }

            //Recorremos el conjunto de filas y guardarlo en un arreglo los datos

                while($fila=$consulta->fetch_assoc()){
                    
                   echo "Nombre: ".$fila['nombre']."<br> Apellido:".$fila['apellido']. "<br>Cedula: ".$fila['cedula']."<br><br>";
                }

                $db->close();
        }
    }

    
?>