
<br>
<br>
<div class="col-md-12 col-sm-12 justify-content-start">
<?php  if ($rowformacion==0 or $rowhistorial==0 or $rowhojadevida==0){ 
    echo "<h5 class='from-control'>No tiene registrada información necesaria para poder aplicar a una vacante ejm: registrar hoja de vida, registrar formacion y/o registrar experiencia laboral</h5>";
}else{ ?>
   <div class="x_title">
    <h5 style="font-weight:bolder;" class="text-center">OFERTAS LABORALES</h5>
</div>
<div style="padding:10px 5px 5px 5px;" class="x_content justify-content-start col-md-12">
                            <?php
                            foreach ($aplicaciones as $vac) {
                            echo"<div  class='card col-md-6' style='float:left;width: 40rem;border-radius:50px;border:1px inset;'>
                              <div class='card-body'>
                                <h5 class='card-title'><b>".$vac['vac_nombre'] ."</b></h5>";
                            echo "<p class='card-text'></p>
                            </div>
                              <ul class='list-group list-group-flush'>
                                <li class='list-group-item'><b>Fecha de contratación: </b>". $vac['vac_fecha']."</li>
                                <li class='list-group-item'><b>Años de experiencia: </b>". $vac['vac_años_xp']."</li>
                                <li class='list-group-item'><b>Jornada laboral:</b> ".$vac['vac_jornada_laboral']."</li>
                                <li class='list-group-item'><b>Tipo contrato:</b> ".$vac['vac_tipo_contrato']."</li>
                                <li class='list-group-item'><b>Salarío:</b> ".$vac['vac_salario']."</li>
                                <li class='list-group-item'><b>Nivel de educación:</b> ".$vac['vac_educacion']."</li>
                            </ul>
                            <div class='card-body'>
                            <a id='modaldetallevacante' class='radios btn btn-warning' value'' data-url='" . getUrl("Usuario", "Ofertas", "modaldetalle", array("id_vacante" => $vac['id_vacante']), "ajax") . "'>Ver detalle</a>
                                <a class='radios btn btn-primary'  name='id_vacante' href='" . getUrl("Usuario", "Ofertas", "vistaAplicar", array("id_vacante" => $vac['id_vacante'])) . "'>Aplicar</a>
                            </div>
                            </div>";

                            }
                            ?>
</div> 
<?php }
  
?>

