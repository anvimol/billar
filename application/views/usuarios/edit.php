<div class="container"></div>
<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <h1 class="text-center">EDITAR REGISTRO</h1>
        <form class="form-horizontal" method="post" action="<?= base_url('usuarios/update') ?>">

           
                <input type="hidden" name="id_usuario" value="<?= $datosUsuario->id_usuario ?>">

                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Usuario</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="usuario" name="usuario" value="<?= $datosUsuario->usuario ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="pass" class="col-sm-2 control-label">Contraseña</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="pass" name="pass">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">Estado</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="estado" name="estado" value="<?= $datosUsuario->estado ?>"><label>1. Activo || 0. Inactivo</label>
                    </div>
                </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Actualizar Usuario</button>
                </div>
            </div>
        </form>
    </div>
</div>
</div>