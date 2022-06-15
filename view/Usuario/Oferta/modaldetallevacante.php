<?php

foreach($vacantes as $vac) {
?>
      <div class="modal-body">  
      </div>

     <div class="col-md-12">
        <img class="logousu" src="images/logogersazul.png">
      </div>

      <div class="row justify-content-start">
        <div   id="desc" class="col-md-12">
            <label class="titulos_negrita">Descripción</label><br>
           <textarea style="overflow-y: scroll;" class="form-control oferta" readonly cols="30" rows="10"><?= $vac['vac_descripcion']?></textarea>
        </div>
    </div>
<?php  
 }
              
?>

