<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="indexUsu.php" class="site_title"><img src="images/Gers.png" data-estado="1" style="margin-left:15px;" width="100px" alt="logazo" id="logo"></a>
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
            <li><a href="indexUsu.php"><i class="fa fa-home"></i>Inicio </a>
            
            </li>
            <li><a><i class="fa fa-group"></i>Ofertas<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="<?php echo getUrl("Usuario","Ofertas","consult");?>">Ver vacantes</a></li>
            </ul>
            </li>
            
            <ul class="nav child_menu">
            <li><a href="<?php echo getUrl("Usuario","Ofertas","crear");?>">Aplicar</a></li>   
            </ul>
            </li>

            </li>
            <li><a><i class="fa fa-send"></i>Perfil<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="<?php echo getUrl("Usuario","Ofertas","documento");?>">Documentos de soporte</a></li>
            </ul>
            </li>

            </li>
            <li><a><i class="fa fa-user"></i>Información personal<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="<?php echo getUrl("Usuario","Ofertas","consultaregistro");?>">Datos personales</a></li>
                <li><a href="<?php echo getUrl("Usuario","Ofertas","idiomas");?>">Idiomas</a></li>
                <li><a href="<?php echo getUrl("Usuario","Ofertas","consultusu");?>">Formación</a></li>
                <li><a href="<?php echo getUrl("Usuario","Ofertas","experiencia");?>">Experiencia laboral</a></li>
            </ul>
            </li>
            <li><a><i class="fa fa-folder"></i>Aplicaciones<span class="fa fa-chevron-down"></span></a>
            <ul class="nav child_menu">
                <li><a href="<?php echo getUrl("Usuario","Ofertas","consulestado");?>">Consultar mis aplicaciones</a></li>
            
        </ul>
        </div>
       </div>
    </div>
</div>