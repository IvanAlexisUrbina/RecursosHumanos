<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
include_once '../model/Access/AccessModel.php';

class AccessController
{
    //Visualizar la vista de login
    public function getLogin()
    {
        include_once '../view/Registro/registrovista.php';
    }
    //Regitrar usuarios en la base de datos
    public function getInsert()
    {
        $obj = new AccessModel();
        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';
       
        extract($_POST);
        $correo=$_POST['usu_correo']; 
        $hash = password_hash($_POST['usu_contraseña'], PASSWORD_BCRYPT);
        $sql2="SELECT usu_correo FROM tbl_usuario WHERE  usu_correo='".$correo."'";
        $correobd=$obj->consult($sql2);
        $row=$correobd->num_rows;
        if($row==0){
        $token = str_shuffle("0123456789" . uniqid());
        $usu_id = $obj->autoIncrement("tbl_usuario", "usu_id");
        $sql = "INSERT INTO tbl_usuario VALUES('$usu_id ', '$usu_nombre ','$usu_apellido ',
        '$usu_correo ', '$usu_telefono ','$usu_pais_residencia','$usu_residencia','$usu_direccion',
        '$usu_tipo_documento ', '$usu_documento ','$hash','$usu_termino',2,NULL,NULL,NULL,NULL,NULL,NULL)";
        $execution = $obj->insert($sql);
        ////// MANDAR CORREO CUANDO YA SE VALIDO QUE ES CORREO NO SE HAYA UTILIZADO YA EN EL SISTEMA
        //VALIDAR EL CORREO 
    $mail = new PHPMailer();                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 0;                                // Enable verbose debug output

        $mail->CharSet = 'UTF-8';

        $mail->isSMTP();         
                                    // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'soportegers@gmail.com';                 // SMTP username
        $mail->Password = '3122385203';                           // SMTP password
        $mail->SMTPSecure = 'TSL';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port =587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('soportegers@gmail.com', 'Soporte Gers');
        $mail->addAddress($correo);     // Add a recipient
        //$mail->addAddress(".$Usu_email.");                    // Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
       // $mail->addBCC('');
        // $mail->addCC('bcc@example.com');

        //Attachments
        $mail->addAttachment('images/G.png');     // Add attachments
        $mail->addAttachment('Gestion Humana - Gers');    // Optional name

        //Content
        $mail->isHTML(true);// Set email format to HTML
        $mail->Subject = 'Validación de correo electronico';
        $mail->Body    = "Ha iniciado el proceso de registro en nuestro sistema de <b>RECURSOS HUMANOS</b>, copie este codigo <b>$token</b> e ingreselo en el sistema o dele clic al siguiente enlace <strong>http://localhost/RecursosHumanos/web/ajax.php?modulo=Access&controlador=Access&funcion=viewcorreo</strong>, para poder registrarte<br><b>Si no solicito ningun codigo de registro de su correo electronico en el sistema GERS S.A.S, ignore este mensaje.</b>";
        //$mail->AltBody = '';

        $mail->send();

        $sql = "UPDATE tbl_usuario SET usu_validarcorreo='$token' WHERE usu_correo='$correo' ";
        $execution = $obj->update($sql);
        if ($execution) {
            echo "<script>alert('Hemos enviado a su correo electronico un codigo de verificación(Revise su carpeta de spam).');</script>";           
           redirect(getUrl("Access", "Access", "viewcorreo",false, "ajax"));
          
        }
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
        //FIN DE VALIDAR CORREO
        ////////////////////////////////////FIN DE LA VALIDACION DE CORREO
        } else {
            echo "<script>alert('Este correo electronico ya se encuentra registrado en el sistema');</script>";
            redirect('Login.php');  
        }  
    }


    //FUNCION APRA VALIDAR CORREO ELECTRONICO
    public function validarcorreo(){
        $obj = new AccessModel();
        $usu_correo = $_POST['usu_correo'];
        $usu_token = $_POST['usu_token'];

        $sql = "SELECT usu_validarcorreo,usu_correo FROM `tbl_usuario` WHERE usu_validarcorreo='$usu_token' AND usu_correo='$usu_correo'";
        $consultToken = $obj->consult($sql);

        if (mysqli_num_rows($consultToken) > 0) {
            $sql = "UPDATE tbl_usuario SET usu_validarcorreo=NULL WHERE usu_correo='".$usu_correo."' ";

            $execution = $obj->update($sql);

            if ($execution) {
                //aqui va una alerta para mostrar que ya se cambio 
                echo '<script>alert("El correo electronico se ha validado correctamente!");</script>';
                redirect('login.php');   
            }
        }else {
            //aqui una alerta por si no se cambio.
            echo '<script>alert("Ha ingresado datos incorrectos por favor intentelo nuevamente!");</script>';
            redirect(getUrl("Access", "Access", "viewcorreo",false, "ajax"));
        }
    }

    //FUNCION DE LA VISTA PARA VALIDAR EL CODIGO
    public function viewcorreo(){
        include_once '../view/login/validarcorreo.php'; 
    }

    //acceso en el login
    public function login()
    {
        $obj = new AccessModel();

        $usu_correo = $_POST['usu_correo'];
        $usu_contraseña = $_POST['usu_contraseña'];


        //pregunta si me llega una consulta y si el campo de valido es null, para que valide su cuenta
       
        $selectedPass = "SELECT usu_contraseña FROM tbl_usuario WHERE usu_correo='$usu_correo'";
        $passord_V = $obj->consult($selectedPass);
        if (mysqli_num_rows($passord_V)>0) {
            $correovalidado = "SELECT usu_correo FROM tbl_usuario WHERE usu_correo='$usu_correo' AND usu_validarcorreo IS NULL";
            $passord_V2 = $obj->consult($correovalidado);
             //pregunta si me llega mas de una consulta
        if (mysqli_num_rows($passord_V2) > 0) {
           foreach ($passord_V as $pass) {
                $hash_verify_db = $pass['usu_contraseña'];
            }
        //si concuerda la contraseña seleccioneme ese usuario y redireccionalo a ADMIN O USUARIO
            if (password_verify($usu_contraseña, $hash_verify_db)) {
                
                $sqlUser = "SELECT usu_id, usu_nombre, usu_apellido, usu_correo, usu_contraseña, rol_id FROM tbl_usuario WHERE usu_correo='" . $usu_correo . "' AND usu_contraseña='" . $hash_verify_db . "' AND rol_id=1";
                $usuario = $obj->consult($sqlUser);
                if (mysqli_num_rows($usuario) > 0) {
                    foreach ($usuario as $user) {

                        $_SESSION['nameUser'] = $user['usu_nombre'];
                        $_SESSION['surnameUser'] = $user['usu_apellido'];
                        $_SESSION['rolId']=$user['rol_id'];
                        $_SESSION['idUser'] = $user['usu_id'];
                        $_SESSION['auth'] = "ok";
                    }
                    if ($_SESSION['idUser'] > 0 ){
                        $sql = "UPDATE tbl_vacante SET id_estadovacante = 2 WHERE DATE_FORMAT(CURDATE(),'%y%m%d') >= vac_fecha  AND id_estadovacante=1";
                        $resultado = $obj->update($sql);
                }
                    redirect("indexAdmin.php");
                } 
                $sqlUser2 = "SELECT usu_id, usu_nombre, usu_apellido, usu_correo, usu_contraseña, rol_id FROM tbl_usuario WHERE usu_correo='" . $usu_correo . "' AND usu_contraseña='" . $hash_verify_db . "' AND rol_id=2";
                $usuario2 = $obj->consult($sqlUser2);
                if (mysqli_num_rows($usuario2) > 0) {
                    foreach ($usuario2 as $user) {

                        $_SESSION['nameUser'] = $user['usu_nombre'];
                        $_SESSION['surnameUser'] = $user['usu_apellido'];
                        $_SESSION['rolId']=$user['rol_id'];
                        $_SESSION['idUser'] = $user['usu_id'];
                        $_SESSION['auth'] = "ok";
                    }
                    if ($_SESSION['idUser'] > 0 ){
                        $sql = "UPDATE tbl_vacante SET id_estadovacante = 2 WHERE DATE_FORMAT(CURDATE(),'%y%m%d') >=  vac_fecha  AND id_estadovacante=1";
                        $resultado = $obj->update($sql);
                }
                    redirect("indexUsu.php");
                } else {
                    echo "<script>alert('El correo o contraseña no coinciden Vuelva a intentarlo'); </script>";
                    redirect('login.php');
                    
                }
            }else {
                //alerta de que no coincide la contraseña
                echo "<script>alert('El correo o contraseña no coinciden Vuelva a intentarlo'); </script>";
                redirect('login.php');
            }
            

        } else {
            echo "<script>alert('Aún no ha activado su cuenta, por favor ingrese a su correo electronico para la validación'); </script>";
            redirect('login.php');
        }
    
    }else {
        echo "<script>alert('El correo o contraseña no coinciden Vuelva a intentarlo'); </script>";
        redirect('login.php');
    }

    }


// CIERRE DE SESION
    public function logOut()
    {
        session_destroy();
        redirect('login.php');
    }
}