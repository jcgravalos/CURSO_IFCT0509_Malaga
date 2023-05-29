<!DOCTYPE html>
<html>
  <head>
       <title>Carrefour123</title>
  </head>
  <body>
        <!-- Guardo en una variable ($conn) la conexión con mi DB (La obtengo meciante el cmd: new mysqli)
             Con esta variable ($conn) podré jecutar querys y otras acciones. 2023 -->
        <?php $aquicambio = new mysqli("localhost", "josecarlos", "josecarlos","Carrefour"); ?>

        <!-- Cabecera -->
        <br><br><br><br>
        <header><h1>Carrefour</h1></header>


        <!--                INSERTAR PRODUCTO                 -->
        <!--                =====================               -->
        <br><h2>Insertar un Producto</h2><br>
        <form action="acciones/insertarProducto.php" method="GET">
              <label>Nombre:  </label>
              <input type='text' name='nombre'>
	      <label>Precio:  </label>
              <input type='text' name='precio'>
	      <button type="submit">Insertar</button>
	</form>
	<br><br><hr><hr>


        <!--                ELIMINAR PRODUCTO                 -->
        <!--                =====================               -->
        <br><h2>Eliminar un Producto</h2><br>
	<form action="acciones/eliminarProducto.php" method="GET">
              <label>Producto:  </label>
              <select id='prods' name='idProd'>
              <?php
               //  Leer las tablas de productos y de alamce para preparar los dos Combobox del Formulario
               $tablaProductos = $conn->query("SELECT * FROM productos;");
               // ComboBox de Productos (Etiqueta Select)
	       while ($filaProd = mysqli_fetch_array($tablaProductos)){
                       $idProd = $filaProd["codpro"];
                       $nameProd = $filaProd["name"];
                       echo "<option value='$idProd'>$nameProd</option>";
                }
               ?>
               </select>
               <button type="submit">Eliminar</button>
       </form>
       <br><br><hr><hr>


       <!--                Listar Productos Con Filtro                 -->
       <!--             ===============================               -->
       <br>
       <br><h2>Lista de Productos</h2>
       <?php
 	$miConsulta ="select * from productos;";
	$resultado = $conn->query($miConsulta);
	while ($rowProducto = mysqli_fetch_array($resultado)){
		echo "<p>" .  $rowProducto['name'] . "<strong> --------- </strong> " .
                              $rowProducto['precio']  . " </p>";
	}
	$conn->close();
        ?>
	<br><br><hr><hr>

  </body>
</html>
