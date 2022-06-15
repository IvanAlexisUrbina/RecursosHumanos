<?php
include_once '../lib/helpers.php';
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Inicio Sesión</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="build/css/estilos.css">
    <link rel="stylesheet" href="build/css/Mantenimientocss.css">
    <link rel="shorcut icon" href="images/Gers.jpeg">

</head>

<body>

    <div id="particles-js">

    </div>

    <form id="login" class="formulario login form-box" method="POST" action="<?php echo getUrl("Access", "Access", "login", false, 'ajax'); ?>">
        <h1 class="form-title">Inicio Sesión</h1>
        <div class="x_panel contenedor">
            <img src="images/Gers.png" alt="logo" id="logologin">
            <div id="contenedor" class="text-center input-contenedor">
                <i class="fas fa-envelope icon"></i>
                <input type="text" class="login__input" name="usu_correo" id="usu_correo" placeholder="Correo Electronico">
                <p class="error"><small>El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</small></p>
            </div>

            <div id="contenedorcontra" class="x_panel input-contenedor">
                <div style="position: relative;">
                    <i class="fas fa-key icon"></i><input class="login__input" type="password" id="usu_contraseña" name="usu_contraseña" placeholder="Contraseña"><i style="color: #191919;
	color: #191919;
    position: absolute;
    width: 20px;
    height: 33px;
    left: 390px;
    top: 77%;
	transform: translateY(-50%);" class="fa fa-eye-slash icon" id="show_password"class="" type="button" onclick="mostrarPassword()"></i>
                </div>
                <p class="error"><small>La contraseña tiene que ser de 4 a 12 dígitos o letras.</small></p>
            </div>
            <div class="formulario__mensaje" id="formulario__mensaje">
                <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
            </div>
            <a class="olvide" href="<?php echo getUrl("Mail", "Mail", "getMail", false, "ajax"); ?>">¿Olvidé mi contraseña?</a>

            <p>¿No tienes una cuenta? <a class="link" href="<?php echo getUrl("Access", "Access", "getLogin", false, 'ajax'); ?>">Registrate </a></p>
        </div>
        <input type="submit" value="Ingresar" class="button">
    </form>
</body>
<footer>

    <script type="text/javascript">
        function mostrarPassword() {
            var cambio = document.getElementById("usu_contraseña");
            if (cambio.type == "password") {
                cambio.type = "text";
                $('.icon').removeClass('fa fa-eye-slash').addClass('fa fa-eye');
            } else {
                cambio.type = "password";
                $('.icon').removeClass('fa fa-eye').addClass('fa fa-eye-slash');
            }
        }
    </script>
    <script src="build/js/validacionlogin.js"></script>
    <script src="build/js/particles.min.js"></script>
    <script src="build/js/app.js"></script>
</footer>

</html>