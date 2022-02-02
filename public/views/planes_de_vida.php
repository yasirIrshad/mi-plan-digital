<!DOCTYPE html>
<html lang="en">
<?php
    require_once '../components/head.php';
?>

<body class="fixed-left">
    

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Loader Start -->
        <?php
            require_once '../components/loader.php'
        ?>
        <!-- Loader End -->

        

        <!-- Start right Content here -->
        <div class="content-page" style="margin-left: 0!important;">

            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <div class="topbar-left d-lg-block">
                        <div class="text-center">
                            <a href="index.html" class="logo"><img src="../assets/images/X86.png" height="35" alt="logo"></a>
                        </div>
                    </div>

                    <nav class="navbar-custom">

                        <!-- Search input -->
                        <div class="search-wrap" id="search-wrap">
                            <div class="search-bar">
                                <input class="search-input" type="search" placeholder="Search" />
                                <a href="#" class="close-search toggle-search" data-target="#search-wrap">
                                    <i class="mdi mdi-close-circle"></i>
                                </a>
                            </div>
                        </div>

                        <ul class="list-inline float-right mb-0">

                            <li class="list-inline-item dropdown notification-list nav-user">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                    <img src="../assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                    <span class="d-none d-md-inline-block ml-1">David M. Bailey <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div id="appLogout" class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <a class="dropdown-item" id="showAccountCard" href="#">
                                        <i class="dripicons-user text-muted"></i> 
                                        Mi cuenta
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" v-on:click="logOut"><i class="dripicons-exit text-muted"></i> Cerrar sessión</a>
                                </div>
                            </li>
                            <!--------------------------- card mi cuenta Start ---------------------->
                            <?php
                                require_once '../components/mi_cuenta.php'
                            ?>
                            <!--------------------------- card mi cuenta End ---------------------->
                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item">
                                <button type="button" style="opacity: 0;" class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                        </ul>

                    </nav>

                </div>

                <!-- avatar modal Start -->
                <?php
                    require_once '../components/avatar_modal.php'
                ?>
                <!-- avatar modal End --> 

                <!-- Top Bar End -->

                <!-- Page content Wrapper -->
                <div class="page-content-wrapper ">

                    <!-- container fluid End-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center" style="height: 81vh">
                                <div class="card col-md-6 col-xs-12 col-xs-12 m-b-30" style="margin: 0 auto; max-width:630px; min-width: 379px">
                                    <div class="card-body">

                                        <div class="row col-12">
                                            <h3 class="m-l-7" style="font-size: 16px;">
                                                Planes de vida
                                            </h3>
                                        </div>

                                        <div style="margin: 0 auto; padding: 0;" class="row col-md-12 mt-2 d-flex justify-content-between">
                                            <div class="col-4 col-xs-12 d-flex justify-content-center">
                                                <img style="height: 150px" src="../assets/images/X56.png" alt="Prenguntale al bot">
                                            </div>
                                            <div class="col-8 col-xs-12">
                                                <p class="mb-2 row col-12 text-muted" style="font-size: 13px;  padding-right: 0;">
                                                    Llegó la hora de que nos cuentes de tus planes a futuro.
                                                </p>
                                                <p class="row col-12" style="color: #707070; font-size: 13px; padding-right: 0;">
                                                    Ya sea que tus planes sean hacer un posgrado, la educación de tus hijos, comprar una casa ó asegurar una jubilación económicamente tranquila; en esta sección los podrás definir para incorporarlos a tus finanzas y así poder cumplirlos. Esto sólo tomará una cuantas preguntas.
                                                </p>
                                                <p class="row col-12" style="color: #707070; font-size: 13px; padding-right: 0;">
                                                    Si después quieres cambiar o incluir algún plan, no te preocupes, podrás hacerlo en los tableros de control. 
                                                </p>

                                            </div>
                                        </div>
                                        
                                        <div class="row col-12 mt-2 d-flex justify-content-center">
                                            <a href="resultados.php">
                                                <button class="btn btn-primary" 
                                                    style="font-family: Open Sans; font-size: 13px;"
                                                >
                                                    Empecemos
                                                </button>
                                            </a>                                            
                                        </div>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                    </div>
                    <!-- container fluid End-->

                </div>
                <!-- Page content Wrapper -->

            </div>
            <!-- content end -->

            <!-- Footer Start -->
            <footer class="footer col-12" style="left: 0;">
                © 2019 - 2020 Zinzer <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
            </footer>
            <!-- Footer End -->

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper --> 

    <!-- Vue js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <!-- Scripts Start -->
    <?php
        require_once '../components/scripts.php'
    ?>
    <!-- Scripts End -->
    

</body>

</html>