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
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-contact-tab">Introduccion</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  <div class="tab-pane fade" id="pills-contact4" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  <div class="tab-pane fade" id="pills-contact5" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  <div class="tab-pane fade" id="pills-contact6" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  <div class="tab-pane fade" id="pills-contact7" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  <div class="tab-pane fade" id="pills-contact8" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  <div class="tab-pane fade" id="pills-contact9" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  <div class="tab-pane fade" id="pills-contact10" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
  <div class="tab-pane fade" id="pills-contact11" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
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