<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <h1 class="text-center">EDITAR REGISTRO</h1>
        <form class="form-horizontal" method="post" action="<?= base_url('socios/update') ?>">

           
                <input type="hidden" name="id_socio" value="<?= $datosSocio->id_socio ?>">

                <div class="form-group">
                    <label for="nombre" class="col-sm-2 control-label">Nombre</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $datosSocio->nombre ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="apellidos" class="col-sm-2 control-label">Apellidos</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="<?= $datosSocio->apellidos ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="dni" class="col-sm-2 control-label">DNI</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="dni" name="dni" value="<?= $datosSocio->dni ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="direccion" class="col-sm-2 control-label">Dirección</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="direccion" name="direccion" value="<?= $datosSocio->direccion ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ciudad" class="col-sm-2 control-label">Ciudad</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="ciudad" name="ciudad" value="<?= $datosSocio->ciudad ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Correo</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="email" name="email" value="<?= $datosSocio->email ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="telefono" class="col-sm-2 control-label">Teléfono</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?= $datosSocio->telefono ?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="promedio" class="col-sm-2 control-label">Promedio</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="promedio" name="promedio" value="<?= $datosSocio->promedio ?>">
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



