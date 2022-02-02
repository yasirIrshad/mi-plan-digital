<!DOCTYPE html>
<html lang="en">

<?php
    require_once '../components/head.php'
?>

<body class="fixed-left">
    
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Loader Start -->
        <?php
            require_once '../components/loader.php'
        ?> 
        <!-- Loader End -->

        <!-- Left Sidebar Start -->
        <?php
            require_once '../components/sidebar.php'
        ?>
        <!-- Left Sidebar End -->

        <!-- Start right Content here -->
        <div class="content-page" style="margin-left: 0!important; background: white;">

            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <?php
                    require_once '../components/navbar.php'
                ?>
                <!-- Top Bar End -->

                <!-- Page content Wrapper -->
                <div class="page-content-wrapper" id="presupuesto">

                    <!-- container fluid End-->
                    <div class="container-fluid">
                        <!-- page title Start-->
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
                        <!-- page title End-->
                    </div>
                    <!-- container fluid End-->

                </div>
                <!-- Page content Wrapper -->
                

            </div>
            <!-- content end -->

            <!-- Footer Start -->
            <?php
                require_once '../components/footer.php'
            ?>
            <!-- Footer End -->

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->

    <?php
        require_once '../components/bot.php'
    ?>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <!-- Scripts Start -->
    <?php
        require_once '../components/scripts.php'
    ?>
    <!-- Scripts End -->

    <!-- Loader Start -->
    <?php
        require_once '../components/loader.php'
    ?> 
    <!-- Loader End -->

    

</body>

</html>


<script src="../assets/js/perfiles.js"></script>
<script src="../assets/js/presupuesto.js"></script>