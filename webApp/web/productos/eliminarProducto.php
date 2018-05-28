<?php require_once '../../config/conexion.php';

if (isset($_GET['idProd'])){
    $id_prod = $_GET['idProd'];
    $query = "DELETE FROM tbl_productos WHERE id_prod = '$id_prod'";

    if(consultarSQL($query)){
        echo 'Producto eliminado con éxito
        <br/>
        <form action="index.php">
        <input type="submit" value="Regresar" class="btn btn-outline-primary">
    </form>

        ';
    } else {
        echo 'Ha ocurrido un error';
    }

}else{
    echo 'Ha ocurrido un error';
}