<div class="container">
	<div class="col-lg-8 col-lg-offset-2 col-md-6 col-md-offset-3">
	<form action="<?= base_url() ?>usuarios/insert" method="post" id="">
	    <div class="form-group">
	        <label for="idPer">Perfil</label>
	        <select name="idPer" class="form-control">
	            	<option value="">Selecione...</option>
	            <?php foreach ($selPerfil as $value) { ?>
	                <option value="<?= $value->id_perfil ?>"> <?= $value->nombre_perfil ?> </option>
	            <?php } ?>

	        </select>
	    </div>
	     <div class="form-group">
	        <label for="idSocio">Socio</label>
	        <select name="idSocio" class="form-control">
	            	<option value="">Selecione...</option>
	            <?php foreach ($selSocio as $value) { ?>
	                <option value="<?= $value->id_socio ?>"> <?= $value->nombre . ' ' . $value->apellidos ?> </option>
	            <?php } ?>

	        </select>
	    </div>
	    <div class="form-group">
	        <label for="usuario">Usuario</label>
	        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario">
	    </div>
	    <div class="form-group">
	        <label for="pass">Contraseña</label>
	        <input type="password" class="form-control" name="pass" id="pass" placeholder="Contraseña">
	    </div>
	    <div class="form-group">
	        <label for="telefono">Estado</label>
	        <select name="estado" id="estado">
	            <option value="1">Activo</option>
	            <option value="0">Inactivo</option>
	        </select>
	    </div>
	    <button type="submit" class="btn btn-primary">Registrar Usuario</button>
	</form>
	</div>
</div>