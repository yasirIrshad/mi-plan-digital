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
            // require_once '../components/loader.php'
        ?>
        <!-- Loader End -->

        

        <!-- Start right Content here -->
        <div class="content-page" style="margin-left: 0!important;">

            <!-- Start content -->
            <div class="content" id="egresos">
                
                <!-- Page content Wrapper -->
                <div class="page-content-wrapper ">

                    <!-- container fluid End-->
                    <div class="container-fluid">

                        <div class="row" id="ingresos">
                            <div class="col-12 d-flex align-items-center justify-content-center" style="">
                                <div class="card col-md-12 col-xs-12 col-xs-12 m-b-30" style="margin: 0 auto;">
                                    <div class="card-body row d-flex justify-content-center">
                                        
                                        <div class="modal-header" style="padding: 1rem;">
                                            <div class="col-12 d-flex justify-content-center" style="padding: 0px;">
                                                <h5 class="modal-title" style="align-self: center; margin: 0px;">
                                                    <a href="javascript:void(0)" class="paddingLeft">GASTA</a>
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- Gasta -->

                                        <div class="modal-body row d-flex justify-content-center" style="padding: 1rem 0;">
                                            <div class="row col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center" style="padding-right: 0!important; padding-left: 0!important">

                                                <!------- Gastos mensuales total Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2 pt-2 pb-2" style="background: #ada9a980;">
                                                    <h6 class="ml-2">Gastos mensuales</h6>
                                                    <h6 class="mr-5">${{pagosMensuales.pagosMensualesTotal | addComma}}<small>/mes</small></h6>
                                                </div>
                                                <!------- Gastos mensuales total End ------->

                                                <!---------------- entretenimiento --------------->

                                                <!------- Entreteniniento Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="row ml-2">
                                                        <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X119.png">
                                                        <h6>Entreteniniento</h6>
                                                    </div>

                                                    <div class="row mr-5">
                                                        <h6>${{pagosMensuales.hogar.hogarTotal | addComma }}<small>/mes</small></h6>
                                                    </div>
                                                </div>
                                                <!------- Entreteniniento End ------->                    

                                                <!-- aplicaciones -->
                                                <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                    <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                        <p style="margin-bottom: 0">Aplicaciones</p>
                                                    </div>

                                                    <div class="row col-xs-8 d-flex align-items-center">
                                                        <!-- <input class="removeBorders text-center col-8" placeholder="/mes" type="number" v-model="hogar"> -->
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="number" class="form-control 
                                                                text-center col-md-6 col-xs-4 text-center" 
                                                                aria-label="Amount (to the nearest dollar)"
                                                                v-model="pagosMensuales.hogar.mercado"
                                                            >
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">/mes</span>
                                                            </div>
                                                        </div>
                                                    </div>                        
                                                </div>
                                                <!-- aplicaciones -->

                                                <!-- clases / hobbies -->
                                                <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                    <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                        <p style="margin-bottom: 0">Clases / Hobbies, membresías</p>
                                                    </div>

                                                    <div class="row col-xs-8 d-flex align-items-center">
                                                        <!-- <input class="removeBorders text-center col-8" placeholder="/mes" type="number" v-model="hogar"> -->
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="number" class="form-control 
                                                                text-center col-md-6 col-xs-4 text-center" 
                                                                aria-label="Amount (to the nearest dollar)"
                                                                v-model="pagosMensuales.hogar.mercado"
                                                            >
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">/mes</span>
                                                            </div>
                                                        </div>
                                                    </div>                        
                                                </div>
                                                <!-- clases / hobbies -->

                                                <!-- actividades sociales -->
                                                <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                    <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                        <p style="margin-bottom: 0">Actividades sociales</p>
                                                    </div>

                                                    <div class="row col-xs-8 d-flex align-items-center">
                                                        <!-- <input class="removeBorders text-center col-8" placeholder="/mes" type="number" v-model="hogar"> -->
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="number" class="form-control 
                                                                text-center col-md-6 col-xs-4 text-center" 
                                                                aria-label="Amount (to the nearest dollar)"
                                                                v-model="pagosMensuales.hogar.mercado"
                                                            >
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">/mes</span>
                                                            </div>
                                                        </div>
                                                    </div>                        
                                                </div>
                                                <!-- actividades sociales -->

                                                <!---------------- entretenimiento --------------->

                                                <!---------------- Internet y telefonia --------------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="row ml-2">
                                                        <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X119.png">
                                                        <h6>Internet y telefonía</h6>
                                                    </div>

                                                    <div class="row mr-5">
                                                        <h6>${{pagosMensuales.hogar.hogarTotal | addComma }}<small>/mes</small></h6>
                                                    </div>
                                                </div>
                                                <!-- Internet y telefonia -->                  

                                                <!-- Internet y telefonia --> 
                                                <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                    <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                        <p style="margin-bottom: 0">Internet y telefonía</p>
                                                    </div>

                                                    <div class="row col-xs-8 d-flex align-items-center">
                                                        <!-- <input class="removeBorders text-center col-8" placeholder="/mes" type="number" v-model="hogar"> -->
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="number" class="form-control 
                                                                text-center col-md-6 col-xs-4 text-center" 
                                                                aria-label="Amount (to the nearest dollar)"
                                                                v-model="pagosMensuales.hogar.mercado"
                                                            >
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">/mes</span>
                                                            </div>
                                                        </div>
                                                    </div>                        
                                                </div>
                                                <!-- Internet y telefonia --> 
                                                <!---------------- Internet y telefonia --------------->

                                                <!---------------- restaurantes --------------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="row ml-2">
                                                        <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X119.png">
                                                        <h6>Restaurantes</h6>
                                                    </div>

                                                    <div class="row mr-5">
                                                        <h6>${{pagosMensuales.hogar.hogarTotal | addComma }}<small>/mes</small></h6>
                                                    </div>
                                                </div>
                                                <!-- restaurantes -->                  

                                                <!-- restaurantes --> 
                                                <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                    <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                        <p style="margin-bottom: 0">Restaurantes</p>
                                                    </div>

                                                    <div class="row col-xs-8 d-flex align-items-center">
                                                        <!-- <input class="removeBorders text-center col-8" placeholder="/mes" type="number" v-model="hogar"> -->
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="number" class="form-control 
                                                                text-center col-md-6 col-xs-4 text-center" 
                                                                aria-label="Amount (to the nearest dollar)"
                                                                v-model="pagosMensuales.hogar.mercado"
                                                            >
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">/mes</span>
                                                            </div>
                                                        </div>
                                                    </div>                        
                                                </div>
                                                <!-- restaurantes --> 
                                                <!---------------- restaurantes --------------->

                                                <!---------------- Servicios de terceros --------------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="row ml-2">
                                                        <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X119.png">
                                                        <h6>Servicios de terceros</h6>
                                                    </div>

                                                    <div class="row mr-5">
                                                        <h6>${{pagosMensuales.hogar.hogarTotal | addComma }}<small>/mes</small></h6>
                                                    </div>
                                                </div>
                                                <!-- Servicios de terceros -->                  

                                                <!-- servicios de terceros --> 
                                                <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                    <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                        <p style="margin-bottom: 0">Servicios de terceros</p>
                                                    </div>

                                                    <div class="row col-xs-8 d-flex align-items-center">
                                                        <!-- <input class="removeBorders text-center col-8" placeholder="/mes" type="number" v-model="hogar"> -->
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="number" class="form-control 
                                                                text-center col-md-6 col-xs-4 text-center" 
                                                                aria-label="Amount (to the nearest dollar)"
                                                                v-model="pagosMensuales.hogar.mercado"
                                                            >
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">/mes</span>
                                                            </div>
                                                        </div>
                                                    </div>                        
                                                </div>
                                                <!-- servicios de terceros --> 
                                                <!---------------- Servicios de terceros --------------->



                                                <!------- Gastos anuales total Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2 pt-2 pb-2" style="background: #ada9a980;">
                                                    <h6 class="ml-2">Gastos anuales</h6>
                                                    <h6 class="mr-5">${{pagosMensuales.pagosMensualesTotal | addComma}}<small>/mes</small></h6>
                                                </div>
                                                <!------- Gastos anuales total End ------->


                                                <!---------------- Vestuario --------------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="row ml-2">
                                                        <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X119.png">
                                                        <h6>Vestuario</h6>
                                                    </div>

                                                    <div class="row mr-5">
                                                        <h6>${{pagosMensuales.hogar.hogarTotal | addComma }}<small>/mes</small></h6>
                                                    </div>
                                                </div>
                                                <!-- vestuario -->                  

                                                <!-- vestuario --> 
                                                <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                    <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                        <p style="margin-bottom: 0">Vestuario</p>
                                                    </div>

                                                    <div class="row col-xs-8 d-flex align-items-center">
                                                        <!-- <input class="removeBorders text-center col-8" placeholder="/mes" type="number" v-model="hogar"> -->
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="number" class="form-control 
                                                                text-center col-md-6 col-xs-4 text-center" 
                                                                aria-label="Amount (to the nearest dollar)"
                                                                v-model="pagosMensuales.hogar.mercado"
                                                            >
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">/mes</span>
                                                            </div>
                                                        </div>
                                                    </div>                        
                                                </div>
                                                <!-- vestuario --> 
                                                <!---------------- Vestuario --------------->


                                                <!---------------- Vacaciones --------------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="row ml-2">
                                                        <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X119.png">
                                                        <h6>Vacaciones</h6>
                                                    </div>

                                                    <div class="row mr-5">
                                                        <h6>${{pagosMensuales.hogar.hogarTotal | addComma }}<small>/mes</small></h6>
                                                    </div>
                                                </div>
                                                <!-- vacaciones -->                  

                                                <!-- vacaciones --> 
                                                <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                    <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                        <p style="margin-bottom: 0">Vacaciones</p>
                                                    </div>

                                                    <div class="row col-xs-8 d-flex align-items-center">
                                                        <!-- <input class="removeBorders text-center col-8" placeholder="/mes" type="number" v-model="hogar"> -->
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="number" class="form-control 
                                                                text-center col-md-6 col-xs-4 text-center" 
                                                                aria-label="Amount (to the nearest dollar)"
                                                                v-model="pagosMensuales.hogar.mercado"
                                                            >
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">/mes</span>
                                                            </div>
                                                        </div>
                                                    </div>                        
                                                </div>
                                                <!-- vacaciones --> 
                                                <!---------------- Vacaciones --------------->


                                                <!---------------- ArtÍculos personales --------------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="row ml-2">
                                                        <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X119.png">
                                                        <h6>ArtÍculos personales</h6>
                                                    </div>

                                                    <div class="row mr-5">
                                                        <h6>${{pagosMensuales.hogar.hogarTotal | addComma }}<small>/mes</small></h6>
                                                    </div>
                                                </div>
                                                <!-- artÍculos personales -->                  

                                                <!-- artÍculos personales --> 
                                                <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                    <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                        <p style="margin-bottom: 0">ArtÍculos personales</p>
                                                    </div>

                                                    <div class="row col-xs-8 d-flex align-items-center">
                                                        <!-- <input class="removeBorders text-center col-8" placeholder="/mes" type="number" v-model="hogar"> -->
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">$</span>
                                                            </div>
                                                            <input type="number" class="form-control 
                                                                text-center col-md-6 col-xs-4 text-center" 
                                                                aria-label="Amount (to the nearest dollar)"
                                                                v-model="pagosMensuales.hogar.mercado"
                                                            >
                                                            <div class="input-group-append">
                                                                <span class="input-group-text">/mes</span>
                                                            </div>
                                                        </div>
                                                    </div>                        
                                                </div>
                                                <!-- artÍculos personales --> 
                                                <!---------------- ArtÍculos personales --------------->

                                            </div>
                                        </div>
                                        <!-- Cuota deudas End -->

                                        <div class="row col-12 mt-2 d-flex justify-content-center">
                                            <a href="resultados.php">
                                                <button class="btn btn-primary" 
                                                    style="font-family: Open Sans; font-size: 13px;"
                                                >
                                                    Continuar
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

            

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper --> 
    

    <!-- Vue js cdn -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <!-- Scripts Start -->
    <?php
        // require_once '../components/scripts.php'
    ?>
    <!-- Scripts End -->

    <script src="../assets/js/egresos.js"></script>

</body>

</html>