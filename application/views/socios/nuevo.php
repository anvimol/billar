<div class="col-lg-8 col-lg-offset-2">
	<div class="panel panel-default">
  		<div class="panel-heading">
  		 <h3 class="panel-title">Nuevo socio</h3>
  		</div>
  		<div class="panel-body">
    		<form action="<?= base_url() ?>socios/validar" method="post" role="form">
    			<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="nombre" id="nombre" value="<?= set_value('nombre') ?>">
						</div>
							<?php if(form_error('nombre')) { ?>
									<div class="alert alert-danger" role="alert">
							    		<?= form_error('nombre') ?>
									</div> 
							<?php } ?>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="apellidos">Apellidos</label>
							<input type="text" class="form-control" name="apellidos" id="apellidos" value="<?= set_value('apellidos') ?>">
						</div>
						<?php if(form_error('apellidos')) { ?>
								<div class="alert alert-danger" role="alert">
						    		<?= form_error('apellidos') ?>
								</div> 
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="dni">DNI</label>
							<input type="text" class="form-control" name="dni" id="dni" placeholder="Ingrese su DNI" value="<?= set_value('dni') ?>">
						</div>
						<?php if(form_error('dni')) { ?>
								<div class="alert alert-danger" role="alert">
						    		<?= form_error('dni') ?>
								</div> 
						<?php } ?>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="direccion">Dirección</label>
							<input type="text" class="form-control" name="direccion" id="direccion" value="<?= set_value('direccion') ?>">
						</div>
						<?php if(form_error('direccion')) { ?>
								<div class="alert alert-danger" role="alert">
						    		<?= form_error('direccion') ?>
								</div> 
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="ciudad">Ciudad</label>
							<input type="text" class="form-control" name="ciudad" id="ciudad" value="<?= set_value('ciudad') ?>">
						</div>
						<?php if(form_error('ciudad')) { ?>
								<div class="alert alert-danger" role="alert">
						    		<?= form_error('ciudad') ?>
								</div> 
						<?php } ?>
					</div>

					<div class="col-lg-6">
						<div class="form-group">
							<label for="email">Correo</label>
							<input type="email" class="form-control" name="email" id="email" value="<?= set_value('email') ?>">
						</div>
						<?php if(form_error('email')) { ?>
								<div class="alert alert-danger" role="alert">
						    		<?= form_error('email') ?>
								</div> 
						<?php } ?>
					</div>

				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="telefono">Telefono</label>
							<input type="text" class="form-control" name="telefono" id="telefono" value="<?= set_value('telefono') ?>">
						</div>
						<?php if(form_error('telefono')) { ?>
								<div class="alert alert-danger" role="alert">
						    		<?= form_error('telefono') ?>
								</div> 
						<?php } ?>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="promedio">Promedio</label>
							<input type="text" class="form-control" name="promedio" id="promedio">
						</div>
						<?php if(form_error('promedio')) { ?>
								<div class="alert alert-danger" role="alert">
						    		<?= form_error('promedio') ?>
								</div> 
						<?php } ?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-save"></i>
								Registrar
							</button>
						</div>
					</div>
				</div>
    		</form>
  		</div>
	</div>
</div>

<!-- <div class="col-lg-8 col-lg-offset-2">
	<div class="panel panel-default">
  		<div class="panel-heading">
  		 <h3 class="panel-title">Nuevo socio</h3>
  		</div>
  		<div class="panel-body">
    		<form action="<?= base_url() ?>socios/insert" method="post" role="form">
    			<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" name="nombre" id="nombre"> 
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="apellidos">Apellidos</label>
							<input type="text" class="form-control" name="apellidos" id="apellidos">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="dni">DNI</label>
							<input type="text" class="form-control" name="dni" id="dni" placeholder="Ingrese su DNI">
						</div>
					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="direccion">Dirección</label>
							<input type="text" class="form-control" name="direccion" id="direccion">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="ciudad">Ciudad</label>
							<input type="text" class="form-control" name="ciudad" id="ciudad">
						</div>

					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="email">Correo</label>
							<input type="email" class="form-control" name="email" id="email">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<div class="form-group">
							<label for="telefono">Telefono</label>
							<input type="text" class="form-control" name="telefono" id="telefono">
						</div>

					</div>
					<div class="col-lg-6">
						<div class="form-group">
							<label for="promedio">Promedio</label>
							<input type="text" class="form-control" name="promedio" id="promedio">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								<i class="fa fa-save"></i>
								Registrar
							</button>
						</div>
					</div>
				</div>
    		</form>
  		</div>
	</div>
</div> -->