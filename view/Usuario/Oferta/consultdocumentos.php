<div class="eo #contenedor_arriba x_content">
    <div class="contenedor_de_datos x_panel">

        <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:#181864;">
            <a class="navbar-brand" href="#">
                Documentos soportes
            </a>
        </nav>
        <?php
    foreach ($usuario as $usu) {
?>
        <div class="card" style="border-radius: 5px; border:2px solid black;">
            <div class="row card-body p-4">
                <form id="alertahoja" class="col-md-12"
                    action="<?php echo getUrl("Usuario","Ofertas","actualizarDocumentos")?>" method="post"
                    enctype="multipart/form-data">
                    <div class="col-md-6 caja">
                        <label class="titulos_negrita">Hoja de vida</label><br>
                        <input placeholder="" id="hojadevida" type="file" name="usu_hojadevida"
                            class="eme2 estiloinput">
                    </div>
                    <?php if($usu['usu_hojadevida']=="" or $usu['usu_hojadevida']=="../web/hojas/" or $usu['usu_hojadevida']=="../web/" or $usu['usu_hojadevida']=="../" ){ 
  echo "<div class='col-md-6'><small>No ha subido ninguna hoja de vida por el momento*</small></div>";
 }else{?>
                    <div class="col-md-6 caja">
                        <label class="titulos_negrita">Visualizar hoja de vida*</label><br>
                        <a type="button" target="_black"
                            href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/RecursosHumanos'.$usu['usu_hojadevida']?>"
                            class="modalhojadevida btn btn-dark"><i
                                class="fa fa-file"></i></a><?php echo $usu['usu_fechahojadevida']?> - Última
                        actualización
                    </div>
                    <?php }?>
                    <input type="submit" style="float:left;" type="button" class="btn btn-primary" value="Actualizar">
                </form>
                <div id="visorArchivo"></div>
                <form id="alertamatricula" class="col-md-12"
                    action="<?php echo getUrl("Usuario","Ofertas","actualizarDocumentos2")?>" method="post"
                    enctype="multipart/form-data">
                    <div class="col-md-6 ">
                        <label class="titulos_negrita">Matrícula profesional</label><br>
                        <input type="file" id="matriculaprofesional" name="usu_matricula" class="eme2 estiloinput">
                    </div>
                    <?php if($usu['usu_hojadevida']=="" or $usu['usu_matricula']=="../web/carta/" or $usu['usu_matricula']=="../web/" or $usu['usu_matricula']=="../" ){ 
  echo "<div class='col-md-6'><small>No ha subido ninguna matricula profesional por el momento*</small></div>";
 }else{?>
                    <div class="col-md-6">
                        <label class="titulos_negrita">Visualizar matrícula profesional*</label><br>
                        <a type="button" target="_black"
                            href="<?php echo 'http://'.$_SERVER['HTTP_HOST'].'/RecursosHumanos'.$usu['usu_matricula']?>"
                            class=" btn btn-dark"><i class="fa fa-file"></i></a><?php echo $usu['usu_fechamatricula']?>
                        - Última actualización
                    </div>
                    <?php }?>
                    <div class="col-md-6">
                        <br>
                        <input type="submit" style="float:left;" type="button" class="btn btn-primary"
                            value="Actualizar">
                </form>
                <div id="visorArchivo2"></div>
                <a href="<?php echo getUrl("Usuario","Ofertas","consultusu")?>" type="button"
                    class="btn btn-success">Siguiente</a>
            </div>
        </div>
    </div>
    <?php
}
?>