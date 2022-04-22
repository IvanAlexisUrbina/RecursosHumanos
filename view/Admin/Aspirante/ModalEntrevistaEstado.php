
<?php 
if($_SESSION['rolId']==1){
?>
<?php
foreach ($usuario as $usu) {
?>
    <div class="">
        <form id="alertaestadoaspirante" action="<?php echo getUrl("Admin", "Formulario","modalentrevistaupdate");?>" method="post">
            <div class="col-md-12 form-group">
                <label>Nombre del aspirante</label> 
                <input type="text" readonly  name="usu_nombre" value="<?php echo $usu['usu_nombre']; ?>" class="form-control">
                <input type="hidden" name="asp_id" value="<?php echo $usu['usu_id'] ?>" class="form-control">
            </div>
            <?php foreach ($vacante as $vac) {?>
               <div class="col-md-12 form-group">
               <label>Nombre de la vacante</label> 
               <input type="text" readonly  name="vac_nombre" value="<?php echo $vac['vac_nombre']; ?>" class="form-control">
               <input type="hidden" name="id_vacante" value="<?php echo $vac['id_vacante'] ?>" class="form-control">
           </div>
           <?php }?>
            
            <div class="col-md-12 form-group">
                <label>Actualizar Estado</label>
                <select name="estado" class="form-control">
                    <option value="">Seleccione el estado</option>

                    <?php foreach ($Estados as $est) { ?>

                        <option value='<?= $est['id_seleccionado'] ?>'><?= $est['selec_nombre'] ?></option>

                    <?php } ?>

                </select><br>
            </div>

            <div class="modal-footer">
                
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <input type="submit" class="btn btn-primary float-right" value="Editar">
            </div>

        </form>
        <div>
        <?php
    }
        ?>
               <?php
}else{
    redirect("indexUsu.php");
}
?>