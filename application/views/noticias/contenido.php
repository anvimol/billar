<div class="container">
	<h1><?php echo $detalle->titulo ?></h1>

	<h2><?php echo $detalle->descripcion ?></h2>
	<p><strong>Fecha de publicación: </strong><?php echo $detalle->fecha ?></p>
	<p><?php echo $detalle->contenido ?></p>

	<?php echo anchor('home','Volver',array('class' => 'btn btn-success')); ?>
</div>
