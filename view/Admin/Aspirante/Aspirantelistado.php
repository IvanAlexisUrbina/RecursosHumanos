<?php 
if($_SESSION['rolId']==1){
?>
<div class=" col-md-12 col-sm-12 ">
    <div class="x_title" class="">
        <small class="xc_color">ASPIRANTES REGISTRADOS <br>
    </div>
    <div class="  x_panel">
        <div class="  x_title">
            <ul class=" nav navbar-right panel_toolbox">
                <li>


                </li>
            </ul>
           
        </div>
        <div class="col-md-12">
        </div>
        <div class="   x_content">

            <div class="x_panel">

                <div class="col-md-6">
                    <label for="">Reporte</label><br>
                    <a onclick="window.open('<?= getUrl('Excel','Excel', 'postExcel')?>')"
                        class='btn btn-success btn-sm' id="" title='Exportar informacion'><i
                            class='fa fa-file-excel-o'></i></a><small>Aquí generas un reporte en excel de todos los
                        usuarios que se han inscrito*</small>
                </div>
                <label for="">Graficos</label><br>
                <div id="contenedorgraficos" class="col-md-12 eo row justify-content-start">

                 

                </div>
            </div>
            <div class="  row">
                <div class="  col-sm-12">

                    <div class="  card-box table-responsive">

                        <table id="data" class="table table-striped table-hover" style="width:100%">
                            <thead style="background-color: #00113d; color:#fff;">
                                <tr>
                                    <th class='text-center '>ID</th>
                                    <th class='text-center'>Nombre/s</th>
                                    <th class='text-center'>Apellido/s</th>
                                    <th id="" class='text-center'>Correo</th>
                                    <th id="" class='text-center'>Teléfono</th>
                                    <th id="" class='text-center'>Estado</th>
                                    <th id="" class='text-center'>Vacante</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                foreach($listado as $lis){     
                                echo "<tr>";
                                echo"<td class='text-center'>"."ASP_".$lis['usu_id']."</td>";
                                echo"<td class='text-center'>".$lis['usu_nombre']."</td>";
                                echo"<td class='text-center'>".$lis['usu_apellido']."</td>";
                                echo"<td class='text-center'>".$lis['usu_correo']."</td>";
                                echo"<td class='text-center'>".$lis['usu_telefono']."</td>";
                                echo"<td class='text-center'>".$lis['selec_nombre']."</td>";
                                echo"<td class='text-center'>".$lis['vac_nombre']."</td>";
                                echo "</tr>";                                
                            }
                                ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<input id="grafico" type="hidden" data-url="<?php echo getUrl("Admin","Aspirante","Graficos",false,"ajax");?>">


<input id="listado" type="hidden" value="<?php echo $suma?>">
<input id="aplicado" type="hidden" value="<?php echo $aplicado?>">
<input id="noaplicado" type="hidden" value="<?php echo $noaplicados?>">



<script>
    function load() {
        var url = $("#grafico").attr("data-url");
        var listado=$("#listado").val();
        $.ajax({
            url: url,
            type: "POST",
            success: function(datos) {
                console.log(datos);
            $("#contenedorgraficos").html(`${datos}`);
                 // Initialize a Line chart in the container with the ID chart1
     new Chartist.Line('#chart1', {
            labels: [1, 2, 3, 4],
            series: [
                [100, 120, 180, 200]
            ]
        });

        // Initialize a Line chart in the container with the ID chart2
        new Chartist.Bar('#chart2', {
            labels: ["Usuarios", 2, 3],
            series: [
                [5, 2, listado]
            ]
        });
            }
        });
         
    
    }
    window.onload = load;
</script>
<?php
}else{
    redirect("indexUsu.php");
}
?>