<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
include_once '../model/Usuario/OfertasVacantesModel.php';
Class OfertasController
//consultar todas las vacantes que estan activas para que pueda aplicar el usuario
{ 
    public function consult(){
        $obj= new OfertasVacantesModel();
        $sql="SELECT * FROM tbl_vacante WHERE id_estadovacante='1'";
        $aplicaciones=$obj->consult($sql);

//requerimientos para que se pueda visualizar las vacantes
        $sql="SELECT * FROM tbl_formacion WHERE usu_id='".$_SESSION['idUser']."'";
        $formacion=$obj->consult($sql);
        $rowformacion=$formacion->num_rows;

        $sql="SELECT * FROM tbl_historial_de_trabajo WHERE usu_id='".$_SESSION['idUser']."'";
        $historialaboral=$obj->consult($sql);
        $rowhistorial=$historialaboral->num_rows;

        $sql="SELECT usu_hojadevida FROM tbl_usuario WHERE usu_id='".$_SESSION['idUser']."'";
        $hojadevida=$obj->consult($sql); 
        $rowhojadevida=$hojadevida->num_rows;
        
        include_once '../view/Usuario/Oferta/OfertasVacantes.php';

    }

    //la vista de aplicar cuando seleccionamos una vacante
    public function vistaAplicar(){
      $obj= new OfertasVacantesModel();
      $id_vacante=$_GET['id_vacante'];
      $sql= "SELECT * FROM tbl_vacante WHERE id_vacante='".$id_vacante."'";
      $vacantes = $obj->consult($sql);
      $sql="SELECT * FROM tbl_usuario WHERE usu_id='".$_SESSION['idUser']."'";
      $usuario=$obj->consult($sql);
      $sql="SELECT * FROM tbl_usuariovacante WHERE usu_id='".$_SESSION['idUser']."'";
      $documento=$obj->consult($sql);
      include_once '../view/Usuario/Oferta/AplicarVacante.php';    
    }

//detalle de la vacante
    public function modaldetalle(){

    $obj = new OfertasVacantesModel();
    $vac_id = $_GET['id_vacante'];
    $sql = "SELECT * FROM tbl_vacante WHERE id_vacante='$vac_id'";
    $vacantes = $obj->consult($sql);
    include_once '../view/Usuario/Oferta/modaldetallevacante.php'; 
  }

//consultar la formacion que ha registrado el usuario
    public function consultusu(){
      $obj = new OfertasVacantesModel();
      $sql="SELECT * FROM tbl_formacion WHERE usu_id='".$_SESSION['idUser']."'";
      $formacion=$obj->consult($sql);
    include_once '../view/Usuario/Oferta/consultformacion.php'; 
    }


//consultar los datos registrados
    public function consultaregistro(){
    
      $obj = new OfertasVacantesModel();
      $sql = "SELECT * FROM tbl_usuario where usu_id='".$_SESSION['idUser']."'";
      $usuario = $obj->consult($sql);

    include_once '../view/Usuario/Oferta/consultregistro.php'; 
    }
    
// la vista de experiencia laboral registrada y para crear más experiencia
    public function experiencia(){
      $obj = new OfertasVacantesModel();
      $sql="SELECT * FROM tbl_area";
      $areas=$obj->consult($sql);
      $sql="SELECT * FROM tbl_historial_de_trabajo WHERE usu_id='".$_SESSION['idUser']."'";
      $historial=$obj->consult($sql);
      include_once '../view/Usuario/Oferta/consultexperiencia.php'; 
    }
    //AREAS DE LA EXPERIENCIA
    public function  actividadesdinamicas(){
      $obj = new OfertasVacantesModel();
      $form=$_GET['id_hist'];
      $sql="SELECT tbl_area.are_nombre,tbl_area.id_area
      FROM ((tbl_area 
      INNER JOIN tbl_historiadetalle ON tbl_historiadetalle.id_area=tbl_area.id_area)
      INNER JOIN tbl_historial_de_trabajo ON tbl_historial_de_trabajo.id_hist=tbl_historiadetalle.id_hist)
      INNER JOIN tbl_usuario ON tbl_historial_de_trabajo.usu_id=tbl_usuario.usu_id
      WHERE tbl_usuario.usu_id='".$_SESSION['idUser']."' AND tbl_historiadetalle.id_hist='".$form."'";
      $areaschecked=$obj->consult($sql);

      foreach ($areaschecked as $area) {

      echo "<div style='float:left;' class='col-md-5'>
        <b><label style='font-size:20px;'>'". $area['are_nombre']."'</label> <input type='checkbox' disabled checked value='". $area['id_area']."'></b>
        </div>";
      }
    }
//la vista para consultar y registrar documentos
    public function documento(){
      $obj= new OfertasVacantesModel();
      $sql="SELECT usu_hojadevida,usu_matricula,usu_fechamatricula,usu_fechahojadevida FROM tbl_usuario WHERE usu_id='".$_SESSION['idUser']."'";
      $usuario=$obj->consult($sql);
        include_once '../view/Usuario/Oferta/consultdocumentos.php'; 
      }
   
//actualizar documentos hoja de vida
public function actualizarDocumentos(){
$obj=new OfertasVacantesModel();
if(empty($_FILES['usu_hojadevida']['name'])){
  echo "<script> alert('No ha subido ningun archivo'); </script>";
  redirect(getUrl("Usuario","Ofertas","documento"));
}else{
  $nombrefinal=$_FILES['usu_hojadevida']['name'];
  $ruta="../web/hojas/".$nombrefinal;
  move_uploaded_file($_FILES['usu_hojadevida']["tmp_name"],$ruta);
  $usu_hojadevida=$ruta;
  $sql="UPDATE tbl_usuario
      SET usu_hojadevida='".$usu_hojadevida."'
      WHERE usu_id='".$_SESSION['idUser']."'";
$ejecutar=$obj->update($sql);
$sql="UPDATE tbl_usuario
      SET usu_fechahojadevida=CURRENT_TIMESTAMP
      WHERE usu_id='".$_SESSION['idUser']."'";
$ejecutar=$obj->update($sql); 
}
  redirect(getUrl("Usuario","Ofertas","documento"));
}
//actualizar documentos matricula
public function actualizarDocumentos2(){
$obj=new OfertasVacantesModel();

if(empty($_FILES['usu_matricula']['name'])){
  echo "<script> alert('No ha subido ningun archivo'); </script>";
  redirect(getUrl("Usuario","Ofertas","documento"));
  
}else{
$nombrefinal=$_FILES['usu_matricula']['name'];
$ruta="../web/carta/".$nombrefinal;
move_uploaded_file($_FILES["usu_matricula"]["tmp_name"],$ruta);
$usu_matricula=$ruta;
$sql="UPDATE tbl_usuario
SET usu_matricula='".$usu_matricula."'
WHERE usu_id='".$_SESSION['idUser']."'";
$ejecutar=$obj->update($sql);
$sql="UPDATE tbl_usuario
      SET usu_fechamatricula=CURRENT_TIMESTAMP
      WHERE usu_id='".$_SESSION['idUser']."'";
$ejecutar=$obj->update($sql);    
} 

redirect(getUrl("Usuario","Ofertas","documento"));
}


//insertar mas formacion en el apartado de usuario
 public function postformacion(){
      $obj= new OfertasVacantesModel();
      $id=$obj->autoIncrement("tbl_formacion","id_formacion");
      if(empty($_FILES['form_titulo_profesional']['name'])){
        echo "<script> alert('Tiene que adjuntar el certificado de estudió'); </script>";
        redirect(getUrl("Usuario","Ofertas","consultusu"));
        
      }elseif(empty($_POST['form_nivel_de_educacion'])){
        echo "<script> alert('Seleccione el nivel de estudió'); </script>";
        redirect(getUrl("Usuario","Ofertas","consultusu"));
      }else{
        $nombrefinal=$_FILES['form_titulo_profesional']['name'];
        $ruta="../web/certificadodeestudio/".$nombrefinal;
        move_uploaded_file($_FILES["form_titulo_profesional"]["tmp_name"],$ruta);
        $form_titulo_profesional=$ruta;
        $form_nivel_de_educacion=$_POST["form_nivel_de_educacion"];
        $form_nombre=$_POST["form_nombre"];
        $form_tituloname=$_POST["form_tituloname"];
        $form_conocimientos=$_POST["form_conocimientos"];
        $form_fecha_fin=$_POST["form_fecha_fin"];
        $usu_id=$_SESSION['idUser'];
        $sql="INSERT INTO tbl_formacion(id_formacion,form_tituloname,form_titulo_profesional,form_nivel_de_educacion,form_nombre,form_conocimientos,form_fecha_fin,usu_id) 
        VALUES($id,'".$form_tituloname."','".$form_titulo_profesional."','".$form_nivel_de_educacion."','".$form_nombre."','".$form_conocimientos."','".$form_fecha_fin."','".$usu_id."')";
        $ejecutar=$obj->insert($sql);
        echo "<script>alert('Se ha agregado con exito!');</script>";
        redirect(getUrl("Usuario","Ofertas","consultusu"));
      }
      
      
    }
//insertar mas experiencia laboral
    public function posthistorial(){
    $obj= new OfertasVacantesModel();
    $id=$obj->autoIncrement("tbl_historial_de_trabajo","id_hist");

    if(isset($_FILES["hist_certificado"])){
      $nombrefinal=$_FILES['hist_certificado']['name'];
      $ruta="../web/certificadodetrabajo/".$nombrefinal;
      move_uploaded_file($_FILES["hist_certificado"]["tmp_name"],$ruta);
      $hist_certificado=$ruta;
     }else{
      $hist_certificado=NULL;
     }
     
    $hist_cargo=$_POST["hist_cargo"];
//conteo de experiencia en meses y/o años
// hace un conteo en meses y va restando 
    if($_POST["mes"]==0){
      $mes=NULL;
    }else{
      $mes=$_POST["mes"];
    }
    if($_POST["año"]==0){
      $año=NULL;
    }else{
      $año=$_POST["año"];
    }


    $hist_empresa=$_POST["hist_empresa"];
    $hist_descripcion=$_POST["hist_descripcion"];
    $hist_pais=$_POST["hist_pais"];
    $hist_ciudad=$_POST["hist_ciudad"];
    $hist_fecha_inicio=$_POST["hist_fecha_inicio"];
    $hist_fecha_fin=$_POST["hist_fecha_fin"];
    $id_area=$_POST['area'];
    if(isset($_POST["hist_trabajoactual"])){
     $hist_trabajoactual=$_POST["hist_trabajoactual"];
    }else{
      $hist_trabajoactual=NULL;
    }
    $usu_id=$_SESSION['idUser'];

    $sql="INSERT INTO tbl_historial_de_trabajo(id_hist,hist_certificado,hist_cargo,hist_empresa,hist_descripcion,hist_pais,hist_ciudad,hist_fecha_inicio,hist_fecha_fin,hist_trabajoactual,usu_id,hist_añosxp,hist_mesxp) 
    VALUES($id,'".$hist_certificado."','".$hist_cargo."','".$hist_empresa."','".$hist_descripcion."','".$hist_pais."','".$hist_ciudad."','".$hist_fecha_inicio."','".$hist_fecha_fin."','".$hist_trabajoactual."','".$usu_id."','".$año."','".$mes."')";

    $ejecutar=$obj->insert($sql);
    //inserta todas las actividades seleccionas por el usuario en la table tbl_historiadetalle
    for($i=0;$i<count($id_area);$i++){
      $id_historiadetalle=$obj->autoIncrement("tbl_historiadetalle","id_historiadetalle");
      $sqlfk="INSERT INTO tbl_historiadetalle (id_historiadetalle,id_hist,usu_id,id_area) VALUES ($id_historiadetalle,'".$id."','".$usu_id."','".$id_area[$i]."')";
      $ejecutardetalle=$obj->insert($sqlfk);
    }

    redirect(getUrl("Usuario","Ofertas","experiencia"));
    
  }


  //eliminar formacion el apartado de usuario
  public function eliminarforma(){
    $obj=new OfertasVacantesModel();
    $id_formacion=$_GET['id_formacion'];
    $sql="DELETE FROM tbl_formacion 
          WHERE id_formacion='".$id_formacion."'";
    $ejecutar=$obj->delete($sql);
    
  redirect(getUrl("Usuario","Ofertas","consultusu"));

  }
  //eliminar historiald e trabajo en el apartado de usuario
  public function eliminarhistorial(){
  $obj=new OfertasVacantesModel();
  $id_hist=$_GET['id_hist'];
  $sql="DELETE FROM tbl_historiadetalle WHERE id_hist='".$id_hist."'";
  $delete=$obj->delete($sql);
  if(isset($delete)){
  $sql="DELETE FROM tbl_historial_de_trabajo WHERE id_hist='".$id_hist."'";
  $ejecutar=$obj->delete($sql);
  redirect(getUrl("Usuario","Ofertas","historial"));
  }
  }
//consultar certificadod e estudio
  public function consultarcertificado(){
    $obj= new OfertasVacantesModel();
    $id_formacion=$_GET['id_formacion'];
    $sql="SELECT form_titulo_profesional FROM tbl_formacion WHERE id_formacion='".$id_formacion."'";
    $formacion=$obj->consult($sql);
    $row=$formacion->num_rows;
    //num_rows me trae el numero de registros
    include_once '../view/Usuario/Oferta/modalformacion.php'; 
  }

  //consultar historial si tiene registrado
  public function consultarhistorial(){
    $obj= new OfertasVacantesModel();
    $id_hist=$_GET['id_hist'];
    $sql="SELECT hist_certificado FROM tbl_historial_de_trabajo WHERE id_hist='".$id_hist."'";
    $historial=$obj->consult($sql);
    $row=$historial->num_rows;
    include_once '../view/Usuario/Oferta/modalhistorial.php'; 
  }
 //actualizar registro de usuario
  public function ActualizarRegistro(){
    $obj= new OfertasVacantesModel();
    $pais=$_POST['usu_pais_residencia'];
    $usu_telefono=$_POST['usu_telefono'];
    $ciudad=$_POST['usu_residencia'];
    $direccion=$_POST['usu_direccion'];
    if(empty($direccion) || empty($usu_telefono) || empty($ciudad) || empty($pais)){
      echo "<script> alert('No puede tener información vacía'); </script>";
      redirect(getUrl("Usuario","Ofertas","consultaregistro")); 
    }else{
    $sql="UPDATE tbl_usuario
          SET usu_pais_residencia='".$pais."',usu_residencia='".$ciudad."',usu_direccion='".$direccion."',usu_telefono='".$usu_telefono."'
          WHERE usu_id='".$_SESSION['idUser']."'";
    $ejecutar=$obj->update($sql);
    }
    redirect(getUrl("Usuario","Ofertas","consultaregistro"));
  }
//agregar idiomas
  public function AgregarIdioma(){
    $obj= new OfertasVacantesModel();
    $id=$obj->autoIncrement("tbl_idiomas","id_idioma");
    $idioma=$_POST["idioma"];
    $NivelIdioma=$_POST["NivelIdioma"];
    $gatillo=0;
    //gatillo sirve para validar si el idioma ya fue registrado.
    if(empty($idioma) or empty($NivelIdioma)){
      echo "<script> alert('Llene los campos correcamente'); </script>";
      redirect(getUrl("Usuario","Ofertas","idiomas")); 
    }else{
      //consultar para ejecutar insert o mandar alerta de que ya esta!
      $sql="SELECT * FROM tbl_idiomas WHERE usu_id='".$_SESSION['idUser']."'";
      $consultaridiomas=$obj->consult($sql);
      $rowidiomas=$consultaridiomas->num_rows;

            if ($rowidiomas==0) {
              $sql="INSERT INTO tbl_idiomas(id_idioma,idi_nombre,idi_nivel,usu_id)
              VALUES($id,'".$idioma."','".$NivelIdioma."','".$_SESSION['idUser']."')";
            $ejecutar=$obj->insert($sql);
            }else {
              foreach ($consultaridiomas as $idi) {
                if($idi['idi_nombre']==$idioma){
                  $gatillo=1;
                }   
                if($gatillo==1){
                  echo "<script>alert('Ya tiene registrado este idioma, si quieres cambiar el nivel de idioma tienes que eliminar el anterior');</script>";
                }else {
                  $sql="INSERT INTO tbl_idiomas(id_idioma,idi_nombre,idi_nivel,usu_id)
                   VALUES($id,'".$idioma."','".$NivelIdioma."','".$_SESSION['idUser']."')";
                   $ejecutar=$obj->insert($sql);   
                }
                
              }
            }
   }
    redirect(getUrl("Usuario","Ofertas","idiomas"));
  }
  //eliminar idiomas del apartado
  public function EliminarIdioma(){
    $obj= new OfertasVacantesModel();
    $id_idioma=$_GET["id_idioma"];
    $sql="DELETE FROM tbl_idiomas 
          WHERE id_idioma='".$id_idioma."' AND usu_id='".$_SESSION['idUser']."'";
    $ejecutar=$obj->delete($sql);
  }

//consultar el estado en el que se encuentra el aspirante al momento de aplicar a las vacantes
  public function consulestado(){
  $obj= new OfertasVacantesModel();
  $sql = "SELECT tbl_vacante.id_vacante,tbl_vacante.vac_nombre,tbl_seleccionado.id_seleccionado,
  tbl_seleccionado.selec_nombre
  FROM  ((tbl_usuario  
  INNER JOIN tbl_usuariovacante ON tbl_usuario.usu_id=tbl_usuariovacante.usu_id)
  INNER JOIN tbl_vacante ON tbl_usuariovacante.id_vacante=tbl_vacante.id_vacante)
  INNER JOIN tbl_seleccionado ON tbl_usuariovacante.id_seleccionado=tbl_seleccionado.id_seleccionado
  WHERE tbl_usuariovacante.usu_id='".$_SESSION["idUser"]."'";
   $listado=$obj->consult($sql);
   $row=$listado->num_rows;
   include_once '../view/Usuario/Oferta/estado.php'; 
 }
// aplicar vacante
 public function postinsert(){
  require 'PHPMailer/src/Exception.php';
  require 'PHPMailer/src/PHPMailer.php';
  require 'PHPMailer/src/SMTP.php';
   $obj=new OfertasVacantesModel();
  // validar que no haya aplicado a la misma vacante
  $id_vacante=$_POST['id_vacante'];
  $gatillo=0;
  $sql="SELECT * FROM tbl_usuariovacante";
  $aplicaciones=$obj->consult($sql);
  foreach ($aplicaciones as $apli) {
    if($apli['usu_id']==$_SESSION['idUser'] && $apli['id_vacante']==$id_vacante){
      $gatillo=1;
    }
  }

//validaar y ejecutar accciones dependiendo 

if($gatillo==0){
   $id=$obj->autoIncrement("tbl_usuariovacante","ofer_id");
   if(isset($_POST['usu_viajar'])){
     $usu_viajar=$_POST['usu_viajar'];
   }else{
    $usu_viajar="NO";
   }
   if(isset($_POST['usu_elegible'])){
    $usu_elegible=$_POST['usu_elegible'];
   }else{
    $usu_elegible="NO";
   }
   // CARTA PRESENTACION
   if(isset($_FILES['usu_cartapresentacion'])){
    $nombrefinal=$_FILES['usu_cartapresentacion']['name'];
    $ruta="../web/carta/".$nombrefinal;
    move_uploaded_file($_FILES["usu_cartapresentacion"]["tmp_name"],$ruta);
    $usu_cartapresentacion=$ruta;
    }else{
      $usu_cartapresentacion=NULL;
    }
    $id_vacante=$_POST['id_vacante'];
    $sql="INSERT INTO tbl_usuariovacante(ofer_id,usu_id,id_vacante,id_seleccionado,usu_viajar,usu_elegible,usu_cartapresentacion,usuvac_fecha)
          VALUES($id,'".$_SESSION['idUser']."','".$id_vacante."',3,'".$usu_viajar."','".$usu_elegible."','".$usu_cartapresentacion."',CURRENT_TIMESTAMP)";
    $execute=$obj->insert($sql);
     /// mandar correos despues de aplicar a la vacante
     $sql="SELECT tbl_vacante.vac_nombre,tbl_usuario.usu_correo
      FROM tbl_usuario 
      INNER JOIN tbl_usuariovacante ON tbl_usuario.usu_id=tbl_usuariovacante.usu_id 
      INNER JOIN tbl_vacante ON tbl_usuariovacante.id_vacante=tbl_vacante.id_vacante 
      WHERE tbl_usuariovacante.usu_id='".$_SESSION['idUser']."'
      AND tbl_usuariovacante.id_vacante='".$id_vacante."';";
     $usuarios=$obj->consult($sql);
    //PARA CONTAR TODOS LOS USUARIOS QUE HAN APLICADO Y ASI MISMO MANDARLE UN CORREO CON LA CANTIDAD QUE HAY APLICADOS
     $sql="SELECT count(*) FROM tbl_usuariovacante WHERE
           id_vacante='".$id_vacante."'";
     $cantidad=$obj->consult($sql);

     foreach ($usuarios as $usu) {
      $mail = new PHPMailer();                              // Passing `true` enables exceptions
      try {
          //Server settings
          $mail->SMTPDebug = 2;                                // Enable verbose debug output

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
          $mail->addAddress($usu['usu_correo']);     // Add a recipient
          //$mail->addAddress(".$Usu_email.");                    // Name is optional
          // $mail->addReplyTo('info@example.com', 'Information');
         // $mail->addBCC('carolcundar19@gmail.com');
          // $mail->addCC('bcc@example.com');

          //Attachments
          $mail->addAttachment('images/G.png');     // Add attachments
          $mail->addAttachment('Gestion Humana - Gers');    // Optional name

          //Content
          $mail->isHTML(true);// Set email format to HTML
          $mail->Subject = 'ALERTAS DE GERS S.A.S';
          $mail->Body    = "Ha aplicado a la vacante <b>".$usu['vac_nombre']."</b> satisfactoriamente, visita nuestro portal para ver tu estado en la vacante, también nos iremos contactando contigo si tu estado en la vacante cambia. gracias por postularte y querer ser parte de esta gran familia <b>GERS S.A.S";
          //$mail->AltBody = '';
          $mail->send();
         // redirect(getUrl("Usuario","Ofertas","consulestado"));
      } catch (Exception $e) {
          echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
      } 
}
  

  }else{
      echo "<script>alert('ya ha aplicado a esta vacante');</script>";
  }


  // redirect(getUrl("Usuario","Ofertas","consulestado"));
  }



//mostrar los idiomas que tenga registrados
  public function idiomas(){
    $obj=new OfertasVacantesModel();
    $sql="SELECT * FROM tbl_idiomas WHERE usu_id='".$_SESSION['idUser']."'";
    $idiomas=$obj->consult($sql);
  
    include_once '../view/Usuario/Oferta/idiomas.php';
  }
//actualizar contraseña
  public function updatepassword(){
    $obj= new OfertasVacantesModel();
    $passnew=$_POST['ContraseñaNueva'];
    $passold=$_POST['ContraseñaVieja'];
//consulta para verificar que sea la misma
    $selectedPass = "SELECT usu_contraseña FROM tbl_usuario WHERE usu_id='".$_SESSION['idUser']."'";
    $passord_V = $obj->consult($selectedPass);
///
if (mysqli_num_rows($passord_V) > 0) {

  foreach ($passord_V as $pass) {
      $hash_verify_db = $pass['usu_contraseña'];
  }
//valida si la contraseña antigua es la correcta y crea la otra y la encripta.
  if (password_verify($passold, $hash_verify_db)) {

   $hashnew=password_hash($passnew, PASSWORD_BCRYPT);

    $sql="UPDATE tbl_usuario
          SET    usu_contraseña='".$hashnew."'
          WHERE  usu_id='".$_SESSION['idUser']."' AND usu_contraseña='".$hash_verify_db."'";
    $update=$obj->update($sql);
    echo "<script>alert('Se ha actualizado con exito!');</script>";
    redirect(getUrl("Usuario","Ofertas","consultaregistro"));
    
       
  }else {
    echo "<script>alert('Tiene ingresado datos incorrectos');</script>";
    redirect(getUrl("Usuario","Ofertas","consultaregistro")); 
  }
}

///
  }

}
?>