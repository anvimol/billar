<div class="col-lg-10 col-lg-offset-1">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Listado de Usuarios</h2>
        </div>
        
            <table class="table table-bordered table-condensed">
                <tr>
                    <th>Usuario</th>
                    <th>Estado</th>
                    <th>Perfil</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
                <?php foreach ($selUsuario as $usuario): ?>
                    <tr>
                        <td><?php echo $usuario->usuario; ?></td>
                        <td><?php if($usuario->estado == 1) {
                                echo 'Activo';
                            }
                            else {
                                echo 'Inactivo';
                            }  ?>
                        </td>
                        <td><?php if($usuario->id_perfil == 1) {
                                echo 'Administrador';
                            }
                            else {
                                echo 'Presidente';
                            }  ?>
                        </td>
                        <td><?php echo $usuario->nombre . ' ' . $usuario->apellidos; ?></td>
                        <td>
                        <a onclick="if(confirma() == false) return false" href="<?= base_url() ?>usuarios/delete/<?= $usuario->id_usuario ?>" class="btn btn-danger">
                        <i class="fa fa-trash-o" title="Eliminar" aria-hidden="true"></i>
                          Eliminar</a>
                        <a href="<?= base_url() ?>usuarios/edit/<?= $usuario->id_usuario ?>" class="btn btn-success">
                        <i class="fa fa-pencil-square-o" title="Eliminar" aria-hidden="true"></i>
                          Editar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
    </div>
<?php echo anchor('usuarios/nuevo', 'Nuevo Usuario', array('class' => 'btn btn-primary')); ?>
</div>





