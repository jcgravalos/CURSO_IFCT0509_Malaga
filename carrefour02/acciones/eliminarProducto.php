<?php
     if (  isset($_GET['idProd'])  ) {
       $idProd = $_GET['idProd'];

       // Create connection
       $conn = new mysqli("localhost", "josecarlos", "josecarlos","Carrefour");

       $miConsulta ="DELETE FROM productos WHERE codpro = " . $idProd . ";";
       $resultado = $conn->query($miConsulta);
        $conn->close();
    }

    header('Location: ../index.php');
?>
