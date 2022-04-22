<?php

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

        extract($_POST);

        $hash = password_hash($_POST['usu_contraseña'], PASSWORD_BCRYPT);

        $usu_id = $obj->autoIncrement("tbl_usuario", "usu_id");

        $sql = "INSERT INTO tbl_usuario VALUES('$usu_id ', '$usu_nombre ','$usu_apellido ',
        '$usu_correo ', '$usu_telefono ','$usu_pais_residencia','$usu_residencia','$usu_direccion',
        '$usu_tipo_documento ', '$usu_documento ','$hash','$usu_termino',2,NULL,NULL,NULL,NULL,NULL)";
        $execution = $obj->insert($sql);
        if ($execution) {
             redirect('Login.php');
          
        } else {
          //  echo $sql;
            echo "Ups ocurrio un error";
        }
    }
    //acceso en el login
    public function login()
    {
        $obj = new AccessModel();

        $usu_correo = $_POST['usu_correo'];
        $usu_contraseña = $_POST['usu_contraseña'];

        $selectedPass = "SELECT usu_contraseña FROM tbl_usuario WHERE usu_correo='$usu_correo' ";

        $passord_V = $obj->consult($selectedPass);

       

//pregunta si me llega mas de una consulta
        if (mysqli_num_rows($passord_V) > 0) {

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