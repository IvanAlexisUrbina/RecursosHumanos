<?php

include_once '../model/Admin/AspiranteVacantesModel.php';
//PARA ASPIRANTE CONSULTA
//aplicados a una vacante



class AspiranteController{

      //SELECCIONA TODOS LOS ASPIRANTES QUE ESTAN REGISTRADOS EN ALGUNA VACANTE Y SE PUEDE VISUALIZAR SU ESTADO
    public function listado(){
        $obj=new AspiranteVacantesModel();
        $sql = "SELECT tbl_usuario.usu_id,tbl_usuario.usu_nombre,tbl_usuario.usu_apellido,tbl_usuario.usu_correo,tbl_usuario.usu_telefono,tbl_vacante.id_vacante,tbl_vacante.vac_nombre,tbl_vacante.vac_publicacion,tbl_seleccionado.id_seleccionado,tbl_seleccionado.selec_nombre
                FROM  ((tbl_usuario  INNER JOIN tbl_usuariovacante ON tbl_usuario.usu_id=tbl_usuariovacante.usu_id)
                                     INNER JOIN tbl_vacante ON tbl_usuariovacante.id_vacante=tbl_vacante.id_vacante)
                                     INNER JOIN tbl_seleccionado ON tbl_usuariovacante.id_seleccionado=tbl_seleccionado.id_seleccionado";
        $listado=$obj->consult($sql);
        // consulta para los graficos y saber cuantos usuarios hay y demás
        $sql="SELECT COUNT(usu_id) FROM tbl_usuario";
        $contador=$obj->consult($sql);
      foreach ($contador as $key) {
        $suma=$key['COUNT(usu_id)'];
      }

        $validar=array();
        $yaesta=array();
        $cont=0;
        //consulta para ver cuantos han aplicadoa  una vacante
        $sql="SELECT * FROM tbl_usuario";
        $aplicados=$obj->consult($sql);
        
        foreach ($aplicados as $apli) {
          array_push($validar,$apli["usu_id"]);
          array_push($yaesta,0);
        }
        $sql="SELECT usu_id FROM tbl_usuario";
        $relacionado=$obj->consult($sql);

        foreach ($variable as $key => $value) {
          for($i=0;$i<count($validar);$i++){
            if($validar[$i]==$apli["usu_id"] && $yaesta[$i]==0){
              $yaesta[$i]=1;
              $cont++;
            }
          }
        }
       
        $aplicado=$cont;

        include_once '../view/Admin/Aspirante/Aspirantelistado.php';

    }
    //SELECCIONA EL USUARIO Y DEPENDIENDO EL QUE HAYAS SELECCIONADO NOS DARA SU INFORMACION AL MOMENTO QUE ESTAMOS DE UNA VACANTE
    public function ModalInfoUsuario(){
        $obj=new AspiranteVacantesModel();
        $id_usuario=$_GET['usu_id'];
        $id_vacante=$_GET['id_vacante'];  
        $sql="SELECT * FROM tbl_usuario
        WHERE tbl_usuario.usu_id=$id_usuario";
        $Usuario=$obj->consult($sql);
        $sql="SELECT * FROM tbl_usuariovacante
              WHERE tbl_usuariovacante.id_vacante='".$id_vacante."' AND tbl_usuariovacante.usu_id='".$id_usuario."'";
        $Usuariovacante=$obj->consult($sql);
        include_once "../view/Admin/Aspirante/ModalUsuario.php";

    }
    //muestra todos los usuarios que estas pendientes a una entrevista
    public function entrevistas(){
        $obj=new AspiranteVacantesModel();
        $sql = "SELECT tbl_usuario.usu_id,tbl_usuario.usu_nombre,tbl_usuario.usu_apellido,tbl_usuario.usu_correo,tbl_usuario.usu_telefono,tbl_vacante.id_vacante,tbl_vacante.vac_nombre,tbl_vacante.vac_publicacion,tbl_seleccionado.id_seleccionado,tbl_seleccionado.selec_nombre
        FROM  ((tbl_usuario  INNER JOIN tbl_usuariovacante ON tbl_usuario.usu_id=tbl_usuariovacante.usu_id)
                             INNER JOIN tbl_vacante ON tbl_usuariovacante.id_vacante=tbl_vacante.id_vacante)
                             INNER JOIN tbl_seleccionado ON tbl_usuariovacante.id_seleccionado=tbl_seleccionado.id_seleccionado
                             WHERE tbl_seleccionado.id_seleccionado=4";
        $listado=$obj->consult($sql);
        include_once "../view/Admin/Aspirante/entrevistas.php";  
    }
   //MUESTRA TODOS LOS USUARIOS QUE EL ADMINISTRADOR HAYA SELECCIONADO EN EL SISTEMA
    public function seleccionados(){
        $obj=new AspiranteVacantesModel();
        $sql = "SELECT tbl_usuario.usu_id,tbl_usuario.usu_nombre,tbl_usuario.usu_apellido,tbl_usuario.usu_correo,tbl_usuario.usu_telefono,tbl_vacante.id_vacante,tbl_vacante.vac_nombre,tbl_vacante.vac_publicacion,tbl_seleccionado.id_seleccionado,tbl_seleccionado.selec_nombre
                FROM  ((tbl_usuario INNER JOIN tbl_usuariovacante ON tbl_usuario.usu_id=tbl_usuariovacante.usu_id)
                                    INNER JOIN tbl_vacante ON tbl_usuariovacante.id_vacante=tbl_vacante.id_vacante)
                                    INNER JOIN tbl_seleccionado ON tbl_usuariovacante.id_seleccionado=tbl_seleccionado.id_seleccionado
                                    WHERE tbl_seleccionado.id_seleccionado=1";
        $listado=$obj->consult($sql);
        include_once "../view/Admin/Aspirante/seleccionados.php";
    }
    //muestra las opciones de la tabla "seleccionados" seleccionado,no seleccionado, en proceso, aceptado para entrevista.
    //para poder cambiar el estado del usuario
    public function ModalEntrevistaEstado(){
        $obj=new AspiranteVacantesModel();
        $id_usuario= $_GET['usu_id'];
        $id_vacante=$_GET['id_vacante'];
        $sql = "SELECT tbl_usuario.usu_id,tbl_usuario.usu_nombre,tbl_usuario.usu_apellido,tbl_usuario.usu_correo,
        tbl_usuario.usu_telefono
                FROM tbl_usuario
                WHERE tbl_usuario.usu_id='".$id_usuario."'";
        $usuario=$obj->consult($sql);
        $sql="SELECT * FROM tbl_vacante WHERE tbl_vacante.id_vacante='".$id_vacante."'";
        $vacante=$obj->consult($sql);
        $sql="SELECT * FROM tbl_seleccionado";
        $Estados=$obj->consult($sql);
        include_once "../view/Admin/Aspirante/ModalEntrevistaEstado.php";
    }

    //una modal que deja ver la hoja de vida del usuario
    public function modalhojadevida(){
        $obj=new AspiranteVacantesModel();
        $usu_id=$_POST["usu_id"];
        
        $sql="SELECT usu_id,usu_hojadevida FROM tbl_usuario WHERE tbl_usuario.usu_id='".$usu_id."'";

        include_once "../view/Admin/Aspirante/Modalhojadevida.php";
    }
    //informacion adicional de la modal de usuario
    public function educacion(){
        $obj=new AspiranteVacantesModel();
        $id_usuario=$_GET['usu_id'];
        $sql="SELECT * FROM tbl_formacion WHERE usu_id='".$id_usuario."'";
        $ejecutar=$obj->consult($sql);
        $row=$ejecutar->num_rows;
        include_once '../view/Admin/Aspirante/educacionconsult.php';
      }
      //muestra el historial de cada usuario dependiendo el que seleccionemos desde admin
    public function historial(){
        $obj=new AspiranteVacantesModel();
        $id_usuario=$_GET['usu_id'];
        $sql="SELECT * FROM tbl_historial_de_trabajo WHERE usu_id='".$id_usuario."'";
        $historial=$obj->consult($sql);
        $row=$historial->num_rows;
        include_once '../view/Admin/Aspirante/historialconsult.php';
      }
      // mostrar la carta laboral de su historial de trabajo si es que lo tiene
      public function consultarhistorial(){
        $obj=new AspiranteVacantesModel(); 
        $id_hist=$_GET['id_hist'];
        $sql="SELECT * FROM tbl_historial_de_trabajo WHERE id_hist='".$id_hist."'";
        $historial=$obj->consult($sql);
        include_once '../view/Admin/Aspirante/modalhistorial.php';
      }
      //mostrar el certificado de estudio del usuario seleccionado
      public function consultarcertificado(){
        $obj= new AspiranteVacantesModel();
        $id_formacion=$_GET['id_formacion'];
        $sql="SELECT * FROM tbl_formacion WHERE id_formacion='".$id_formacion."'";
        $formacion=$obj->consult($sql);
        include_once '../view/Admin/Aspirante/modalformacion.php'; 
      }
      //esta es la vista dentro de cada vacante cuando seleccionamos una vacante desde administrados
      // para poder aplicar los filtros de los aspirantes que se hayan registrado
public function filtroadicional(){
          $obj= new AspiranteVacantesModel();
          //actividades
          $sql="SELECT * FROM tbl_actividades WHERE id_area=1";
          $actividades1=$obj->consult($sql);
          $sql="SELECT * FROM tbl_actividades WHERE id_area=2";
          $actividades2=$obj->consult($sql);
          $sql="SELECT * FROM tbl_actividades WHERE id_area=3";
          $actividades3=$obj->consult($sql);
          $sql="SELECT * FROM tbl_actividades WHERE id_area=4";
          $actividades4=$obj->consult($sql);
          $sql="SELECT * FROM tbl_actividades WHERE id_area=5";
          $actividades5=$obj->consult($sql);
          $sql="SELECT * FROM tbl_actividades WHERE id_area=6";
          $actividades6=$obj->consult($sql);
          $sql="SELECT * FROM tbl_actividades WHERE id_area=7";
          $actividades7=$obj->consult($sql);
          $sql="SELECT * FROM tbl_actividades WHERE id_area=8";
          $actividades8=$obj->consult($sql);
          $sql="SELECT * FROM tbl_actividades WHERE id_area=9";
          $actividades9=$obj->consult($sql);
          $sql="SELECT * FROM tbl_actividades WHERE id_area=10";
          $actividades10=$obj->consult($sql);
          $sql="SELECT * FROM tbl_actividades WHERE id_area=11";
          $actividades11=$obj->consult($sql);
          //fin
          $aplicados=$_GET['id_vacante'];
          $sql="SELECT vac_nombre FROM tbl_vacante WHERE id_vacante='".$aplicados."'";
          $name=$obj->consult($sql);
          foreach ($name as $nam) {
            $nombre=$nam['vac_nombre'];
          }

          $sql = "SELECT tbl_usuario.usu_id,tbl_usuario.usu_nombre,tbl_usuario.usu_apellido,
          tbl_usuario.usu_telefono,tbl_usuario.usu_correo,tbl_vacante.id_vacante,tbl_vacante.vac_nombre,tbl_seleccionado.selec_nombre,
          tbl_vacante.vac_nombre,SUM(hist_añosxp)
          FROM  ((((tbl_usuario
                             INNER JOIN tbl_usuariovacante ON tbl_usuario.usu_id=tbl_usuariovacante.usu_id)
                             INNER JOIN tbl_seleccionado ON tbl_usuariovacante.id_seleccionado=tbl_seleccionado.id_seleccionado)
                             INNER JOIN tbl_historial_de_trabajo ON tbl_usuario.usu_id=tbl_historial_de_trabajo.usu_id)
                             INNER JOIN tbl_vacante ON tbl_usuariovacante.id_vacante=tbl_vacante.id_vacante)
                             INNER JOIN tbl_historiadetalle ON tbl_usuario.usu_id=tbl_historiadetalle.usu_id
                             WHERE tbl_vacante.id_vacante='".$aplicados."'
                             GROUP BY  tbl_usuario.usu_id,tbl_usuario.usu_nombre,tbl_usuario.usu_apellido,
          tbl_usuario.usu_telefono,tbl_usuario.usu_correo,tbl_vacante.id_vacante,
          tbl_vacante.vac_nombre";
   
          $Usuario=$obj->consult($sql);
          
         

          include_once '../view/Admin/Aspirante/filtroadicional.php'; 
      }

      //aplica los filtro para ver los aspirantes que cumplan con los requisitos segun lo seleccionemos
      public function aspirantesdinamicos(){
        $obj=new AspiranteVacantesModel();
        $aplicados=$_GET['id_vacante'];
        //Cadena de texto dependiendo cuales seleccionas.
        $id_actividades=json_decode(stripslashes($_POST['data']));
        //vectores que utilizaremos
        $seleccionados=array();
        $yaesta=array();

        $sql="SELECT usu_id FROM tbl_usuariovacante WHERE tbl_usuariovacante.id_vacante='".$aplicados."'";

        $ejecutarsql=$obj->consult($sql);

        //todo los usuarios que hay
        foreach($ejecutarsql as $ejecu){
          array_push($seleccionados,$ejecu["usu_id"]);
          array_push($yaesta,0);
        }
  
        //todos los seleccionados
        foreach($id_actividades as $id_actividad){
        $sql="SELECT tbl_usuario.usu_id,tbl_usuario.usu_nombre,tbl_usuario.usu_apellido,
        tbl_usuario.usu_telefono,tbl_usuario.usu_correo,tbl_vacante.id_vacante,tbl_seleccionado.selec_nombre,
        tbl_vacante.vac_nombre,SUM(hist_añosxp)
        FROM  ((((tbl_usuario
                             INNER JOIN tbl_usuariovacante ON tbl_usuario.usu_id=tbl_usuariovacante.usu_id)
                             INNER JOIN tbl_seleccionado ON tbl_usuariovacante.id_seleccionado=tbl_seleccionado.id_seleccionado)
                             INNER JOIN tbl_historial_de_trabajo ON tbl_usuario.usu_id=tbl_historial_de_trabajo.usu_id)
                             INNER JOIN tbl_vacante ON tbl_usuariovacante.id_vacante=tbl_vacante.id_vacante)
                             INNER JOIN tbl_historiadetalle ON tbl_usuario.usu_id=tbl_historiadetalle.usu_id
                             WHERE tbl_vacante.id_vacante='".$aplicados."'
                             AND tbl_historiadetalle.id_actividades='".$id_actividad."'
                             GROUP BY  tbl_usuario.usu_id,tbl_usuario.usu_nombre,tbl_usuario.usu_apellido,
        tbl_usuario.usu_telefono,tbl_usuario.usu_correo,tbl_vacante.id_vacante,
        tbl_vacante.vac_nombre";
        $usuariosactividades=$obj->consult($sql);

 
        //los que estan en la tabla relaccionados
        foreach($usuariosactividades as $usu){
        //   //evaluando que no este repetido
          for($i=0; $i<count($seleccionados);$i++){    //no esta impreso
              if($seleccionados[$i]==$usu["usu_id"] && $yaesta[$i]==0){
            //ya esta impreso
             $yaesta[$i]=1;
           echo"<tr>";
                                 echo"<td class='text-center'>".$usu['usu_nombre']."</td>";
                                 echo"<td class='text-center'>".$usu['usu_apellido']."</td>";
                                 echo"<td class='text-center'>".$usu['selec_nombre']."</td>";
                                 echo"<td class='text-center'>".$usu['SUM(hist_añosxp)']." años</td>";
                                 echo"<td class='text-center'>".$usu['usu_correo']."</td>";
                                 echo"<td class='text-center'><a  value='' name='usu_id' id='ModalInfoUsuario' data-url=".getUrl("Admin","Aspirante","ModalInfoUsuario",array("usu_id" => $usu['usu_id'],"id_vacante" => $usu['id_vacante']),"ajax")."><button  class='btn btn-dark btn-sm' title='Vista previa'><i class='fa fa-eye'></i></button></a></td>
              </tr>";
                                        
                }
            }    
        }    
    }

}

public function graficos(){
  $obj= new AspiranteVacantesModel();
  echo "<div class='col-md-6'>
  <div class='ct-chart ct-golden-section' id='chart1'></div>
</div>


<div class='col-md-6'>
  <div class='ct-chart ct-golden-section' id='chart2'></div>
</div>";
}

}
?>