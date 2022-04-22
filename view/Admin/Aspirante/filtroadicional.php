<?php 
if($_SESSION['rolId']==1){
?>
<div class=" col-md-12 col-sm-10 ">
    <div class="x_title" class="">
        <small class="xc_color">ASPIRANTES REGISTRADOS <br><?php
                     $cont=0;
                    foreach($Usuario as $usu){
                       $cont+=1;
                        if($cont<=1){
                        echo "*".$usu['vac_nombre']."*";
                    }
                    }
                    ?>
        </small>
    </div>
    <div class=" x_panel">
        <div class="row justify-content-start col-md-12" style="" id="actividades">
            <h5 class="titulos_negrita">FILTRAR POR ACTIVIDADES</h5>
            <div id="area1" class="col-md-12 titulos_negrita efectohover"><label>Estudio de Sistemas
                    Eléctricos</label></div>
            <div id="div1" class="ocultardivs col-md-12">
                <?php foreach ($actividades1 as $act) {?>
                <input class="actividadesbox" type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>
                    id="aspirantes"
                    data-url="<?php echo getUrl("Admin", "Aspirante", "aspirantesdinamicos",array("id_vacante" => $usu['id_vacante']), "ajax") ?>">
                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                <?php }?>
            </div>
            <div id="area2" class="col-md-12 titulos_negrita efectohover"><label>Diseño e
                    Ingeniería</label></div>
            <div id="div2" class="ocultardivs col-md-12">
                <?php foreach ($actividades2 as $act) {?>
                <input class="actividadesbox" type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>
                    id="aspirantes"
                    data-url="<?php echo getUrl("Admin", "Aspirante", "aspirantesdinamicos",array("id_vacante"=>$usu['id_vacante']), "ajax") ?>">
                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                <?php  }?>
            </div>
            <div id="area3" class="col-md-12 titulos_negrita efectohover"><label>Pruebas Automatización
                    y Control</label></div>

            <div id="div3" class="ocultardivs col-md-12">
                <?php foreach ($actividades3 as $act) {?>
                <input class="actividadesbox" type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>
                    id="aspirantes"
                    data-url="<?php echo getUrl("Admin", "Aspirante", "aspirantesdinamicos", array("id_vacante"=>$usu['id_vacante']), "ajax") ?>">
                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                <?php  }?>
            </div>
            <div id="area4" class="col-md-12 titulos_negrita efectohover"> <label>Calidad de
                    potencia</label></div>
            <div id="div4" class="ocultardivs col-md-12">
                <?php foreach ($actividades4 as $act) {?>
                <input class="actividadesbox" type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>
                    id="aspirantes"
                    data-url="<?php echo getUrl("Admin", "Aspirante", "aspirantesdinamicos",array("id_vacante"=>$usu['id_vacante']), "ajax") ?>">
                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                <?php }?>
            </div>
            <div id="area5" class="col-md-12 titulos_negrita efectohover"><label>Eficiencia
                    Energética</label></div>

            <div id="div5" class="ocultardivs col-md-12">
                <?php foreach ($actividades5 as $act) {?>
                <input class="actividadesbox" type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>
                    id="aspirantes"
                    data-url="<?php echo getUrl("Admin", "Aspirante", "aspirantesdinamicos", array("id_vacante"=>$usu['id_vacante']), "ajax") ?>">
                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                <?php }?>
            </div>
            <div id="area6" class="col-md-12 titulos_negrita efectohover"><label>Sistemas de Puesta a
                    Tierra</label></div>
            <div id="div6" class="ocultardivs col-md-12">
                <?php foreach ($actividades6 as $act) {?>
                <input class="actividadesbox" type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>
                    id="aspirantes"
                    data-url="<?php echo getUrl("Admin", "Aspirante", "aspirantesdinamicos", array("id_vacante"=>$usu['id_vacante']), "ajax") ?>">
                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                <?php  }?>
            </div>

            <div id="area7" class="col-md-12 titulos_negrita efectohover"><label>Comercial</label>
            </div>

            <div id="div7" class="ocultardivs col-md-12">
                <?php foreach ($actividades7 as $act) {?>
                <input class="actividadesbox" type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>
                    id="aspirantes"
                    data-url="<?php echo getUrl("Admin", "Aspirante", "aspirantesdinamicos", array("id_vacante"=>$usu['id_vacante']), "ajax") ?>">
                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                <?php    }?>
            </div>
            <div id="area8" class="col-md-12 titulos_negrita efectohover"><label>Recursos
                    Humanos</label></div>
            <div id="div8" class="ocultardivs col-md-12">
                <?php foreach ($actividades8 as $act) {?>
                <input class="actividadesbox" type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>
                    id="aspirantes"
                    data-url="<?php echo getUrl("Admin", "Aspirante", "aspirantesdinamicos", array("id_vacante"=>$usu['id_vacante']), "ajax") ?>">
                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                <?php }?>
            </div>
            <div id="area9" class="col-md-12 titulos_negrita efectohover"><label>Contador</label></div>

            <div id="div9" class="ocultardivs col-md-12">
                <?php foreach ($actividades9 as $act) {?>
                <input class="actividadesbox" type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>
                    id="aspirantes"
                    data-url="<?php echo getUrl("Admin", "Aspirante", "aspirantesdinamicos",array("id_vacante"=>$usu['id_vacante']), "ajax") ?>">
                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                <?php  }?>
            </div>
            <div id="area10" class="col-md-12 titulos_negrita efectohover"><label>Ingeniería
                    civil</label></div>

            <div id="div10" class="ocultardivs col-md-12">
                <?php foreach ($actividades10 as $act) {?>
                <input class="actividadesbox" type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>
                    id="aspirantes"
                    data-url="<?php echo getUrl("Admin", "Aspirante", "aspirantesdinamicos", array("id_vacante"=>$usu['id_vacante']), "ajax") ?>">
                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                <?php }?>
            </div>
            <div id="area11" class="col-md-12 titulos_negrita efectohover"><label>Sistemas</label></div>
            <div id="div11" class="ocultardivs col-md-12">
                <?php foreach ($actividades11 as $act) {?>
                <input class="actividadesbox" type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>
                    id="aspirantes"
                    data-url="<?php echo getUrl("Admin", "Aspirante", "aspirantesdinamicos",array("id_vacante"=>$usu['id_vacante']), "ajax") ?>">
                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                <?php }?>
            </div>
        </div>
        <div class="col-md-6">
            <?php
                    foreach($Usuario as $usu){
                   echo"<input type='hidden' id='id_vacante' name='id_vacante' value='".$usu['id_vacante']."'>";
                     }
                    ?>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">

                    <!-- <input type="text" name="filtro" id="filtro"
                    data-url=""
                class="form-control"> -->

                    <div id="copia" class="card-box table-responsive">
                        <table id="data" class=" table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class='text-light text-center'>Nombre/s</th>
                                    <th class=' text-light text-center'>Apellido/s</th>
                                    <th id="th_desc" class='text-light text-center'>Estado</th>
                                    <th id="th_desc" class='text-light text-center'>Experiencia</th>
                                    <th id="th_desc" class='text-light text-center'>Correo</th>
                                    <th id="th_desc" class='text-light text-center'>Acciones</th>
                                </tr>
                            </thead>
                            <?php   
                            foreach ($Usuario as $usu) {
                                echo"<tr>";
                                echo"<td class='text-center'>".$usu['usu_nombre']."</td>";
                                echo"<td class='text-center'>".$usu['usu_apellido']."</td>";
                                echo"<td class='text-center'>".$usu['selec_nombre']."</td>";
                                echo"<td class='text-center'>".$usu['SUM(hist_añosxp)']." años</td>";
                                echo"<td class='text-center'>".$usu['usu_correo']."</td>";
                                echo"<td class='text-center'><a  value='' name='usu_id' id='ModalInfoUsuario' data-url=".getUrl("Admin","Aspirante","ModalInfoUsuario",array("usu_id" => $usu['usu_id'],"id_vacante" => $usu['id_vacante']),"ajax")."><button  class='btn btn-dark btn-sm' title='Vista previa'><i class='fa fa-eye'></i></button></a></td>
             </tr>";
                            }                        
                        ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
<?php
}else{
    redirect("indexUsu.php");
}
?>