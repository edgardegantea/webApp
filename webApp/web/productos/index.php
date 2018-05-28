<?php include_once '../plantilla/menu.php'; ?>


<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<br><br>

<div align="center" class="row">
    <div class="col-1"></div>

    <form action="crearProducto.php">
        <input type="submit" value="Nuevo" class="btn btn-outline-primary">
    </form>


    <div class="col-8"><h3>Inventario de productos</h3></div>
    <div class="col-1"></div>
</div>

<div class="row">
	<div class="col-1"></div>
	<div class="col-10">
		<table class="table table-striped table-responsive">
			
			<thead>
				<tr>
					<th>ID</th>
					<th>CÓDIGO</th>
					<th>NOMBRE</th>
					<th>MARCA</th>
					<th>PRECIO</th>
					<th>FABRICANTE</th>
					<th>CADUCIDAD</th>
					<th>DESCRIPCIÓN</th>
					<th>ACCIONES</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					require_once "../../config/conexion.php";
					$query = "SELECT * FROM tbl_productos";
					$consultaProductos=consultarSQL($query);

					while($fila=$consultaProductos->fetch_array(MYSQLI_ASSOC)){
							echo "<tr>
								<td>".$fila['id_prod']."</td>
								<td>".$fila['codigo_prod']."</td>
								<td>".$fila['nombre_prod']."</td>
								<td>".$fila['marca_prod']."</td>
								<td>".$fila['precio_prod']."</td>
								<td>".$fila['fabricante_prod']."</td>
								<td>".$fila['caducidad_prod']."</td>
								<td>".$fila['descripcion_prod']."</td>
								<td>
								<span class='badge'><a href='verProducto.php?idProd=".$fila['id_prod']."'>Ver</a></span>


								<span class='badge'><a href='actualizarProducto.php?idProd=".$fila['id_prod']."'>Editar</a></span>



								<span class='badge'><a href='eliminarProducto.php?idProd=".$fila['id_prod']."'>Eliminar</a></span>



								</td>
							</tr>";
					}
				?>
						</tbody>
			<tfoot>
				
				<tr>
					<th>ID</th>
					<th>CÓDIGO</th>
					<th>NOMBRE</th>
					<th>MARCA</th>
					<th>PRECIO</th>
					<th>FABRICANTE</th>
					<th>CADUCIDAD</th>
					<th>DESCRIPCIÓN</th>
					<th>ACCIONES</th>
				</tr>
			</tfoot>
		</table>

	</div>
	<div class="col-1"></div>
</div>
