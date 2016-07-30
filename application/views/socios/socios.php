<div class="col-lg-10 col-lg-offset-1">
	<div class="panel panel-default">
		<div class="panel-heading">
			<h3 class="panel-title">Listado de Socios</h3>
		</div>
		
			<table class="table table-bordered table-condensed">
				<tr>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>DNI</th>
					<th>Dirección</th>
					<th>Ciudad</th>
					<th>Correo</th>
					<th>Teléfono</th>
					<th>Promedio</th>
					<th>Acciones</th>
				</tr>
				<?php foreach ($socios as $socio): ?>
					<tr>
						<td><?php echo $socio->nombre; ?></td>
						<td><?php echo $socio->apellidos; ?></td>
						<td><?php echo $socio->dni; ?></td>
						<td><?php echo $socio->direccion; ?></td>
						<td><?php echo $socio->ciudad; ?></td>
						<td><?php echo $socio->email; ?></td>
						<td><?php echo $socio->telefono; ?></td>
						<td><?php echo $socio->promedio; ?></td>
						<td>
						<a onclick="if(confirma() == false) return false" href="<?= base_url() ?>socios/delete/<?= $socio->id_socio ?>" class="btn btn-danger">
						<i class="fa fa-trash-o" title="Eliminar" aria-hidden="true"></i>
						  Eliminar</a>
						<a href="<?= base_url() ?>socios/edit/<?= $socio->id_socio ?>" class="btn btn-success">
						<i class="fa fa-pencil-square-o" title="Eliminar" aria-hidden="true"></i>
						  Editar</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>
	</div>
<?php echo anchor('socios/nuevo', 'Nuevo Socio', array('class' => 'btn btn-primary')); ?>
</div>
