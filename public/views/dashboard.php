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
                        <div class="row mainheding">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <div class="row align-items-center justify-content-between">
                                        <!-- <div class="col-md-8"> -->
                                            <h4 class="page-title m-0">RESUMEN</h4>
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


                        <div class="row ministatss">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary mini-stat text-white">
                                    <div class="p-3 mini-stat-desc">
                                        <div class="clearfix">
                                            <h6 class="text-uppercase mt-0 float-left text-white-50">INGRESO NETO ANUAL</h6>
                                            <h4 class="mb-3 mt-0 float-right">$2.4 MM</h4>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="float-right">
                                            <a href="#"><img src="https://img.icons8.com/windows/24/EBEFF2/receive-cash.png"/></a>
                                        </div>
                                        <p class="font-14 m-0">Actualizado: 05/01/21</p>
                                    </div>
                                </div>
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-info mini-stat text-white">
                                    <div class="p-3 mini-stat-desc">
                                        <div class="clearfix">
                                            <h6 class="text-uppercase mt-0 float-left text-white-50">EGRESO ANUAL</h6>
                                            <h4 class="mb-3 mt-0 float-right">$1.8 MM</h4>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="float-right">
                                            <a href="#"><img src="https://img.icons8.com/windows/24/EBEFF2/card-in-use.png"/></a>
                                        </div>
                                        <p class="font-14 m-0">Actualizado: 05/01/21</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-pink mini-stat text-white">
                                    <div class="p-3 mini-stat-desc">
                                        <div class="clearfix">
                                            <h6 class="text-uppercase mt-0 float-left text-white-50">ACTIVOS</h6>
                                            <h4 class="mb-3 mt-0 float-right">$21.8 MM</h4>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="float-right">
                                            <a href="#"><img src="https://img.icons8.com/windows/24/EBEFF2/wallet.png"/></a>
                                        </div>
                                        <p class="font-14 m-0">Actualizado: 05/01/21</p>
                                    </div>
                                </div>
                            </div><!-- end col -->
        
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success mini-stat text-white">
                                    <div class="p-3 mini-stat-desc">
                                        <div class="clearfix">
                                            <h6 class="text-uppercase mt-0 float-left text-white-50">DEUDAS</h6>
                                            <h4 class="mb-3 mt-0 float-right">$7.5 MM</h4>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="float-right">
                                            <a href="#"><img src="https://img.icons8.com/windows/24/EBEFF2/debt.png"/></a>
                                        </div>
                                        <p class="font-14 m-0">Actualizado: 05/01/21</p>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <div class="row chartmain">
                                <div class="col-12">
                                    <div class="card m-b-30 bg-transparent">
                                        <div class="card-body">
            
                                            <div class="row text-center">
                                                <h3>INDICADORES DE SALUD FINANCIERA</h3>
                                                <div class="col-lg-4">
                                                    <h4>AHORRO</h4>
                                                    <div class="chartbox">
                                                        <input class="ahorro_actual" data-min="0" data-thickness=.1 data-width="100" data-fgcolor="#e66793" data-step="1" data-displayprevious="true" value="5">
                                                        <div class="mincontent">
                                                            <h5>Ahorro Actual</h5>
                                                            <span>5% de tu ingreso actual es Ahorro</span>
                                                        </div>
                                                    </div>
                                                    <div class="chartbox">
                                                        <input class="pago_deudas" data-min="0" data-thickness=.1 data-width="100"  data-fgcolor="#46cd93" data-step="1" data-displayprevious="true" value="15">
                                                        <div class="mincontent">
                                                            <h5>Pago deudas</h5>
                                                            <span>15% de tu ingreso se destina a cuotas de deudas</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h4>DEUDAS</h4>
                                                    <div class="chartbox">
                                                        <input class="activos_generando_ingreso" data-thickness=.1 data-width="100" data-fgcolor="#46cd93"  data-min="0" data-max="100"  value="15">
                                                        <div class="mincontent">
                                                            <h5>Activos generando ingreso</h5>
                                                            <span>15% de tus activos generan ingreso pasivo</span>
                                                        </div>
                                                    </div>
                                                    <div class="chartbox">
                                                         <input class="fondo_de_emergencia" data-thickness=.1 data-width="100" data-min="-15000" data-displayprevious="true" data-max="15000" data-step="1000" value="500" data-fgcolor="#e66793" style="font-size: 15px !important;">
                                                         <div class="mincontent">
                                                            <h5>Fondo de emergencia</h5>
                                                            <span>$500 mil equivalen a 7 mes(es) de gastos</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <h4>PATRIMONIO</h4>
                                                    <div class="chartbox">
                                                        <input class="endeudamiento" data-thickness=.1 data-width="100" data-displayprevious="true" data-fgcolor="#46cd93" value="60">
                                                        <div class="mincontent">
                                                            <h5>Endeudamiento</h5>
                                                            <span>Financias 60% de tus activos con deuda</span>
                                                        </div>
                                                    </div>
                                                    <div class="chartbox">
                                                        <!-- <input class="patrimonio_objetivo" data-thickness=.1 data-width="100" data-min="-15000" data-displayprevious="true" data-max="15000" data-step="1000" value="25.4" data-fgcolor="#e66793"> -->
                                                        <input class="patrimonio_objetivo" data-thickness=.1 data-width="100" data-min="-15000" data-max="15000" data-displayprevious="true" data-step="1" value="25.4" data-fgcolor="#e66793">
                                                        <div class="mincontent">
                                                            <h5>Patrimonio Objetivo</h5>
                                                            <span>$25.4 MM es tu patrimonio y $50 MM es tu objetivo</span>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->


                            <div class="row progressmain">
                                <div class="col-lg-4">
                                    <div class="mincontent">
                                        <h4>PLANES DE VIDA</h4>
                                        <h6>% de Cumplimiento</h6>
                                    </div>
                                    <div class="box">
                                        <div class="alert alert-warning" role="alert">
                                            Alerta! Revisa la sección Mis planes de vida para intentar cumplir el 100%.
                                        </div>

                                        <span>Total Planes</span>
                                        <div class="progress">
                                            <div class="progress-bar first" role="progressbar" style="width: 85%;" aria-valuenow="0.85" aria-valuemin="0" aria-valuemax="100">0.85</div>
                                        </div>

                                        <span>Plan Educación</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="0.9" aria-valuemin="0" aria-valuemax="100">0.9</div>
                                        </div>

                                        <span>Plan Vehículo</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 75%;" aria-valuenow="0.75" aria-valuemin="0" aria-valuemax="100">0.75</div>
                                        </div>

                                        <span>Plan Casa</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="0.8" aria-valuemin="0" aria-valuemax="100">0.8</div>
                                        </div>

                                        <span>Plan Retiro</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 60%;" aria-valuenow="0.6" aria-valuemin="0" aria-valuemax="100">0.6</div>
                                        </div>

                                        <span>Plan Otro</span>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 80%;" aria-valuenow="0.8" aria-valuemin="0" aria-valuemax="100">0.8</div>
                                        </div>
                                    </div>
                                </div>
            
                                <div class="col-lg-8">
                                    <div class="mincontent">
                                        <h4>PRESUPUESTO INGRESOS Y EGRESOS</h4>
                                        <h6>Mensual</h6>
                                    </div>

                                    <div class="full">
                                        <div id="morris-bar-example" class="morris-chart" style="height: 500px"></div>

                                        <div class="elemen">
                                            <div class="top">
                                                <label>Ingresos</label>
                                                <label>Egresos</label>
                                            </div>
                                            <div class="mid">
                                                <h5>Diligencia tu presupuesto</h5>
                                                <p>Aun no tienes tu presupuesto. Da clic en el botón Presupuesto para que puedas completarlo con una breves preguntas.</p>
                                                <button type="button" class="btn btn-primary">Presupuesto ></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        


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
