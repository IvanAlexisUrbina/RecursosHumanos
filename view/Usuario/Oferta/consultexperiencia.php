<div class="eo #contenedor_arriba x_content">
    <div class="contenedor_de_datos x_panel">

        <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:#181864;">
            <a class="navbar-brand" href="#">
                Experiencia laboral
            </a>
        </nav>
        <form id="alertaexperiencia" action="<?php echo getUrl("Usuario","Ofertas","posthistorial");?>" method="post"
            enctype="multipart/form-data">

            <div class="card" style="border-radius: 5px; border:2px solid black;">
                <div class="card-body p-4">
                    <div class="row justify-content-start">
                        <div id="cont_fecha_inicio" class="col-md-3">
                            <label class="titulos_negrita">Fecha inicio*</label>
                            <input id="hist_fecha_inicio" name="hist_fecha_inicio" value="" id="fecha_inicio"
                                class="fechas oferta estiloinput form-control" type="date">
                            <p class="error"><small>debe diligenciar el campo.</small>
                        </div>

                        <div id="cont_fecha_final" class="col-md-3">
                            <label class="titulos_negrita">Fecha final*</label>
                            <input id="hist_fecha_fin" name="hist_fecha_fin" value="" id="1"
                                class="fechas oferta estiloinput form-control" type="date">
                            <input type="hidden" id="mes" name="mes" value="0">
                            <input type="hidden" id="año" name="año" value="0">
                            <p class="error"><small>debe diligenciar el campo.</small>
                        </div>


                        <div class="col-md-6">
                            <label class="titulos_negrita">¿Trabaja usted actualmente*?</label>
                            <label><input type="checkbox" name="hist_trabajoactual" value="si" class="agree">Marque la
                                casilla sí trabaja actualmente en este cargo</label>
                        </div>
                        <div id="cont_hist_cargo" class="col-md-6">
                            <label class="titulos_negrita">Cargo*</label>
                            <input id="hist_cargo" type="text" name="hist_cargo" placeholder="" class="estiloinput form-control oferta">
                            <p class="error"><small>solo puede contener letras.</small>
                        </div>
                        <div id="cont_empresa" class="col-md-6">
                            <label class="titulos_negrita">Empresa/organización*</label>
                            <input id="hist_empresa" type="text" name="hist_empresa" placeholder=""
                                class="estiloinput form-control oferta">
                            <p class="error"><small>solo puede contener letras.</small>
                        </div>

                        <br><br><br><br>
                        <div id="cont_descripcion"class="col-md-12">
                            <label class="titulos_negrita">Descripción actividades*</label>
                            <textarea id="hist_descripcion" name="hist_descripcion" class="estiloinput form-control desc_tarea" id=""
                                cols="20" rows="4">
                          </textarea>
                          <p class="error"><small>solo puede contener letras.</small></p>
                        </div>

                        <div id="cont_ciudad" class="col-md-3">
                            <label class="titulos_negrita">Ciudad*</label>
                            <input id="hist_ciudad" type="text" name="hist_ciudad" placeholder=""
                                class="estiloinput form-control oferta">
                            <p class="error"><small>solo puede contener letras.</small>
                        </div>
                        <div id="cont_pais" class="col-md-3">
                            <label class="titulos_negrita">País*</label>
                            <input id="hist_pais" type="text" name="hist_pais" placeholder=""
                                class="estiloinput form-control oferta">
                            <p class="error"><small>solo puede contener letras.</small>
                        </div>
                        <div class="col-md-6">
                            <label class="titulos_negrita">Certificado</label><br>
                            <input id="certificadolaboral" type="file" name="hist_certificado" placeholder=""
                                class="form">
                                <small><p>No es obligatorio, pero te ayudaria en el proceso de seleccion</p></small>
                        </div>

                        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
                        <script>
                        $(document).ready(function() {
                            $('form input[id="1"]').prop("disabled", false);
                            $(".agree").click(function() {

                                if ($(this).prop("checked") == false) {
                                    $('form input[id="1"]').prop("disabled", false);
                                } else if ($(this).prop("checked") == true) {
                                    $('form input[id="1"]').prop("disabled", true);
                                }
                            });
                        });
                        </script>

                        <div style="padding:20px;text-align:center;font-weight:bold;" class="col-md-12">
                            <label style="" class="titulos_negrita">**Marque las casillas las actividades que más se
                                aproxime al cargo**<br>Seleccioné el Area y luego las actividades</label><br>
                        </div>
                        <div class="row justify-content-start col-md-12" style="" id="actividades">
                            <div id="area1" class="col-md-12 titulos_negrita efectohover"><label>Estudio de Sistemas
                                    Eléctricos</label></div>
                            <div id="div1" class="ocultardivs col-md-12">
                                <?php foreach ($actividades1 as $act) {?>
                                <input type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>>
                                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                                <?php }?>
                            </div>
                            <div id="area2" class="col-md-12 titulos_negrita efectohover"><label>Diseño e
                                    Ingeniería</label></div>
                            <div id="div2" class="ocultardivs col-md-12">
                                <?php foreach ($actividades2 as $act) {?>
                                <input type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>>
                                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                                <?php  }?>
                            </div>
                            <div id="area3" class="col-md-12 titulos_negrita efectohover"><label>Pruebas Automatización
                                    y Control</label></div>

                            <div id="div3" class="ocultardivs col-md-12">
                                <?php foreach ($actividades3 as $act) {?>
                                <input type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>>
                                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                                <?php  }?>
                            </div>
                            <div id="area4" class="col-md-12 titulos_negrita efectohover"> <label>Calidad de
                                    potencia</label></div>
                            <div id="div4" class="ocultardivs col-md-12">
                                <?php foreach ($actividades4 as $act) {?>
                                <input type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>>
                                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                                <?php }?>
                            </div>
                            <div id="area5" class="col-md-12 titulos_negrita efectohover"><label>Eficiencia
                                    Energética</label></div>

                            <div id="div5" class="ocultardivs col-md-12">
                                <?php foreach ($actividades5 as $act) {?>
                                <input type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>>
                                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                                <?php }?>
                            </div>
                            <div id="area6" class="col-md-12 titulos_negrita efectohover"><label>Sistemas de Puesta a
                                    Tierra</label></div>
                            <div id="div6" class="ocultardivs col-md-12">
                                <?php foreach ($actividades6 as $act) {?>
                                <input type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>>
                                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                                <?php  }?>
                            </div>

                            <div id="area7" class="col-md-12 titulos_negrita efectohover"><label>Comercial</label>
                            </div>

                            <div id="div7" class="ocultardivs col-md-12">
                                <?php foreach ($actividades7 as $act) {?>
                                <input type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>>
                                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                                <?php    }?>
                            </div>
                            <div id="area8" class="col-md-12 titulos_negrita efectohover"><label>Recursos
                                    Humanos</label></div>
                            <div id="div8" class="ocultardivs col-md-12">
                                <?php foreach ($actividades8 as $act) {?>
                                <input type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>>
                                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                                <?php }?>
                            </div>
                            <div id="area9" class="col-md-12 titulos_negrita efectohover"><label>Contador</label></div>

                            <div id="div9" class="ocultardivs col-md-12">
                                <?php foreach ($actividades9 as $act) {?>
                                <input type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>>
                                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                                <?php  }?>
                            </div>
                            <div id="area10" class="col-md-12 titulos_negrita efectohover"><label>Ingeniería
                                    civil</label></div>

                            <div id="div10" class="ocultardivs col-md-12">
                                <?php foreach ($actividades10 as $act) {?>
                                <input type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>>
                                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                                <?php }?>
                            </div>
                            <div id="area11" class="col-md-12 titulos_negrita efectohover"><label>Sistemas</label></div>

                            <div id="div11" class="ocultardivs col-md-12">
                                <?php foreach ($actividades11 as $act) {?>
                                <input type="checkbox" name='actividades[]' value=<?=$act['id_actividades']?>>
                                <label for="checkbox1"><?= $act['act_nombre'] ?></label><br>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                </div>
                <input style="float:left;" type="submit" class="btn btn-success" value="Agregar experiencia laboral">
            </div>
        </form>
        <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:#181864;">
            <a class="navbar-brand" href="#">
                Experiencia laboral registrada
            </a>
        </nav>
        <!--AQUI ESTA EL CONTEDEDOR DE TODA LA EXPERIENCIA LABORAL QUE OVYA  MOSTRAR-->
        <div class="divcontenedores">

            <?php
               foreach($historial as $hist){
               echo "<div class='show' class='col-md-12'>";
               echo "<div class='row justify-content-start'>";
               echo"<div class='col-md-12'><h3 style='color:blue;font-weight:bolder;' class='text-right'>".$hist['id_hist']."</h3></div>";
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
                echo" <input type='checkbox' disabled>No trabaja actualmente aquí"; 
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
               echo "<div class='col-md-6'>";
               echo"<br><button type='button' id='eliminarhistorialdetrabajo' name='id_hist' data-url=".getUrl("Usuario","Ofertas","eliminarhistorial",array("id_hist" => $hist['id_hist']),"ajax")." class='btn btn-danger' >Eliminar</button><span><small>*Aquí puede eliminar la información registrada*</small></span></div>";       
               echo"</div>";
               echo"</div>";
          
        }
        
                ?>
        </div>
        <script>
            const Experienciaform = document.getElementById('alertaexperiencia');
const inputexp = document.querySelectorAll('#alertaexperiencia input');



const expresionesexp = {
    usuario: /^[a-zA-Z0-9\_\-]{4,16}$/, // Letras, numeros, guion y guion_bajo
    password: /^.{4,12}$/, // 4 a 12 digitos.
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,40}$/, // Letras y espacios, pueden llevar acentos.
    fecha: /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[13-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/,
}
const camposexp = {
    hist_fecha_inicio: false,
    hist_fecha_fin: false,
    hist_cargo: false,
    hist_empresa: false,
    hist_ciudad: false,
    hist_pais: false,
 
}
const validarexp = (e) => {
    switch (e.target.name) {

        case "hist_fecha_inicio":
            if (expresionesexp.password.test(e.target.value)) {
                document.getElementById('hist_fecha_inicio').classList.remove('procesomalo');
                document.getElementById('hist_fecha_inicio').classList.add('procesobueno');
                document.querySelector('#cont_fecha_inicio .error').classList.remove("error-activo");
                camposexp['hist_fecha_inicio'] = true;
            } else {
                document.getElementById('hist_fecha_inicio').classList.add('procesomalo');
                document.getElementById('hist_fecha_inicio').classList.remove('procesobueno');
                document.querySelector('#cont_fecha_inicio .error').classList.add("error-activo");
                camposexp['hist_fecha_inicio'] = false;
            }
            break;

        case "hist_fecha_fin":
            if (expresionesexp.password.test(e.target.value)) {
                document.getElementById('hist_fecha_fin').classList.remove('procesomalo');
                document.getElementById('hist_fecha_fin').classList.add('procesobueno');
                document.querySelector('#cont_fecha_final .error').classList.remove("error-activo");
                camposexp['hist_fecha_fin'] = true;
            } else {
                document.getElementById('hist_fecha_fin').classList.add('procesomalo');
                document.getElementById('hist_fecha_fin').classList.remove('procesobueno');
                document.querySelector('#cont_fecha_final .error').classList.add("error-activo");
                camposexp['hist_fecha_fin'] = false;
            }
            break;
        case "hist_cargo":
            if (expresionesexp.nombre.test(e.target.value)) {
                document.getElementById('hist_cargo').classList.remove('procesomalo');
                document.getElementById('hist_cargo').classList.add('procesobueno');
                document.querySelector('#cont_hist_cargo .error').classList.remove("error-activo");
                camposexp['hist_cargo'] = true;
            } else {
                document.getElementById('hist_cargo').classList.add('procesomalo');
                document.getElementById('hist_cargo').classList.remove('procesobueno');
                document.querySelector('#cont_hist_cargo .error').classList.add("error-activo");
                camposexp['hist_cargo'] = false;
            }
            break;
        case "hist_empresa":
            if (expresionesexp.password.test(e.target.value)) {
                document.getElementById('hist_empresa').classList.remove('procesomalo');
                document.getElementById('hist_empresa').classList.add('procesobueno');
                document.querySelector('#cont_empresa .error').classList.remove("error-activo");
                camposexp['hist_empresa'] = true;
            } else {
                document.getElementById('hist_empresa').classList.add('procesomalo');
                document.getElementById('hist_empresa').classList.remove('procesobueno');
                document.querySelector('#cont_empresa .error').classList.add("error-activo");
                camposexp['hist_empresa'] = false;
            }
            break;
        case "hist_ciudad":
            if (expresionesexp.password.test(e.target.value)) {
                document.getElementById('hist_ciudad').classList.remove('procesomalo');
                document.getElementById('hist_ciudad').classList.add('procesobueno');
                document.querySelector('#cont_ciudad .error').classList.remove("error-activo");
                camposexp['hist_ciudad'] = true;
            } else {
                document.getElementById('hist_ciudad').classList.add('procesomalo');
                document.getElementById('hist_ciudad').classList.remove('procesobueno');
                document.querySelector('#cont_ciudad .error').classList.add("error-activo");
                camposexp['hist_ciudad'] = false;
            }
            break;
        case "hist_pais":
            if (expresionesexp.password.test(e.target.value)) {
                document.getElementById('hist_pais').classList.remove('procesomalo');
                document.getElementById('hist_pais').classList.add('procesobueno');
                document.querySelector('#cont_pais .error').classList.remove("error-activo");
                camposexp['hist_pais'] = true;
            } else {
                document.getElementById('hist_pais').classList.add('procesomalo');
                document.getElementById('hist_pais').classList.remove('procesobueno');
                document.querySelector('#cont_pais .error').classList.add("error-activo");
                camposexp['hist_pais'] = false;
            }
            break;
    }
}
//ejecuta la funcion 
inputexp.forEach((input) => {
    input.addEventListener('keyup', validarexp);
    input.addEventListener('blur', validarexp);
});



//que valide y no envie
Experienciaform.addEventListener('submit', (e) => {

    if (camposexp.hist_fecha_inicio && camposexp.hist_fecha_fin && camposexp.hist_cargo && camposexp.hist_empresa && camposexp.hist_ciudad && camposexp.hist_pais) {
        $(document).on("submit", "#alertaexperiencia", function () {
            swal("Se ha agregado con exito!", "Presiona el boton!", "success");
            location.reload(5000);
        });
        return true;
    } else {
        e.preventDefault();
        alert("No tiene completos los campos  o hay datos inválidos");
        return false;
    }


});
        </script>