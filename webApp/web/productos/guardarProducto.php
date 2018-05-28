<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
<?php require_once '../../config/conexion.php';


$codigoProducto = $_POST['codigoProducto'];
$nombreProducto = $_POST['nombreProducto'];
$marcaProducto = $_POST['marcaProducto'];
$precioProducto = $_POST['precioProducto'];
$fabricanteProducto = $_POST['fabricanteProducto'];
$caducidadProducto = $_POST['caducidadProducto'];
$descripcionProducto = $_POST['descripcionProducto'];


$query = "INSERT INTO tbl_productos (codigo_prod, nombre_prod, marca_prod, precio_prod, fabricante_prod, caducidad_prod, descripcion_prod) VALUES ('$codigoProducto', '$nombreProducto', '$marcaProducto', '$precioProducto', '$fabricanteProducto', '$caducidadProducto', '$descripcionProducto')";


if (consultarSQL($query)) {


	echo '



<h1>La operación se realizó con éxito</h1>

<form action="index.php">
<input type="submit" value="Volver" class="btn btn-outline-primary">
</form>

';


} else {
	echo 'Ocurrió un error';
}