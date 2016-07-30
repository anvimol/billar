<!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php 
                foreach ($resultado as $fila) {
            ?>    
                <div class="post-preview">
                    <a href="<?= base_url(); ?>home/detalle_noticia/<?= $fila->id_noticia ?>">
                        <h2 class="post-title">
                            <?= $fila->titulo ?>
                        </h2>
                        <h3 class="post-subtitle">
                            <?= $fila->descripcion ?>
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#"><?= $fila->nombre ?></a> <?= $fila->fecha ?></p>
                </div>
                <hr>
            <?php } ?>
                
            </div>    
        </div>
    </div>

    <hr>