<div class="eo #contenedor_arriba x_content">
    <div class="contenedor_de_datos x_panel">

        <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:#181864;">
            <a class="navbar-brand" href="#">
                Formación
            </a>
        </nav>


        <div class="card" style="border-radius: 5px; border:2px solid black;">



            <div class="card-body p-4">

                <div class="col-md-12">
                </div>
                <div class=" x_panel">
                    <form id="alertaformacion" action="<?php echo getUrl("Usuario","Ofertas","postformacion")?>"
                        method="post" enctype="multipart/form-data">
                        <div class="row justify-content-start">
                            <div id="cont_tituloname" class="col-md-6">
                                <label class="titulos_negrita">Titulo obtenido*</label>
                                <input type="text" id="form_tituloname" name="form_tituloname" class="estiloinput form-control oferta">
                                <p class="error"><small>solo debe contener letras.</small>
                                </p>
                            </div>

                            <div class="col-md-6">
                                <label class="titulos_negrita">Adjunte titulo profesional*</label>
                                <input require id='certificadodeestudio' placeholder="" type="file"
                                    name="form_titulo_profesional" class="eme2 estiloinput">
                               
                            </div>

                            <div class="col-md-6">
                                <label class="titulos_negrita">Nivel de educación*</label>
                                <select id="form_nivel_de_educacion" style="border-radius:5px;border:2px solid #73879C;" class="form form-control"
                                    name="form_nivel_de_educacion">
                                    <option selected="true" disabled>Nivel de educación</option>
                                    <option value="Educación Básica Primaria">Educación Básica Primaria</option>
                                    <option value="Educación Básica Secundaria">Educación Básica Secundaria</option>
                                    <option value="Bachillerato / Educaciòn Media">Bachillerato / Educación Media
                                    </option>
                                    <option value="Universidad / Carrera técnica">Universidad / Carrera técnica</option>
                                    <option value="Universidad / Carrera tecnológica">Universidad / Carrera tecnológica
                                    </option>
                                    <option value="Universidad / Carrera Profesional">Universidad / Carrera Profesional
                                    </option>
                                    <option value="Postgrado / Especialización">Postgrado / Especialización</option>
                                    <option value="Postgrado / Maestrìa">Postgrado / Maestrìa</option>
                                    <option value="Postgrado / Doctorado">Postgrado / Doctorado</option>
                                </select>
                                
                            </div>
                            <div id="cont_nombre" class="col-md-6">
                                <label class="titulos_negrita">Nombre de la Institución o Universidad*</label>
                                <input type="text" id="form_nombre" name="form_nombre" class="estiloinput form-control oferta">
                                <p class="error"><small>solo debe contener letras.</small>
                                </p>
                            </div>
                            <div id="cont_conocimientos" class="col-md-6">
                                <label class="titulos_negrita">Conocimientos o habilidades*</label>
                                <input type="text" id="form_conocimientos" name="form_conocimientos"
                                    placeholder="Ejm: word, excel, solidworks..."
                                    class="estiloinput form-control oferta">
                                <p class="error"><small>solo debe contener letras.</small>
                                </p>
                            </div>

                            <div id="cont_fecha_fin"class="col-md-6">
                                <label class="titulos_negrita">Fecha graduación*</label>
                                <input type="date" id="form_fecha_fin" name="form_fecha_fin" placeholder="Ejm: ingles, frances..."
                                    class="estiloinput form-control oferta">
                                <p class="error"><small>solo debe contener letras.</small>
                                </p>
                            </div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6"></div>
                            <div class="col-md-6">
                                <br>

                                <div class="col-md-6">
                                </div>
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Agregar</button>
                </div>
                </form>

                <a href="<?php echo getUrl("Usuario","Ofertas","experiencia")?>" type="button"
                    class="btn btn-success">Siguiente</a>
            </div>
            <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:#181864;">
                <a class="navbar-brand" href="#">
                    Formación registrada
                </a>
            </nav>
            <!--AQUI ESTA EL CONTEDEDOR DE TODA LA FORMACION QUE VAYA  MOSTRAR-->
            <div class="divcontenedores">

                <?php
               foreach($formacion as $form){ ?>
                <div class="card-body p-4">
                    <div class="col-md-12">
                    </div>
                    <div class="x_panel" style="">
                        <form enctype="multipart/form-data">
                            <div class="row justify-content-start">
                                <div class='col-md-12'>
                                    <h3 style='color:blue;font-weight:bolder;' class='text-right'>
                                        <?php echo $form["id_formacion"]?></h3>
                                </div>
                                <div class="col-md-6">
                                    <label class="titulos_negrita">Titulo obtenido*</label>
                                    <input  type="text" value="<?php echo $form["form_tituloname"]?>" readonly
                                        class="estiloinput form-control oferta">
                                </div>

                                <div class="col-md-6">
                                    <label class="titulos_negrita">Visualizar titulo profesional*</label><br>
                                    <a id='consultarcertificado' type='button'
                                        data-url="<?php echo getUrl("Usuario","Ofertas","consultarcertificado",array("id_formacion" => $form['id_formacion']),"ajax")?>"
                                        class='btn btn-primary'><i class='fa fa-file'></i></a>
                                </div>

                                <div class="col-md-6">
                                    <label class="titulos_negrita">Nivel de educación*</label>
                                    <input type="text" readonly value="<?php echo $form["form_nivel_de_educacion"]?>"
                                        id="" class="estiloinput form-control oferta" readonly>
                                </div>
                                <div class="col-md-6">
                                    <label class="titulos_negrita">Nombre de la institución o universidad*</label>
                                    <input type="text" value="<?php echo $form["form_nombre"]?>" readonly
                                        class="estiloinput form-control oferta">
                                </div>
                                <div class="col-md-6">
                                    <label class="titulos_negrita">Conocimientos o habilidades*</label>
                                    <input readonly value="<?php echo $form["form_conocimientos"]?>" type="text"
                                        class="estiloinput form-control oferta">
                                </div>

                                <div class="col-md-6">
                                    <label class="titulos_negrita">Fecha graduación*</label>
                                    <input type="text" readonly value="<?php echo $form["form_fecha_fin"]?>"
                                        placeholder="Ejm: ingles, frances..." class="estiloinput form-control oferta">
                                </div>
                                <div class="col-md-6"></div>
                                <div class="col-md-6"></div>
                                <div class="col-md-6">
                                    <br>
                                    <button id='eliminarformacion'
                                        data-url="<?php echo getUrl("Usuario","Ofertas","Eliminarforma",array("id_formacion"=>$form['id_formacion']),"ajax")?>"
                                        class='btn btn-danger' value='Eliminar'>Eliminar</button><span><small>*Aquí
                                            puede eliminar la información registrada*</small></span>
                                    <div class="col-md-6">
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
                <?php      } ?>
            </div>
<script>
    const registro2 = document.getElementById('alertaformacion');
const inputs1 = document.querySelectorAll('#alertaformacion input');


const expresiones2 = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    password: /^.{4,12}$/, // 4 a 12 digitos.
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    fecha: /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/,
}
const campos2 = {
    form_tituloname: false,
    form_nombre: false,
    form_conocimientos: false,
    form_fecha_fin: false,
 
}
const validarmodal1 = (e) => {
    switch (e.target.name) {

        case "form_tituloname":
            if (expresiones2.nombre.test(e.target.value)) {
                document.getElementById('form_tituloname').classList.remove('procesomalo');
                document.getElementById('form_tituloname').classList.add('procesobueno');
                document.querySelector('#cont_tituloname .error').classList.remove("error-activo");
                campos2['form_tituloname'] = true;
            } else {
                document.getElementById('form_tituloname').classList.add('procesomalo');
                document.getElementById('form_tituloname').classList.remove('procesobueno');
                document.querySelector('#cont_tituloname .error').classList.add("error-activo");
                campos2['form_tituloname'] = false;
            }
            break;

        case "form_nombre":
            if (expresiones2.nombre.test(e.target.value)) {
                document.getElementById('form_nombre').classList.remove('procesomalo');
                document.getElementById('form_nombre').classList.add('procesobueno');
                document.querySelector('#cont_nombre .error').classList.remove("error-activo");
                campos2['form_nombre'] = true;
            } else {
                document.getElementById('form_nombre').classList.add('procesomalo');
                document.getElementById('form_nombre').classList.remove('procesobueno');
                document.querySelector('#cont_nombre .error').classList.add("error-activo");
                campos2['form_nombre'] = false;
            }
            break;
        case "form_conocimientos":
            if (expresiones2.nombre.test(e.target.value)) {
                document.getElementById('form_conocimientos').classList.remove('procesomalo');
                document.getElementById('form_conocimientos').classList.add('procesobueno');
                document.querySelector('#cont_conocimientos .error').classList.remove("error-activo");
                campos2['form_conocimientos'] = true;
            } else {
                document.getElementById('form_conocimientos').classList.add('procesomalo');
                document.getElementById('form_conocimientos').classList.remove('procesobueno');
                document.querySelector('#cont_conocimientos .error').classList.add("error-activo");
                campos2['form_conocimientos'] = false;
            }
            break;
        case "form_fecha_fin":
            if (expresiones2.password.test(e.target.value)) {
                document.getElementById('form_fecha_fin').classList.remove('procesomalo');
                document.getElementById('form_fecha_fin').classList.add('procesobueno');
                document.querySelector('#cont_fecha_fin .error').classList.remove("error-activo");
                campos2['form_fecha_fin'] = true;
            } else {
                document.getElementById('form_fecha_fin').classList.add('procesomalo');
                document.getElementById('form_fecha_fin').classList.remove('procesobueno');
                document.querySelector('#cont_fecha_fin .error').classList.add("error-activo");
                campos2['form_fecha_fin'] = false;
            }
            break;
    }
}
//ejecuta la funcion 
inputs1.forEach((input) => {
    input.addEventListener('keyup', validarmodal1);
    input.addEventListener('blur', validarmodal1);
});


//que valide y no envie
registro2.addEventListener('submit', (e) => {

    if (campos2.form_tituloname && campos2.form_nombre && campos2.form_conocimientos && campos2.form_fecha_fin) {
        $(document).on("submit", "#alertaformacion", function () {

            location.reload();
        });
        return true;
    } else {
        e.preventDefault();
        alert("No tiene completos los campos o tiene datos inválidos");
        return false;
    }


});
</script>
            <!---finnallllllllllll---->