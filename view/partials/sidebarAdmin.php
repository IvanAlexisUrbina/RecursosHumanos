<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="indexAdmin.php" class="site_title"><img src="images/Gers.png" data-estado="1" style="margin-left:15px;" width="100px" alt="logazo" id="logo"></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
        <img src="images/administrador.png" alt="..." class="img-circle profile_img">
        </div >
        <div class="profile_info">
        <span class="">BIENVENIDO/A</span>
        <span class="">GERS S.A.S</span><br>
        <span><?php echo $_SESSION['nameUser'];?></span>
        <h2></h2>
        </div>
    </div>
    <!-- /menu profile quick info -->

    <br />
    
    <!-- sidebar menu -->
    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
        <div class="menu_section">
        <h3>LISTA DE OFERTA LABORAL</h3>
        <ul class="nav side-menu">
            <li><a href="indexAdmin.php"><i class="fa fa-home"></i>Inicio </a>
            
            </li>
            <?php
            if($_SESSION['rolId']==1){

            
            ?>
             <li><a href="<?php echo getUrl("Admin","Aspirante","bandejaentrada");?>"><i class="fa fa-bell"></i>Aplicaciones</a></li>
            <li><a><i class="fa fa-group"></i>Vacantes<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="<?php echo getUrl("Admin","Formulario","create");?>">Generar vacantes</a></li>
                <li><li><a href="<?php echo getUrl("Admin","Formulario","consult");?>">Vacantes Generadas</a></li>   
            </ul>
            </li>
            <li><a><i class="fa fa-search"></i>Gestión de aspirantes<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
            
            <li>
            <li><a data-url="<?php echo getUrl("Admin","Aspirante","graficos",false,"ajax");?>" href="<?php echo getUrl("Admin","Aspirante","listado");?>">Listado</a></li>
            </ul>
            </li>
            <li><a><i class="fa fa-user"></i>Seleccionados<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="<?php echo getUrl("Admin","Aspirante","entrevistas");?>">Entrevistas pendientes</a></li>
                <li><a href="<?php echo getUrl("Admin","Aspirante","seleccionados");?>">Seleccionados</a></li>    
            </ul>
            </li>
        </ul>
        <?php
            }else{
                redirect("indexUsu.php");
            }
        ?>
        </div>
       </div>
    </div>
   
</div>