<?php
     if (isset($_GET['nombre']) && isset($_GET['precio'])) {
       $nombreProd = $_GET['nombre'];
       $precioProd = $_GET['precio'];

       // Create connection
       $conn = new mysqli("localhost", "josecarlos", "josecarlos","Carrefour");

       $miConsulta ="INSERT INTO productos (name, precio) VALUES ('" .
			 $nombreProd .
			 "', " .
			 $precioProd .
			 ");";
	//echo($miConsulta);
        //$resultado = $conn->query($miConsulta);
        $conn->close();
    }

    header('Location: ../index.php');
?>
