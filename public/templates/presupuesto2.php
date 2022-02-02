<!DOCTYPE html>
<html lang="en">
<?php
    require_once '../components/head.php';
?>

<body class="fixed-left" >
    

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Loader Start -->
        <?php
            require_once '../components/loader.php'
        ?>
        <!-- Loader End -->

        

        <!-- Start right Content here -->
        <div class="content-page" id="presupuesto" style="margin-left: 0!important; background: white;">

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

                        <div class="row pageHeight" >
                            <div class="col-12 d-flex align-items-center justify-content-center" >
                                <div class="col-md-8 col-xs-12 col-xs-12">
                            
                                    <div class="row d-flex justify-content-center">
                                        <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center">
                                            <h1 class="">Bienvenido a tu <span style="color: #1ca7a6;">presupuesto</span></h1>
                                            <p>Sabemos que hacer un presupuesto consume mucho de tu tiempo y esfuerzo; es por eso que quisimos hacertelo sencillo. </p>
                                            <p>Solo cuentanos la periodicidad de tus gastos anuales y tu presupuesto estará listo.</p>
                                            <p>Lo mejor es que todo esta entrelazado con tu presupuesto: tus planes de vida, tu ahorro, tus obligaciones y los consejos para mejorar tus indicadores financieros.</p>
                                            <div class="form-group col-12 row mt-5">
                                                <div class="justify-content-start col-md-4 col-xs-12" style="padding: 0;">
                                                    <a href="./presupuesto3.php">
                                                        <button class="btn btn-primary btn-block waves-effect waves-light" style="background: #1ca7a6; padding: 10px 0; border-radius: 5px" @click="isLoading = true">
                                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" v-if="isLoading"></span>
                                                            {{ isLoading ? 'Cargando...' : 'Empecemos' }}
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center">
                                            <img src="../assets/images/X112.png" height="300px"  alt="home image">
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


    <!-- Scripts Start -->
    <?php
        require_once '../components/scripts.php'
    ?>
    <!-- Scripts End -->

    <?php
        require_once '../components/bot.php'
    ?>

    <script src="../assets/js/presupuesto.js"></script>
    

</body>

</html>