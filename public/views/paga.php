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
                                        
                                    <div class="modal-header">
                                        <div class="col-11 d-flex justify-content-center row pl-5">
                                            <div class="row pl-2 d-flex justify-content-center">
                                                <h5 class="modal-title" style="align-self: center;">
                                                    <a class="paddingLeft" href="javascript:void(0)">PAGA</a>
                                                </h5>
                                            </div>
                            
                                        </div>
                                    </div>

                                    <div class="modal-body row d-flex justify-content-center" style="padding: 1rem 0 0 0;">

                                        <div class="row col-md-12 col-sm-12 col-xs-12 d-flex justify-content-center" style="padding-right: 0!important; padding-left: 0!important">
                                            
                                            <!-- pagos mensuales -->

                                            <!------- Pagos mensuales total Start ------->
                                            <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2 pt-2 pb-2" style="background: #ada9a980;">
                                                <h6 class="ml-2">Pagos mensuales</h6>
                                                <h6 class="mr-5">${{pagosMensuales.pagosMensualesTotal | addComma}}<small>/mes</small></h6>
                                            </div>
                                            <!------- Pagos mensuales total End ------->
                                            
                                            <!------- Hogar total Start ------->
                                            <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                <div class="row ml-2">
                                                    <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X119.png">
                                                    <h6>Hogar</h6>
                                                </div>

                                                <div class="row mr-5">
                                                    <h6>${{pagosMensuales.hogar.hogarTotal | addComma }}<small>/mes</small></h6>
                                                </div>
                                            </div>
                                            <!------- Hogar total End ------->                    

                                            <!-- mercado -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Mercado</p>
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
                                            <!-- mercado -->

                                            <!-- alquiler -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Alquiler</p>
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
                                                            v-model="pagosMensuales.hogar.alquiler"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/mes</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- alquiler -->

                                            <!-- transporte combustible -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Transporte combustible</p>
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
                                                            v-model="pagosMensuales.hogar.transporteCombustible"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/mes</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- transporte combustible -->

                                            <!-- trasnporte publico -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Transporte publico</p>
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
                                                            v-model="pagosMensuales.hogar.transportePublico"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/mes</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- trasnporte publico -->

                                            <!-- transporte escolar -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Transporte escolar</p>
                                                </div>

                                                <div class="row col-xs-8 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="number" class="form-control 
                                                            text-center col-md-6 col-xs-4 text-center" 
                                                            aria-label="Amount (to the nearest dollar)"
                                                            v-model="pagosMensuales.hogar.transporteEscolar"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/mes</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- transporte escolar -->

                                            <!-- servicios publicos -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Servicios publicos</p>
                                                </div>

                                                <div class="row col-xs-8 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="number" class="form-control 
                                                            text-center col-md-6 col-xs-4 text-center" 
                                                            aria-label="Amount (to the nearest dollar)"
                                                            v-model="pagosMensuales.hogar.serviciosPublicos"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/mes</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- servicios publicos -->

                                            <!-- mantenimiento casa -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Mantenimiento casa</p>
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
                                                            v-model="pagosMensuales.hogar.mantenimientoCasa"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/mes</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- mantenimiento casa -->

                                            <!-- cuidado infantil -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Cuidado Ingantil</p>
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
                                                            v-model="pagosMensuales.hogar.cuidadoInfantil"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/mes</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- cuidado infantil -->               
                                            
                                            <hr class="row col-12">

                                            <!-- Salud total Start -->
                                            <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                <div class="row ml-2">
                                                    <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X29.png">
                                                    <h6>Salud</h6>
                                                </div>

                                                <div class="row mr-5">
                                                    <h6>{{pagosMensuales.salud.saludTotal | addComma}}<small>/mes</small></h6>
                                                </div>
                                            </div>
                                            <!-- Salud total End -->
                                            
                                            <!-- salud -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between mb-3">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Salud</p>
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
                                                            v-model="pagosMensuales.salud.seguroSalud"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/mes</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- salud -->

                                            <!------------------- Pagos mensuales End -------------------->

                                            <!------------------- Pagos anuales Start -------------------->
                                            <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2 pt-2 pb-2" style="background: #ada9a980;">
                                                <h6 class="ml-2">Pagos anuales</h6>
                                                <h6 class="mr-5">${{pagosAnuales.pagosAnualesTotal}}<small>/anual</small></h6>
                                            </div>
                                            
                                            <!-- hogar total anual -->
                                            <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                <div class="row ml-2">
                                                    <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X119.png">
                                                    <h6>Hogar</h6>
                                                </div>

                                                <div class="row mr-5">
                                                    <h6>${{pagosAnuales.hogar.hogarTotal | addComma}}<small>/anual</small></h6>
                                                </div>
                                            </div>
                                            <!-- hogar total anual -->

                                            <!-- seguro vivienda anual -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Seguro de vivienda</p>
                                                </div>

                                                <div class="row col-xs-8 d-flex align-items-center">
                                                    <!-- <input class="removeBorders text-center col-8" placeholder="/mes" type="number" v-model="hogar"> -->
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="text" class="form-control 
                                                            text-center col-md-6 col-xs-4 text-center" 
                                                            aria-label="Amount (to the nearest dollar)"
                                                            v-model="pagosAnuales.hogar.seguro.vivienda"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/anual</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- seguro vivienda anual -->

                                            <!-- seguro viehiculo y marbete anual -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Seguro de vehi. y marbete</p>
                                                </div>

                                                <div class="row col-xs-8 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="number" class="form-control 
                                                            text-center col-md-6 col-xs-4 text-center" 
                                                            aria-label="Amount (to the nearest dollar)"
                                                            v-model="pagosAnuales.hogar.seguro.vehiculoMarbete"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/anual</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- seguro viehiculo y marbete anual -->

                                            <!-- seguro viehiculo y marbete anual -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Mantenimiento Vehiculo</p>
                                                </div>

                                                <div class="row col-xs-8 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="number" class="form-control 
                                                            text-center col-md-6 col-xs-4 text-center" 
                                                            aria-label="Amount (to the nearest dollar)"
                                                            v-model="pagosAnuales.hogar.mantenimientoVehiculo"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/anual</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- seguro viehiculo y marbete anual -->

                                            <!-- Educacion total Start -->
                                            <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                <div class="row ml-2">
                                                    <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X29.png">
                                                    <h6>Educación</h6>
                                                </div>

                                                <div class="row mr-5">
                                                    <h6>{{pagosAnuales.educacion.educacionTotal | addComma}}<small>/anual</small></h6>
                                                </div>
                                            </div>
                                            <!-- Educacion total End -->

                                            <!-- matricula anual -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Matricula Anual</p>
                                                </div>

                                                <div class="row col-xs-8 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="number" class="form-control 
                                                            text-center col-md-6 col-xs-4 text-center" 
                                                            aria-label="Amount (to the nearest dollar)"
                                                            v-model="pagosAnuales.educacion.matriculaAnual"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/anual</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- matricula anual -->

                                            <!-- colegiatura hijos -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Colegiatura hijos</p>
                                                </div>

                                                <div class="row col-xs-8 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="number" class="form-control 
                                                            text-center col-md-6 col-xs-4 text-center" 
                                                            aria-label="Amount (to the nearest dollar)"
                                                            v-model="pagosAnuales.educacion.colegiaturaHijos"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/anual</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- colegiatura hijos -->

                                            <!-- textos y uniformes -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Textos uniformes</p>
                                                </div>

                                                <div class="row col-xs-8 d-flex align-items-center">
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <span class="input-group-text">$</span>
                                                        </div>
                                                        <input type="number" class="form-control 
                                                            text-center col-md-6 col-xs-4 text-center" 
                                                            aria-label="Amount (to the nearest dollar)"
                                                            v-model="pagosAnuales.educacion.textosUniformes"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/anual</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- textos y uniformes -->

                                            <!-- Educacion Personal -->
                                            <div class="row col-md-12 col-xs-12 ml-5 d-flex justify-content-between">
                                                <div class="ml-2 col-xs-4 row d-flex align-items-center">
                                                    <p style="margin-bottom: 0">Educación Personal</p>
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
                                                            v-model="pagosAnuales.educacion.educacionPersonal"
                                                        >
                                                        <div class="input-group-append">
                                                            <span class="input-group-text">/anual</span>
                                                        </div>
                                                    </div>
                                                </div>                        
                                            </div>
                                            <!-- Educacion Personal -->

                                            <!------------------- Pagos anuales End -------------------->
                                        </div>                   

                                    </div>
                                    <!-- Paga End -->
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