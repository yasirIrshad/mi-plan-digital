<!DOCTYPE html>
<html lang="en">
<!--  Test -->

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
        <div class="content-page">

            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <?php
                    require_once '../components/navbar.php'
                ?>
                <!-- Top Bar End -->

                <!-- Page content Wrapper -->
                <div class="page-content-wrapper ">

                    <!-- container fluid End-->
                    <div class="container-fluid">
                        <!-- page title Start-->
                        <div class="row col-12">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="row align-items-center justify-content-between">
                                        <!-- <div class="col-md-8"> -->
                                            <h4 class="page-title m-0">page title</h4>
                                        <!-- </div> -->

                                        <!-- editar datos start -->
                                        <?php
                                            require_once '../components/editar_datos.php'
                                        ?>
                                        <!-- editar datos end -->

                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                <!-- end page-title-box -->
                            </div>
                        </div> 
                        <!-- page title End-->

                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center" style="height: 70vh">
                                <div class="card col-md-6 col-xs-12 col-xs-12 m-b-30" 
                                    style="margin: 0 auto; max-width:630px; min-width: 379px"
                                >
                                    <div class="card-body">                                        

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


    <!-- Scripts Start -->
    <?php
        require_once '../components/scripts.php'
    ?>
    <!-- Scripts End -->

   

    

    

    

</body>

</html>
