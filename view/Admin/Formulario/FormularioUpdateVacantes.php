<?php 
if($_SESSION['rolId']==1){
?>
<?php
foreach($Vacante as $vac){
?>
<div class="eo #contenedor_arriba x_content">
<div class="encabezadoForm eme clearfix text-center">
    EDITAR VACANTE: <br><?php echo $vac['vac_nombre'] ?>
</div>
    <form id ="alertaactualizarvacante" method="POST" enctype="multipart/form-data"
        action="<?php echo getUrl("Admin", "Formulario", "UpdateForm"); ?>">
        <div class=" x_panel">

            <div class="x_title">
                <h2 class="xc_color">Datos de la Vacante</h2>
                <div class="clearfix"></div>
            </div>

            <div class="row justify-content-start" id="nombres">
                <div class="col-md-6 caja">
                    <label>Titulo de la oferta *</label>
                    <input type="hidden" name="id_vacante" value="<?php echo $vac['id_vacante'] ?>">
                    <input name="vac_nombre" value="<?php echo $vac['vac_nombre'] ?>" type="text"
                        class="estiloinput form-control oferta">
                </div>
                <div class="col-md-12">
                    <label>Descripción de tareas*</label>
                    <textarea name="vac_descripcion" class="estiloinput form-control desc_tarea"
                    id="" cols="30" rows="10"><?php echo $vac['vac_descripcion'] ?></textarea>
                </div>
            </div>

            <div class="row justify-content-start">
                <div class="col-md-6 ">
                    <label for="text">Jornada laboral</label>
                    <select name="vac_jornada_laboral" class="estiloinput form-control" id="">
                        <option value="<?php echo $vac['vac_jornada_laboral'] ?>">
                            <?php echo $vac['vac_jornada_laboral'] ?></option>
                        <option value="Tiempo parcial">Tiempo parcial</option>
                        <option value="Tiempo completo">Tiempo completo</option>
                        <option value="Por horas">Por horas</option>
                        <option value="Desde casa">Desde casa</option>
                        <option value="Becas/Practicas">Pasantias/Practicas</option>
                    </select>
                </div>

                <div class="col-md-6">
                    <label for="text">Tipo de contrato</label>
                    <select name="vac_tipo_contrato" class="estiloinput form-control" id="">
                        <option value="<?php echo $vac['vac_tipo_contrato'] ?>"><?php echo $vac['vac_tipo_contrato'] ?>
                        </option>
                        <option value="Contrato ocacional de trabajo">Contrato ocacional de trabajo</option>
                        <option value="Contrato de aprendizaje">Contrato de aprendizaje</option>
                        <option value="Contrato civil por prestación de servicio">Contrato civil por prestación de
                            servicio</option>
                        <option value="Contrato de obra o labor">Contrato de obra o labor</option>
                        <option value="Contrato a término indefinido">Contrato a término indefinido</option>
                        <option value="Contrato a término fijo">Contrato a término fijo</option>
                    </select>
                </div>
            </div>
            <div class="eo row justify-content-start">
                <div class="col-md-6 caja">
                    <label>Salario*</label>
                    <input name="vac_salario" value="<?php echo $vac['vac_salario'] ?>"
                        class="estiloinput form-control oferta" type="text">
                </div>
                <div class="col-md-6">
                    <label>Fecha limite de aplicación*</label>
                    <input name="vac_fecha" value="<?php echo $vac['vac_fecha'] ?>"
                        class="oferta estiloinput form-control" type="date">
                </div>
            </div>
        </div>
</div>

<!---2da parte del formulario --->


<div class="eo #contenedor_arriba x_content">
<div class="encabezadoForm eme clearfix text-center">
    REQUERIMIENTOS
</div>
    <div class=" x_panel">
    
        <div class="  row justify-content-start" id="">
            <div class=" col-md-6 caja">
                <label>Años de experiencia*</label>
                <input value="<?php echo $vac['vac_años_xp'] ?>" type="text" name="vac_años_xp"
                    class="estiloinput form-control oferta">
            </div>
            <div class="col-md-6 caja">
                <label>Estudios Minimos*</label>
                <select class="estiloinput form-control" style="width:389px;" name="vac_educacion" id="">
                    <option value="<?php echo $vac['vac_educacion'] ?>"><?php echo $vac['vac_educacion'] ?></option>
                    <option value="Educación Básica Primaria">Educación Básica Primaria</option>
                    <option value="Educación Básica Secundaria">Educación Básica Secundaria</option>
                    <option value="Bachillerato / Educaciòn Media">Bachillerato / Educación Media</option>
                    <option value="Universidad / Carrera técnica">Universidad / Carrera técnica</option>
                    <option value="Universidad / Carrera tecnológica">Universidad / Carrera tecnológica</option>
                    <option value="Universidad / Carrera Profesional">Universidad / Carrera Profesional</option>
                    <option value="Postgrado / Especialización">Postgrado / Especialización</option>
                    <option value="Postgrado / Maestrìa">Postgrado / Maestrìa</option>
                    <option value="Postgrado / Doctorado">Postgrado / Doctorado</option>
                </select>
            </div>

        </div>

    </div>
    <div class="row justify-content-end">

        <a href="<?php echo getUrl("Admin","Formulario","consult");?>" class="btn btn-danger">Cancelar</a>
        <input type="submit" class="btn btn-primary float-right" value="Actualizar">

    </div>
</div>
</div>



</form>

<?php
}
?>
<?php
}else{
    redirect("indexUsu.php");
}
?>