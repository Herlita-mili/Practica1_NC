<?php
/*
Este archivo lista todos los datos de la tabla, obteniendo a los mismos como un arreglo
*/
?>
<?php
include_once "base_de_datos.php";
$sentencia = $base_de_datos->query("select id, nombre, edad from mascota");
$mascota = $sentencia->fetchAll(PDO::FETCH_OBJ);
?>

<?php include_once "encabezado.php" ?>
<div class="row">

	<div class="col-12">
		<h1>Listar con arreglo - PHP</h1>
		<a href="https://tecsup.instructure.com/courses/25788" target="_blank"></a>
		<br>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead class="thead-dark">
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Edad</th>
						<th>Editar</th>
						<th>Eliminar</th>
					</tr>
				</thead>
				<tbody>
					<!--
					Modificación
					-->
					<?php foreach($mascota as $mascota){ ?>
						<tr>
							<td><?php echo $mascota->id ?></td>
							<td><?php echo $mascota->nombre ?></td>
							<td><?php echo $mascota->edad ?></td>
							<td><a class="btn btn-success" href="<?php echo "editar.php?id=" . $mascota->id?>">Editar</a></td>
							<td><a class="btn btn-danger" href="<?php echo "eliminar.php?id=" . $mascota->id?>">Eliminar</a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include_once "pie.php" ?>
