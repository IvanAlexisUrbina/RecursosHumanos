<?php 
if($_SESSION['rolId']==2){
?>
<div class="eo #contenedor_arriba x_content">
    <form id="aplicarvacante" method="POST" enctype="multipart/form-data"
        action="<?php echo getUrl("Usuario", "Ofertas","postinsert");  ?>">
        <div class="contenedor_de_datos x_panel">
            <div class="x_title text-center">
                <h3 style="font-weight:bolder;">VACANTE<br></h3>
                <?php
foreach ($vacantes as $vac) {
    echo "<h3><b>".$vac['vac_nombre']."</b></h3>";
?>
                <?php
foreach ($usuario as $usu) {
?>
            </div>
            <div class="row justify-content-start" id="nombres">

                <div class="col-md-6">
                    <label class="titulos_negrita">Nombre*</label>
                    <input type="tex" placeholder="" class="estiloinput form-control oferta" readonly
                        value="<?php echo $usu['usu_nombre']?>">
                </div>

                <div class="col-md-6">
                    <label class="titulos_negrita">Apellido*</label>
                    <input type="text" placeholder="" class="estiloinput form-control oferta" readonly
                        value="<?php echo $usu['usu_apellido']?>">
                </div>
                <div class="col-md-6">
                    <label class="titulos_negrita">Correo*</label>
                    <input type="Email" placeholder="" class="estiloinput form-control oferta" readonly
                        value="<?php echo $usu['usu_correo']?>">
                </div>

                <div class="col-md-6">
                    <label class="titulos_negrita">Teléfono/preferido*</label>
                    <label type="number" placeholder="" class="estiloinput form-control oferta" readonly
                        ><?php echo $usu['usu_telefono']?>
                </div>


                <div class="col-md-6">
                    <label class="titulos_negrita">Ciudad residensia*</label>
                    <input type="text" placeholder="" class="estiloinput form-control oferta" readonly
                        value="<?php echo $usu['usu_residencia']?>">
                </div>


                <div class="col-md-6">
                    <label class="titulos_negrita">Dirección*</label>
                    <input type="text" placeholder="" class="estiloinput form-control oferta" readonly
                        value="<?php echo $usu['usu_direccion']?>">
                </div>

                <div class="col-md-6">
                    <label class="titulos_negrita">Tipo documento*</label>
                    <input type="text" placeholder="" class="estiloinput form-control oferta" readonly
                        value="<?php echo $usu['usu_tipo_documento']?>">
                </div>

                <div class="col-md-6">
                    <label class="titulos_negrita">Documento*</label>
                    <input type="text" placeholder="" class="estiloinput form-control oferta" readonly
                        value="<?php echo $usu['usu_documento']?>">
                </div>
                <div class="col-md-6">
                    <label class="titulos_negrita">País residencia*</label>
                    <input readonly value="<?php echo $usu['usu_pais_residencia']?>" type="text"
                        class="estiloinput form-control oferta">
                </div>
                <div class="col-md-6">
                    <label class="titulos_negrita">Lugar de residencia*</label>
                    <input type="text" readonly value="<?php echo $usu['usu_residencia']?>"
                        class="estiloinput form-control oferta">
                </div>
                <div class="col-md-6">
                    <label class="titulos_negrita">Dirección de residencia*</label>
                    <input type="text" readonly value="<?php echo $usu['usu_direccion']?>"
                        class="estiloinput form-control oferta">
                </div>
                <?php if($usu['usu_hojadevida']=="" or $usu['usu_hojadevida']=="../web/hojas/" or $usu['usu_hojadevida']=="../web/" or $usu['usu_hojadevida']=="../" ){ 
  echo "<div class='col-md-6'><br><br><small>No tiene almacenada hoja de vida por el momento*</small></div>";
 }else{?>
                <div class="col-md-6">
                    <label class="titulos_negrita">Visualizar hoja de vida*</label><br>
                    <?php if(empty($usu['usu_hojadevida'] || $usu['usu_hojadevida']=="../web/hojas/" or $usu['usu_hojadevida']=="../web/" or $usu['usu_hojadevida']=="../" )){ echo "<h5>NO TIENE ALMACENADA NINGUNA HOJA DE VIDA</h5>"?>
                    
                    <?php }else{?>
<a type="button" target="_black"
             
href="<?php echo 'https://'.$_SERVER['HTTP_HOST'].'/RecursosHumanos'.$usu['usu_hojadevida']?>"
class="radios modalhojadevida btn btn-dark"><i class="fa fa-file"></i></a> Aquí puedes visualizar tu hoja de vida*
                <?php    }  ?>
                </div>
<?php } ?>
                <div class="col-md-6 caja">
                    <label class="titulos_negrita">Carta de presentación</label><br>
                    <input placeholder="" id="cartapresentacion" type="file" name="usu_cartapresentacion" class="eme2 estiloinput">
                </div>
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <label class="titulos_negrita">Elegible legalmente para trabajar en el país de la
                        vacante</label><br>
                    <input type="checkbox" class="form" value="Si" name="usu_elegible">
                   
                </div>
                <div class="col-md-6">
                    <label class="titulos_negrita">Disponibilidad para viajar</label>
                    <br>
                    <input type="checkbox" name="usu_viajar" value="Si">
                    
                </div>
                <div class="col-md-6"><input type="hidden" name="id_vacante" value="<?php echo $vac['id_vacante']?>">
                </div>

                <div class="col-md-12 row justify-content-end">
                    <a href="<?php echo getUrl("Usuario","Ofertas","consult")?>" class="radios btn btn-danger">Cancelar</a>
                    <button type="submit" class="radios btn btn-primary" value="">Aplicar</button>
                </div>
            </div>
        </div>
    </form>
    <?php
}
}
}else{
    session_destroy();
    redirect("login.php");
}
?>