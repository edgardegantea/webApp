<?php include_once '../plantilla/menu.php'; ?>


<br><br>

<h1>Datos del producto</h1>


<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<div class="row">
	<div class="col-2"></div>
	<div class="col-4">
		<form method="POST" action="guardarProducto.php">
			<div>
				<label for="codigoProducto">Código del producto: </label>
				<input class="form-control" type="text" name="codigoProducto" placeholder="Código del producto">
			</div>
			<div>
				<label for="nombreProducto">Nombre del producto: </label>
				<input class="form-control" type="text" name="nombreProducto" placeholder="Nombre del producto">
			</div>
			<div>
				<label for="marcaProducto">Marca: </label>
				<input class="form-control" type="text" name="marcaProducto" placeholder="Marca del producto">
			</div>
			<div>
				<label for="precioProducto">Precio: </label>
				<input class="form-control" type="number" name="precioProducto" placeholder="Preciodel producto">
			</div>
		</div>
		<div class="col-4">
			<div>
				<label for="fabricanteProducto">Fabricante: </label>
				<input class="form-control" type="text" name="fabricanteProducto" placeholder="Fabricante del producto">
			</div>
			<div>
				<label for="caducidadProducto">Caducidad: </label>
				<input class="form-control" type="date" name="caducidadProducto" placeholder="Caducidad del producto">
			</div>
			<div>
				<label for="descripcionProducto">Descripción: </label>
				<textarea class="form-control" rows="4" type="text" name="descripcionProducto" placeholder="Descripción del producto"> </textarea>
			</div>
<div>
	<input type="submit" name="btnGuardar" value="Guardar">
	<input type="reset" name="btnReset" value="Restablecer">
</div>


		</div>
	</form>
	<div class="col-2"></div>