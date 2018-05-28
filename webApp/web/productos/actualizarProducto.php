<body>
<?php
    if (isset($_GET['idProd'])){

        require_once '../../config/conexion.php';
        $idProducto = $_GET['idProd'];
        $query = "SELECT * FROM tbl_productos WHERE id_prod = '$idProducto'";



        $consultarProductos = consultarSQL($query);
        $fila = $consultarProductos->fetch_array(MYSQLI_ASSOC);

        echo '
        
        <?php include_once \'../plantilla/menu.php\'; ?>


<br><br>

<div align="center">
<h1>Datos del producto</h1>
</div>

<br/> <br/>


<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<div class="row">
	<div class="col-2"></div>
	<div class="col-4">
		<form method="POST" action="editarProducto.php">
		<div>
				<label for="idProducto">id del producto: </label>
				<input value="'.$fila['id_prod'].'" class="form-control" type="hidden" name="idProducto" >
			</div>	
		<div>
				<label for="codigoProducto">Código del producto: </label>
				<input value="'.$fila['codigo_prod'].'" class="form-control" type="text" name="codigoProducto" >
			</div>
			<div>
				<label for="nombreProducto">Nombre del producto: </label>
				<input value="'.$fila['nombre_prod'].'" class="form-control" type="text" name="nombreProducto">
			</div>
			<div>
				<label for="marcaProducto">Marca: </label>
				<input value="'.$fila['marca_prod'].'" class="form-control" type="text" name="marcaProducto">
			</div>
			<div>
				<label for="precioProducto">Precio: </label>
				<input value="'.$fila['precio_prod'].'" class="form-control" type="number" name="precioProducto">
			</div>
		</div>
		<div class="col-4">
			<div>
				<label for="fabricanteProducto">Fabricante: </label>
				<input value="'.$fila['fabricante_prod'].'" class="form-control" type="text" name="fabricanteProducto">
			</div>
			<div>
				<label for="caducidadProducto">Caducidad: </label>
				<input value="'.$fila['caducidad_prod'].'" class="form-control" type="date" name="caducidadProducto">
			</div>
			<div>
				<label for="descripcionProducto">Descripción: </label>
				
				

				<input value="'.$fila['descripcion_prod'].'" class="form-control" type="text"  name="descripcionProducto"> </input>
				

			</div>
<div style="padding: 50px">
	<input class="btn btn-outline-primary" type="submit" name="btnGuardar" value="Guardar">
	
</div>


		</div>
	</form>
	<div class="col-2"></div>
        
        ';




    }else{
        echo 'Ocurrió un error';
    }
?>
</body>