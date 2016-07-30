

	<?php echo form_open("", array('id' => 'login_form')); ?>

		<label for="usuario">Usuario</label>
		<input type="text" name="usuario" class="input">
		<label for="pass">Contraseña</label>
		<input type="password" name="pass" class="input">

		<input type="submit" value="Iniciar sesión" id="bt_form">

	<?php echo form_close(); ?>