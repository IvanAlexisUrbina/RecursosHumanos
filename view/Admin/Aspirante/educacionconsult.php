<?php 
if($_SESSION['rolId']==1){
?>

<nav class="navbar navbar-dark navbar-expand-sm" style="background-color:#181864;">
                <a class="navbar-brand" href="#">
                    Formación registrada
                </a>
            </nav>
            <!--AQUI ESTA EL CONTEDEDOR DE TODA LA FORMACION QUE VAYA  MOSTRAR-->
            <div class="divcontenedores">
                <?php
                if ($row==0){ 
                    echo "<h3 class='col-md-12'>NO HAY INFORMACION REGISTRADA</h3>";
                }else{
               foreach($ejecutar as $form){
               echo "<div style='border:1px solid black;' class='col-md-12'>";
               echo "<div class='row justify-content-start'>";
               echo "<div class='col-md-6'>";
               echo "<label class='titulos_negrita'>Titulo profesional*</label><br>";
               echo "<a id='consultarcertificadoadmin' name='id_formacion' type='button' data-url=".getUrl("Admin","Aspirante","consultarcertificado",array("id_formacion" => $form['id_formacion']),"ajax")." class='btn btn-primary'><i class='fa fa-file'></i></a>";
               echo "</div>";
               echo "<div class='col-md-6'>";
               echo "<label class='titulos_negrita'>Nivel de educación*</label>";
               echo "<input class='estiloinput form-control oferta' readonly value='".$form['form_nivel_de_educacion']."'>";
               echo "</div>";
               echo "<div class='col-md-6'>";
               echo "<label class='titulos_negrita'>Nombre de la Institución o Universidad*</label>";
               echo "<input class='estiloinput form-control oferta' readonly value='".$form['form_nombre']."'>";
               echo "</div>";
               echo "<div class='col-md-6'>";
               echo "<label class='titulos_negrita'>Conocimientos o habilidades*</label>";
               echo "<input class='estiloinput form-control oferta' readonly value='".$form['form_conocimientos']."'>";
               echo "</div>";
               echo "<div class='col-md-6'>";
               echo "<label class='titulos_negrita'>Fecha final*</label>";
               echo "<input type='date' ";
               echo "class='estiloinput form-control oferta' readonly value='".$form['form_fecha_fin']."'>";
               echo "</div>";
               echo "<div class='col-md-6'>";
               echo "<label class='titulos_negrita'>Idiomas*</label>";
               echo"<input class='estiloinput form-control oferta' readonly value='".$form['form_idiomas']."'><br>";
               echo "</div>";                                      
               echo "</div>";
               echo "</div>";
    }
}
                ?>
            </div>
            <?php
}else{
    redirect("indexUsu.php");
}
?>