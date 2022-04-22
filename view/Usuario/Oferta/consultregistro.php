<?php
foreach ($usuario as $usu) {
?>

<div class="eo #contenedor_arriba x_content">
    <div class="contenedor_de_datos x_panel">

        <nav class="navbar navbar-dark navbar-expand-sm" style="background-color:#181864;">
            <a class="navbar-brand" href="#">
                Información registrada
            </a>
        </nav>
        <form id="actualizarinformacionpersonal" action="<?php echo getUrl("Usuario","Ofertas","ActualizarRegistro");?>"
            method="post" enctype="multipart/form-data">
            <div class="card" style="border-radius: 5px; border:2px solid black;">
                <div class="card-body p-4">
                    <div class="row justify-content-start">

                        <div class="col-md-6">
                            <label class="titulos_negrita">Nombre*</label>
                            <input readonly type="text" name="" value="<?=$usu['usu_nombre']?>"
                                class="estiloinput form-control oferta">
                        </div>

                        <div class="col-md-6">
                            <label class="titulos_negrita">Apellidos*</label>
                            <input readonly type="text" name="" value="<?= $usu['usu_apellido'] ?>"
                                class="estiloinput form-control oferta">
                        </div>


                        <div class="col-md-6">
                            <label class="titulos_negrita">Correo*</label>
                            <input readonly type="text" value="<?= $usu['usu_correo'] ?>"
                                class="estiloinput form-control oferta">
                        </div>


                        <div class="col-md-6">
                            <label class="titulos_negrita">Teléfono*</label>
                            <input type="number" name="usu_telefono" value="<?= $usu['usu_telefono'] ?>"
                                class="estiloinput form-control oferta">
                        </div>

                        <div class="col-md-6">
                            <label class="titulos_negrita">Pais residencia*</label>
                            <input type="text" name="usu_pais_residencia" value="<?= $usu['usu_pais_residencia'] ?>"
                                class="estiloinput form-control oferta">
                        </div>

                        <div class="col-md-6">
                            <label class="titulos_negrita">Ciudad residencia*</label>
                            <input type="text" name="usu_residencia" value="<?= $usu['usu_residencia'] ?>"
                                class="estiloinput form-control oferta">
                        </div>

                        <div class="col-md-6">
                            <label class="titulos_negrita">Dirección*</label>
                            <input type="text" name="usu_direccion" value="<?= $usu['usu_direccion'] ?>"
                                class="estiloinput form-control oferta">
                        </div>

                        <div class="col-md-6">
                            <label class="titulos_negrita">Tipo documento*</label>
                            <input readonly type="text" name="" value="<?= $usu['usu_tipo_documento'] ?>"
                                class="estiloinput form-control oferta">
                        </div>

                        <div class="col-md-6">
                            <label class="titulos_negrita">Documento*</label>
                            <input readonly type="text" name="" value="<?= $usu['usu_documento']?>"
                                class="estiloinput form-control oferta">
                        </div>
                        <div class='col-md-6'><br>
                            <button type="submit" class="btn btn-success">Actualizar</button>*Desea actualizar su
                            información.
                        </div>


        </form>
    </div>


</div>
</div>
<br>
<div class="card" style="border-radius: 5px; border:2px solid black;">
    <div class="card-body p-4">
        <label class="titulos_negrita" for="">CONTRASEÑA</label>
        <div class="row justify-content-start">
            <form id="passwords" class="col-md-12" action="<?php echo getUrl("Usuario","Ofertas","updatepassword");?>" method="post">
                
                    <div id="contenedorpassword2" class="col-md-6">
                        <label class="titulos_negrita">Contraseña antigua</label>
                        <input id="usu_contraseña" type="password" name="ContraseñaVieja"
                            class="estiloinput form-control oferta">
                        <p class="error"><small>La contraseña tiene que ser de 4 a 12 dígitos o letras.</small></p>
                    </div>

                    <div id="contenedorpassword3" class="col-md-6">
                        <label class="titulos_negrita">Contraseña nueva*</label>
                        <input id="usu_contraseña2" type="password" name="ContraseñaNueva"
                            class="estiloinput form-control oferta">
                        <p class="error"><small>La contraseña tiene que ser de 4 a 12 dígitos o letras.</small></p>
                    </div>

                    <div class='col-md-6'><br>
                        <button type="submit" class="btn btn-success">Actualizar contraseña</button>
                    </div>

                
            </form>
        </div>
    </div>
</div>
<?php
}
?>


<script>

const registro = document.getElementById('passwords');
const inputs = document.querySelectorAll('#passwords input');

const expresiones = {
	password: /^.{4,12}$/ // 4 a 12 digitos.
}
const campos = {
	ContraseñaVieja:false,
	ContraseñaNueva:false,
}
const validarmodal2=(e)=> {
    switch (e.target.name) {

        case "ContraseñaVieja":
            if (expresiones.password.test(e.target.value)) {
                document.getElementById('usu_contraseña').classList.remove('procesomalo');
                document.getElementById('usu_contraseña').classList.add('procesobueno');
                document.querySelector('#contenedorpassword2 .error').classList.remove("error-activo");
                campos['ContraseñaVieja']=true;
            } else {
                document.getElementById('usu_contraseña').classList.add('procesomalo');
                document.getElementById('usu_contraseña').classList.remove('procesobueno');
                document.querySelector('#contenedorpassword2 .error').classList.add("error-activo");
                campos['ContraseñaVieja']=false;
            }
            break;

        case "ContraseñaNueva":
            if (expresiones.password.test(e.target.value)) {
                document.getElementById('usu_contraseña2').classList.remove('procesomalo');
                document.getElementById('usu_contraseña2').classList.add('procesobueno');
                document.querySelector('#contenedorpassword3 .error').classList.remove("error-activo");
                campos['ContraseñaNueva']=true;
            } else {
                document.getElementById('usu_contraseña2').classList.add('procesomalo');
                document.getElementById('usu_contraseña2').classList.remove('procesobueno');
                document.querySelector('#contenedorpassword3 .error').classList.add("error-activo");
                campos['ContraseñaNueva']=false;
            }
            break;
    }
}
//ejecuta la funcion 
inputs.forEach((input) => {
    input.addEventListener('keyup', validarmodal2);
    input.addEventListener('blur', validarmodal2);
});
//que valide y no envie
registro.addEventListener('submit',(e) =>{

if (campos.ContraseñaNueva && campos.ContraseñaVieja){
    $(document).on("submit","#passwords",function(){
       // swal("Se ha actualizado con exito!", "Presiona el boton!", "success");
        location.reload();
      });
    return true;
}else {
    e.preventDefault();
    alert("No tiene completos los campos o son datos invalidos");
    document.getElementById('formulario__mensaje').classList.add('formulario__mensaje-activo');
    return false;
}


}); 
</script>