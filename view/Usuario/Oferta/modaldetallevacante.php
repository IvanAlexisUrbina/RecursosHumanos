<?php
foreach($vacantes as $vac) {
?>
      <div class="modal-body">  
      </div>

     <div class="col-md-12">
        <img class="logousu" src="images/logogersazul.png">
      </div>

      <div class="row justify-content-start">

        <div class="col-md-6">
            <label class="titulos_negrita">Nombre</label>
            <input type="text" placeholder="" class="estiloinput form-control oferta" readonly value="<?= $vac['vac_nombre']?>">
        </div>


        <div class="col-md-6">
            <label class="titulos_negrita">Tipo contrato</label>
            <input type="text" placeholder="" class="estiloinput form-control oferta" readonly value="<?= $vac['vac_tipo_contrato']?>">
        </div>

        <div class="col-md-6">
            <label class="titulos_negrita">Nivel</label>
            <input type="text" placeholder="" class="estiloinput form-control oferta" readonly value="<?= $vac['vac_educacion']?>">
        </div>

        <div class="col-md-6">
            <label class="titulos_negrita">Salario</label>
            <input type="text" placeholder="" class="estiloinput form-control oferta" readonly value="<?= $vac['vac_salario']?>">
        </div>

        <div class="col-md-6">
            <label class="titulos_negrita">Años experiencia</label>
            <input type="text" placeholder="" class="estiloinput form-control oferta" readonly value="<?= $vac['vac_años_xp']?>">
        </div>
      

        <div class="col-md-6">
            <label class="titulos_negrita">Fecha limite de aplicacion</label>
            <input type="text" placeholder="" class="estiloinput form-control oferta" readonly value="<?= $vac['vac_fecha']?>">
        </div>
        <div id="desc" class="col-md-12">
            <label class="titulos_negrita">Descripcion</label><br>
           <textarea class="estiloinput form-control oferta" readonly cols="30" rows="10"><?= $vac['vac_descripcion']?></textarea>
        </div>
    </div>
<?php   }               
?>

