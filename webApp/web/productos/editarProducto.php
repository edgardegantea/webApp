<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<?php



require_once '../../config/conexion.php';

$idProducto = $_POST['idProducto'];
$codigoProd = $_POST['codigoProducto'];
$nombreProd = $_POST['nombreProducto'];
$marcaProd = $_POST['marcaProducto'];
$precioProd = $_POST['precioProducto'];
$fabricanteProd = $_POST['fabricanteProducto'];
$caducidadProd = $_POST['caducidadProducto'];
$descripcionProd = $_POST['descripcionProducto'];

$campos = "codigo_prod='$codigoProd', nombre_prod='$nombreProd', marca_prod='$marcaProd', precio_prod='$precioProd', fabricante_prod='$fabricanteProd', caducidad_prod='$caducidadProd', descripcion_prod='$descripcionProd'";

$query = "UPDATE tbl_productos SET $campos WHERE id_prod = '$idProducto'";
//$actualizarProducto = consultarSQL($query);

if (consultarSQL($query)){
    echo 'El registro ha sido actualizado con éxito.
    
    <form action="index.php">
        <input class="btn-outline-primary" type="submit" value="Regresar" class="btn btn-outline-primary">
    </form>
    ';
} else {
    echo 'Ha ocurrido un error';
}