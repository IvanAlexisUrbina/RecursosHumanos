<?php 
if($_SESSION['rolId']==1){
?>
<?php
foreach ($Usuario as $usu) {
?>
<div id="container" class="">

    <h1 class="titles">&bull;ASPIRANTE&bull;</h1>
    <h1 class="titles">&bull; <?php echo $usu['usu_nombre'] ?>&bull;</h1>
    <div class="">
    </div>
    <div class="col-md-12">

        <img class="logousu" src="images/logogersazul.png">

    </div>
    <form id="alertamodalusuario" action="<?php echo getUrl("Admin","Formulario","modalentrevista");?>" method="POST" class="form form-control" >
        <div class="row">
        <div class="col-md-6">
            <label for="">Nombre/s</label>
           
            <input type="text"  class="titles form form-control" readonly value="<?php echo $usu['usu_nombre'] ?>">
            <input type="hidden" name="usu_id" value="<?php echo $usu['usu_id'] ?>">
            <?php foreach ($Usuariovacante as $usu2){?>
            <input type="hidden" name="id_vacante" value="<?php echo $usu2['id_vacante'] ?>">
            <?php } ?>
        </div>
        <div class="col-md-6">
            <label for="">Apellido/s</label>
            <input type="text"  class="titles form form-control" readonly value="<?php echo $usu['usu_apellido'] ?>">
        </div>
        <div class="col-md-6">
            <label for="">Teléfono</label>
            <input type="text"  class="titles form form-control"  readonly value="<?php echo $usu['usu_telefono']?>"  required>
        </div>
        <div class="col-md-6">
            <label for="">Correo</label>
            <input type="" class="titles form form-control"  readonly placeholder=""  value="<?php echo $usu['usu_correo'] ?>" 
                required>
        </div>
        <div class="col-md-6">
            <label for="">Tipo documento</label>
            <input type="text" class="titles form form-control"  readonly value="<?php echo $usu['usu_tipo_documento'] ?>">
        </div>
        <div class="col-md-6">
            <label for="">Numero de documento</label>
            <input type="text" class="titles form form-control"  readonly value="<?php echo $usu['usu_documento'] ?>">
        </div>
        <?php foreach ($Usuariovacante as $usu2) {
        ?>
        <div class="col-md-6">
            <label for="">Disponibilidad para viajar:</label>
            <input type="text"class="titles form form-control"   readonly value="<?php echo $usu2['usu_viajar'] ?>">
        </div>
        <div class="col-md-6">
        <label for="">Elegible legalmente en el país:</label>
            <input type="text"class="titles form form-control"   readonly value="<?php echo $usu2['usu_elegible'] ?>">
        </div>
        <?php
        }
        ?>
        <div class="col-md-6">
            <label for="">Nivel de educación</label><br>
           <a name="usu_id" target="_black" href="<?php echo getUrl("Admin","Aspirante","educacion",array("usu_id" => $usu['usu_id']))?>"><button type="button" class="btn btn-dark"><i class="fa fa-eye"></i></button></a>
        </div>
        <div class="col-md-6">
            <label for="">Experiencia Laboral</label><br>
            <a name="usu_id" target="_black" href="<?php echo getUrl("Admin","Aspirante","historial",array("usu_id" => $usu['usu_id']))?>"><button type="button" class="btn btn-dark"><i class="fa fa-eye"></i></button></a>          
        </div>
        <?php foreach ($Usuariovacante as $usu2) {
            if($usu2['usu_cartapresentacion']=="../web/carta/"){
                echo "<div class='col-md-6'>";
                echo "<label for=''>Carta de presentación</label><br>";
                echo "<label class='form form-control'>No registró una carta de presentación</label>";
                echo "</div>";
            }else {
        ?>
        <div class="col-md-6"> 
            <label for="">Carta de presentación</label><br>
            <a type="button" target="_black" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/RecursosHumanos'.$usu2['usu_cartapresentacion']?>" class=" btn btn-dark"><i class="fa fa-file"></i></a>
        </div>
        <?php } }
        ?>
        <div class="col-md-6">
            <label for="">Hoja de vida</label><br>
            <?php
if($usu['usu_hojadevida']=="../web/hojas/"){
            echo "<label class='form form-control'>Este usuario no tiene registrada una hoja de vida todavia</label>";
    }else {
            ?>
           <a type="button" target="_black" href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/RecursosHumanos'.$usu['usu_hojadevida']?>" class="modalhojadevida btn btn-dark"><i class="fa fa-file"></i></a>
<?php } ?>
        </div>

        <div class="modal-footer col-md-12">
            <input type="button" data-dismiss="modal" class="btn btn-danger" value="Cancelar" >
            <input  type="submit" class="btn btn-primary"value="Aceptado para entrevista" >
        </div>
        </div>
    </form>

    <!-- // End form -->
</div><!-- // End #container -->
<?php
}
?>
               <?php
}else{
    redirect("indexUsu.php");
}
?>