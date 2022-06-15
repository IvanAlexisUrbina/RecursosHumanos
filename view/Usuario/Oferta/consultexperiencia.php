
<div class="eo #contenedor_arriba x_content">
    <div style="text-align:center;" class="x_title">
                <h5 style=" font-weight: bolder;">EXPERIENCIA LABORAL</h5>
    </div>


        <form id="alertaexperiencia" action="<?php echo getUrl("Usuario","Ofertas","posthistorial");?>" method="post"
            enctype="multipart/form-data">
            <div >
                <div class="">
                    <div class="row justify-content-start">
                        <div id="cont_fecha_inicio" class="col-md-3">
                            <label class="titulos_negrita">Fecha inicio<span style="color:red">*</span></label>
                            <input id="hist_fecha_inicio" name="hist_fecha_inicio" value="" id="fecha_inicio"
                                class="fechas oferta estiloinput form-control" type="date">
                            <p class="error"><small>debe diligenciar el campo.</small>
                        </div>

                        <div id="cont_fecha_final" class="col-md-3">
                            <label class="titulos_negrita">Fecha final<span style="color:red">*</span></label>
                            <input id="hist_fecha_fin" name="hist_fecha_fin" value="" id="1"
                                class="fechas oferta estiloinput form-control" type="date">
                            <input type="hidden" id="mes" name="mes" value="0">
                            <input type="hidden" id="año" name="año" value="0">
                            <p class="error"><small>debe diligenciar el campo.</small>
                        </div>


                        <div class="col-md-6">
                            <label class="titulos_negrita">¿Trabaja usted actualmente<span style="color:red">*</span>?</label>
                            <label><input type="checkbox" name="hist_trabajoactual" value="si" class="agree">Marque la
                                casilla sí trabaja actualmente en este cargo</label>
                        </div>
                        <div id="cont_hist_cargo" class="col-md-6">
                            <label class="titulos_negrita">Cargo<span style="color:red">*</span></label>
                            <input id="hist_cargo" type="text" name="hist_cargo" placeholder="Cargo" class="estiloinput form-control oferta">
                            <p class="error"><small>solo puede contener letras.</small>
                        </div>
                        <div id="cont_empresa" class="col-md-6">
                            <label class="titulos_negrita">Empresa/organización<span style="color:red">*</span></label>
                            <input id="hist_empresa" type="text" name="hist_empresa" placeholder="Empresa/organizaación"
                                class="estiloinput form-control oferta">
                            <p class="error"><small>solo puede contener letras.</small>
                        </div>

                        <br><br><br><br>
                        <div id="cont_descripcion"class="col-md-12">
                            <label class="titulos_negrita">Descripción actividades<span style="color:red">*</span></label>
                            <textarea  id="hist_descripcion" name="hist_descripcion" class="estiloinput form-control desc_tarea" id=""
                                cols="20" rows="4">
                          </textarea>
                          <p class="error"><small>solo puede contener letras.</small></p>
                        </div>

                        <div id="cont_ciudad" class="col-md-3">
                            <label class="titulos_negrita">Ciudad<span style="color:red">*</span></label>
                            <input id="hist_ciudad" type="text" name="hist_ciudad" placeholder="Ciudad"
                                class="estiloinput form-control oferta">
                            <p class="error"><small>solo puede contener letras.</small>
                        </div>
                        <div id="cont_pais" class="col-md-3">
                            <label class="titulos_negrita">País<span style="color:red">*</span></label>
                            <input id="hist_pais" type="text" name="hist_pais" placeholder="País"
                                class="estiloinput form-control oferta">
                            <p class="error"><small>solo puede contener letras.</small>
                        </div>
                        <div  class="col-md-6">
                            <label class="titulos_negrita">Certificado</label><br>
                            <input id="certificadolaboral" type="file" name="hist_certificado" placeholder=""
                                class="form">
                        </div>
                        <div class="x_content"></div>
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

                        <div class="row justify-content-start col-md-12" style="" id="actividades">
                        <div class="x_panel justify-content-start col-md-12">
                            <div class="x_title">
                                <h3 style="family-weigh:bolder;">AREA</h3>
                            </div>
                    <?php foreach ($areas as $area) {?>
                        <div style="float:left;" class="col-md-5">
                        <b><label><?php echo $area['are_nombre']?></label>  <input type="checkbox" name="area[]" id="area" value="<?php echo $area['id_area']?>"></b>
                        </div>
                    <?php } ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding:5px 5px 5px 5px;">
                <input style="float:left;border-radius:35px;" type="submit" class="btn btn-primary" value="Agregar experiencia laboral">    
            </div> 
        </form>
       
        <div style="text-align:center;" class="x_title">
                <h5 style=" font-weight: bolder;">EXPERIENCIA LABORAL REGISTRADA</h5>
            </div>
        
        <!--AQUI ESTA EL CONTEDEDOR DE TODA LA EXPERIENCIA LABORAL QUE VAYA  MOSTRAR-->
        <?php  foreach ($historial as $hist) {  ?>
            <div style="border-radius:35px;background:;"class="x_title">
                <div class="x_title">
                    <div class="row justify-content-start">
                        <div class="col-md-3">
                            <label class="titulos_negrita">Fecha inicio</label>
                            <label class="fechas oferta estiloinput form-control"><?php echo $hist['hist_fecha_inicio']?>
                        </div>

                        <div class="col-md-3">
                            <label class="titulos_negrita">Fecha final</label>
                            <label class="fechas oferta estiloinput form-control"><?php echo $hist['hist_fecha_fin']?>
                        </div>


                        <div class="col-md-6">
                            <label class="titulos_negrita">¿Trabaja usted actualmente?</label><br>
                            <?php
                            if($hist['hist_trabajoactual']== "si"){
                                 echo"<input type='checkbox' checked disabled> trabaja actualmente aquí";
                                 }else{
                                      echo"<input type='checkbox' disabled>No trabaja actualmente aquí"; 
                                      }
                            ?>
                        </div>
                        
                        <div class="col-md-6">
                            <label class="titulos_negrita">Cargo</label>
                            <label class="estiloinput form-control oferta"><?php echo  $hist['hist_cargo']?>
                        </div>

                        <div class="col-md-6">
                            <label class="titulos_negrita">Empresa/organización</label>
                            <label class="estiloinput form-control oferta"><?php echo  $hist['hist_empresa']?>
                        </div>

                        <br><br><br><br>
                        <div class="col-md-12">
                            <label class="titulos_negrita">Descripción actividades</label>
                            <textarea class="estiloinput form-control desc_tarea"  cols="20" rows="4">
                            <?php echo  $hist['hist_descripcion']?>
                        </textarea>
                        </div>

                        <div class="col-md-3">
                            <label class="titulos_negrita">Ciudad</label>
                            <label class="estiloinput form-control oferta"><?php echo  $hist['hist_ciudad']?>
                        </div>
                        <div class="col-md-3">
                            <label class="titulos_negrita">País</label>
                            <label class="estiloinput form-control oferta"><?php echo  $hist['hist_pais']?>
                        </div>
                        <div  class="col-md-6">
                            <label class="titulos_negrita">Certificado</label><br>
                            <a id='consultarhistorial' name='id_hist' type='button' data-url="<?php echo getUrl("Usuario","Ofertas","consultarhistorial",array("id_hist" => $hist['id_hist']),"ajax")?>" class='btn btn-secondary radios'><i class='fa fa-file'></i></a>
                        </div>
                        <div class="x_content"></div>
                        <div class="row justify-content-start col-md-12" style="">
                        <div class="justify-content-start col-md-12">
                            <div class="x_title">
                                <h3 style="family-weigh:bolder;">AREA</h3>
                            </div>

                         <input type="hidden" name="formulario" id="formulario" value="<?php echo  $hist['id_hist']?>">
                            <div style="border-radius:35px;padding:5px 5px 5px 5px;"id='actividadesmore' name='id_hist'  data-url="<?php echo getUrl("Usuario","Ofertas", "actividadesdinamicas",array("id_hist" => $hist['id_hist']), "ajax")?>" class='col-md-12 titulos_negrita efectohover'><label>↓↓Mostrar más↓↓</label>
                            </div>
                            <div id='' class='actividadesresult col-md-12'></div>
                                <div class='col-md-6'><br>
                                    <button type='button' id='eliminarhistorialdetrabajo' name='id_hist' data-url="<?php echo getUrl("Usuario","Ofertas","eliminarhistorial",array("id_hist" => $hist['id_hist']),"ajax")?>" class='btn' style="background:#ff0000;color:white;">Eliminar</button><span><small style="color:black;">*Aquí puede eliminar la información registrada*</small></span>
                                    </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
<?php }?>
        <div class="col-md-12" style="padding:5px 5px 5px 5px;">
                <a style="float:left;border-radius:35px;" href="<?php echo getUrl("Usuario","Ofertas","consultusu")?>" type="button"  class="btn btn-secondary siguiente">Atras</a>
        </div>
    
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

    function load() {

    }
    window.onload = load;
</script>