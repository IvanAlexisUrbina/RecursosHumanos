<?php 
if($_SESSION['rolId']==1){
?>
<div id="validarformulario" class="centertodo">
    <div class="eo #contenedor_arriba x_content">
        <div  class="encabezadoForm eme clearfix text-center">
            GENERAR VACANTES
        </div>
        <form id="alertagenerarvacante" class="formulario" method="POST" enctype="multipart/form-data"
            action="<?php echo getUrl("Admin", "Formulario", "postInsert")?>">
            <div class=" x_panel">

                <div class="x_title">
                    <h2 class="xc_color">Datos de la vacante</h2>
                    <div class="clearfix"></div>
                </div>

                <div class="row justify-content-start" id="nombres">
                    <div id="contenedor" class="col-md-6 caja">
                        <label>Titulo de la oferta *</label>
                        <input  id="vac_nombre" name="vac_nombre"
                            placeholder="Ejm: Ingeniero electrico, auxiliar" type="text"
                            class="estiloinput form-control oferta">
                            <p class="error"><small>Debe digitar solo letras</small></p>
                    </div>
                    <div class="col-md-12">
                        <label>Descripción*</label>
                        <textarea id="textArea" name="vac_descripcion" class="estiloinput form-control desc_tarea" id="" cols="20"
                            rows="5">

                   </textarea>
                    </div>
                </div>

                <div class="row justify-content-start">
                    <div class="col-md-6 ">
                        <label for="text">*Jornada laboral*</label>
                        <select require name="vac_jornada_laboral" class="estiloinput form-control" id="">
                            <option selected="true" disabled>Selecciona</option>
                            <option value="Tiempo parcial">Tiempo parcial</option>
                            <option value="Tiempo completo">Tiempo completo</option>
                            <option value="Por horas">Por horas</option>
                            <option value="Desde casa">Desde casa</option>
                            <option value="Becas/Practicas">Pasantias/Practicas</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="text">*Tipo de contrato*</label>
                        <select require name="vac_tipo_contrato" class="estiloinput form-control" id="">
                            <option selected="true" disabled>Selecciona</option>
                            <option value="Contrato ocasional de trabajo">Contrato ocasional de trabajo</option>
                            <option value="Contrato de aprendizaje">Contrato de aprendizaje</option>
                            <option value="Contrato civil por prestación de servicios">Contrato civil por prestación de
                                servicios</option>
                            <option value="Contrato de obra o labor">Contrato de obra o labor</option>
                            <option value="Contrato a término indefinido">Contrato a término indefinido</option>
                            <option value="Contrato a término fijo">Contrato a término fijo</option>
                        </select>
                    </div>
                </div>
                <div class="eo row justify-content-start">
                    <div class="col-md-6 caja">
                        <label>Salario*</label>
                        <input id="vac_salario"  name="vac_salario" placeholder="Ejm:800.000 o A Convenir"
                            class="estiloinput form-control oferta" type="text">
                    </div>
                    <div class="col-md-6">
                        <label>Fecha limite de aplicación*</label>
                        <input require name="vac_fecha" class="oferta estiloinput form-control" type="date">
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
                    <input require placeholder="Ejm: 2 años de experiencia" type="text" name="vac_años_xp"
                        class="estiloinput form-control oferta">
                </div>
                <div class="col-md-6 caja">
                    <label>Estudios Minimos*</label>
                    <select require class="estiloinput form-control" style="width:389px;" name="vac_educacion" id="">
                        <option selected="true" disabled>Selecciona</option>
                        <option value="Educaciòn Bàsica Primaria">Educación Básica Primaria</option>
                        <option value="Educación Básica Secundaria">Educación Básica Secundaria</option>
                        <option value="Bachillerato / Educación Media">Bachillerato / Educación Media</option>
                        <option value="Universidad / Carrera técnica">Universidad / Carrera técnica</option>
                        <option value="Universidad / Carrera tecnológica">Universidad / Carrera tecnológica</option>
                        <option value="Universidad / Carrera Profesional">Universidad / Carrera Profesional</option>
                        <option value="Postgrado / Especializaciòn">Postgrado / Especializaciòn</option>
                        <option value="Postgrado / Maestrìa">Postgrado / Maestrìa</option>
                        <option value="Postgrado / Doctorado">Postgrado / Doctorado</option>
                    </select>
                </div>

            </div>
        </div>
        <div class="row justify-content-end">

            <a href="indexAdmin.php" class="btn btn-danger">Cancelar</a>
            <button id="generarvacantes" type="submit" class="btn btn-primary float-right">Generar</button>

        </div>
    </div>
</div>
</form>
</div>
<?php
}else{
    redirect("indexUsu.php");
}
?>
