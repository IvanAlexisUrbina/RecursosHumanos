<?php 
if($_SESSION['rolId']==1){
?>
<nav class="navbar navbar-dark navbar-expand-sm" style="background-color:#181864;">
            <a class="navbar-brand" href="#">
                Historial registrado
            </a>
        </nav>
        <!--AQUI ESTA EL CONTEDEDOR DE TODA LA EXPERIENCIA LABORAL QUE OVYA  MOSTRAR-->
        <div class="divcontenedores">

            <?php
              if ($row==0){ 
                echo "<h3 class='col-md-12'>NO HAY INFORMACION REGISTRADA</h3>";
            }else{
               foreach($historial as $hist){
                echo "<div class='show' class='col-md-12'>";
                echo "<div class='row justify-content-start'>";
                echo "<div class='col-md-3'>";
                echo "            <label class='titulos_negrita'>Fecha inicio*</label>";
                echo "            <input value='".$hist['hist_fecha_inicio']."'readonly class='oferta estiloinput form-control' type='date'>";
                echo "        </div>";
                echo "        <div class='col-md-3'>";
                echo "            <label class='titulos_negrita'>Fecha final*</label>";
                echo "        <input  value='".$hist['hist_fecha_fin']."'readonly class='oferta estiloinput form-control' type='date'>";
                echo "        </div>";
                echo"        <div class='col-md-6'>";
                echo"             <label class='titulos_negrita'>¿Usted trabaja actualmente?*</label><br>";
                if($hist['hist_trabajoactual']== "si"){
                echo" <input type='checkbox' checked disabled> trabaja actualmente aquí";
             }else{
                 echo" <input type='checkbox' disabled>No trabaja ya aquí"; 
             }
                echo"        </div>";
                echo"         <div class='col-md-6'>";
                echo "         <label class='titulos_negrita'>Cargo*</label>";
                echo "           <input value='".$hist['hist_cargo']."' readonly type='text'";
                echo"                 class='estiloinput form-control oferta'>";
                echo "        </div>";
                echo"         <div class='col-md-6'>";
                echo"             <label class='titulos_negrita'>Empresa/organización*</label>";
                echo             "<input value='".$hist['hist_empresa']."'readonly type='text'class='estiloinput form-control oferta'>";
                echo"         </div>";
                echo"         <br><br><br><br>";
                echo"         <div class='col-md-12'>";
                echo"         <label class='titulos_negrita'>Descripción actividades*</label>";
                echo"            <textarea  readonly class='estiloinput form-control desc_tarea' cols='20' rows='4'>";
                echo $hist['hist_descripcion'];
                echo"          </textarea>";
                echo"         </div>";
                echo"         <div class='col-md-3'>";
                echo"             <label class='titulos_negrita'>Ciudad*</label>";
                echo"             <input readonly type='text'value='".$hist['hist_ciudad']."' class='estiloinput form-control oferta'>";
                echo"         </div>";
                echo"         <div class='col-md-3'>";
                echo"             <label class='titulos_negrita'>País*</label>";
                echo"             <input readonly value='".$hist['hist_pais']."' type='text' class='estiloinput form-control oferta'>";
                echo"         </div>";
                echo "        <div class='col-md-6'>";
                echo         "<label class='titulos_negrita'>Certificado*</label><br>";
                echo "<a id='consultarhistorial' name='id_hist' type='button' data-url=".getUrl("Usuario","Ofertas","consultarhistorial",array("id_hist" => $hist['id_hist']),"ajax")." class='btn btn-primary'><i class='fa fa-file'></i></a><small>Aquí puede visualizar el certificado*</small>";
                echo         "</div>";
                echo"         <div style='padding:20px;text-align:center;font-weight:bold;'class='col-md-12'>";
                echo" <label class='titulos_negrita'>**Estas son las actividades seleccionadas<br>Según el Area y las actividades**</label><br>";
                echo"        </div>";
                echo"<div class='row justify-content-start col-md-12' style='' id=''>";
                echo"<div id='actividadesmore' name='id_hist'  data-url=".getUrl("Usuario","Ofertas", "actividadesdinamicas",array("id_hist" => $hist['id_hist']), "ajax")." class='col-md-12 titulos_negrita efectohover'><label>↓↓Mostrar más↓↓</label>
                     </div>
                     <div id='' class='actividadesresult col-md-12'>";
                echo "</div>
                      </div>";
                echo"</div>";
           
            }
        }
                ?>
        </div>
        <?php
}else{
    redirect("indexUsu.php");
}
?>