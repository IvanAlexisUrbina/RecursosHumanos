<br>
<br>
<div class="col-md-12 col-sm-12">
<?php  if ($rowformacion==0 or $rowhistorial==0 or $rowhojadevida==0){ 
    echo "<h5 class='from-control'>No tiene registrada información necesaria para poder aplicar a una vacante ejm: registrar hoja de vida, registrar formacion y/o registrar experiencia laboral</h5>";
}else{
?>

    <div class="x_content">

        <div class="x_panel">
            <div class="col-md-12 text-center titlesbig">
                <h5>OFERTAS DE VACANTES</h5>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <table id="data" class="table table-striped table-hover" style="width:100%;">

                            <thead style="background-color: #00113d; color:#fff;">
                                <tr>
                                    <th id="idtablas" class='text-center '>ID</th>
                                    <th class='text-center'>Vacantes disponibles</th>
                                    <th id="th_desc" class='text-center'>Fecha contratación</th>
                                    <th class='text-center'>Años de experiencia</th>
                                    <th id="th_desc" class='text-center'>Acciones</th>

                                </tr>
                            </thead>
                            <?php
                            foreach ($aplicaciones as $vac) {

                                echo "<tr>";
                                echo "<td class='text-center'>" . "VAC_" . $vac['id_vacante'] . "</td>";
                                echo "<td class='text-center'>" . $vac['vac_nombre'] . "</td>";
                                echo "<td class='text-center'>" . $vac['vac_fecha'] . "</td>";
                                echo "<td class='text-center'>" . $vac['vac_años_xp'] . " Años de experiencia requeridos</td>";

                                echo "<td class='text-center'>

                              <a class='btn btn-primary'  name='id_vacante' href='" . getUrl("Usuario", "Ofertas", "vistaAplicar", array("id_vacante" => $vac['id_vacante'])) . "'>Aplicar</a>

                             
                              <a id='modaldetallevacante' class='btn btn-warning' value'' data-url='" . getUrl("Usuario", "Ofertas", "modaldetalle", array("id_vacante" => $vac['id_vacante']), "ajax") . "'>Ver detalle</a>

                              </td>";
                                echo  "</tr>";
                            }
                            ?>
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
    </div>
</div>
</div>
<?php
}
?>