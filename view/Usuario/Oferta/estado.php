<div class="x_content">
    <small class="xc_color">SU POSICIÓN EN EL PROCESO DE SELECCIÓN
    </small>
</div>
<?php
if ($row==0){ 
    echo "<h3 class='col-md-12'>NO HAY APLICACIONES REGISTRADAS AÚN</h3>";
}else{
    foreach($listado as $lis){ 
         if ($lis['selec_nombre']=='No seleccionado') {
?>
<div class=" col-md-12 col-sm-10 ">

    <div style="background:#817e7e;" class="x_panel col-md-12">
        <div class="row justify-content-start col-md-12">
            <div class="col-md-3 text-center">
                <br>
                <b> <label for="">VAC_<?=$lis['id_vacante']?></label></b>

            </div>
            <div class="col-md-3 text-center">
                <br>
                <b> <label for=""><?=$lis['vac_nombre']?></label></b>

            </div>
            <div class="col-md-3 text-center">
                <br>
                <b> <label for=""><?=$lis['selec_nombre']?></label></b>
            </div>
            <a href="<?php echo getUrl("Usuario","Ofertas","consult")?>" type="button"
                class="btn btn-primary btn-lg">Volver a
                las vacantes</a>
        </div>

    </div>

</div>
<?php
        }else {
               
?>
<div class=" col-md-12 col-sm-10 ">

<div class="x_panel col-md-12">
    <div class="row justify-content-start col-md-12">
        <div class="col-md-3 text-center">
            <br>
            <b> <label for="">VAC_<?=$lis['id_vacante']?></label></b>

        </div>
        <div class="col-md-3 text-center">
            <br>
            <b> <label for=""><?=$lis['vac_nombre']?></label></b>

        </div>
        <div class="col-md-3 text-center">
            <br>
            <b> <label for=""><?=$lis['selec_nombre']?></label></b>
        </div>
        <a href="<?php echo getUrl("Usuario","Ofertas","consult")?>" type="button"
            class="btn btn-primary btn-lg">Volver a
            las vacantes</a>
    </div>

</div>

</div>
<?php
        }
    }
}
?>