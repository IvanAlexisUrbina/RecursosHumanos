<?php 
if($_SESSION['rolId']==1){
?>

<nav class="navbar navbar-dark navbar-expand-sm" style="background-color:#181864;">
                <a class="navbar-brand" href="#">
                    Formación registrada
                </a>
            </nav>
            <!--AQUI ESTA EL CONTEDEDOR DE TODA LA FORMACION QUE VAYA  MOSTRAR-->
            <div class="divcontenedores">
                <?php
                if ($row==0){ 
                    echo "<h3 class='col-md-12'>NO HAY INFORMACION REGISTRADA</h3>";
                }else{
               foreach($ejecutar as $form){ ?>
                <div class="x_content col-md-12" style="border-top:1px solid black;display:flex;padding:5px 5px 5px 12px;">
                <form enctype="multipart/form-data">
                    <div class="row justify-content-start">
                        <div class="col-md-6">
                            <label class="titulos_negrita">Titulo obtenido<span style="color:red">*</span></label>
                            <input  type="text" value="<?php echo $form["form_tituloname"]?>" readonly
                                class="estiloinput form-control oferta">
                        </div>
                        <div class="col-md-6">
                            <label class="titulos_negrita">Fecha graduación<span style="color:red">*</span></label>
                            <input type="text" readonly value="<?php echo $form["form_fecha_fin"]?>"
                                placeholder="Ejm: ingles, frances..." class="estiloinput form-control oferta">
                        </div>
                        <div class="col-md-6">
                            <label class="titulos_negrita">Nivel de educación<span style="color:red">*</span></label>
                            <input type="text" readonly value="<?php echo $form["form_nivel_de_educacion"]?>"
                                id="" class="estiloinput form-control oferta" readonly>
                        </div>
                        <div class="col-md-6">
                            <label class="titulos_negrita">Nombre de la institución o universidad<span style="color:red">*</span></label>
                            <input type="text" value="<?php echo $form["form_nombre"]?>" readonly
                                class="estiloinput form-control oferta">
                        </div>
                        <div class="col-md-6">
                            <label class="titulos_negrita">Conocimientos o habilidades<span style="color:red">*</span></label>
                            <input readonly value="<?php echo $form["form_conocimientos"]?>" type="text"
                                class="estiloinput form-control oferta">
                        </div>

                       
                        
                        <div class="col-md-6">
                           <div></div>
                            <a id='consultarcertificado' type='button'
                                data-url="<?php echo getUrl("Usuario","Ofertas","consultarcertificado",array("id_formacion" => $form['id_formacion']),"ajax")?>"
                            class='btn btn-primary radios'><i class='fa fa-file'></i></a>
                        </div>

                        <div class="col-md-6"></div>
                        <div class="col-md-6"></div>
                        <div class="col-md-6">
                            <br>
                            <div class="col-md-6">
                            </div>
                        </div>
                    </div>
                    </div>
                    <?php
    }
}
                ?>
            </div>
            <?php
}else{
    redirect("indexUsu.php");
}
?>