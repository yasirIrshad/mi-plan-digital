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
            <div class="content">
                
                <!-- Page content Wrapper -->
                <div class="page-content-wrapper ">

                    <!-- container fluid End-->
                    <div class="container-fluid">

                        <div class="row" id="activosDeudas">
                            <div class="col-12 d-flex align-items-center justify-content-center" style="height: 81vh">
                                <div class="card col-md-12 col-xs-12 col-xs-12 m-b-30" style="margin: 0 auto;">
                                    <div class="card-body row d-flex justify-content-center">
                                        <!-- titular Start-->
                                        <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center">
                                            <!-- prestamo hipotecario -->
                                            <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2" v-if="!deudas">
                                                <div class="col-md-5 col-xs-5 form-check">
                                                    <input type="checkbox" class="form-check-input custom-checkbox" id="prestamoHipotecario" v-model="prestamoHipotecario.tiene">
                                                    <label class="form-check-label" for="prestamoHipotecario">Préstamo hipotecario</label>
                                                </div>
                                                
                                                <div class="col-md-7 col-xs-7 d-flex" v-if="prestamoHipotecario.tiene">
                                                    <input class="col-md-6 col-xs-6 removeBorders text-center" placeholder="Saldo actual" type="number" v-model="prestamoHipotecario.saldoActual">
                                                    +
                                                    <input class="col-md-6 col-xs-6 removeBorders text-center" placeholder="Cuota mensual" type="number" v-model="prestamoHipotecario.cuotaMensual">
                                                </div>
                                            </div>
                                            <!-- prestamo hipotecario -->

                                            <!-- prestamo vehiculo -->
                                            <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2" v-if="!deudas">
                                                <div class="col-md-5 col-xs-5 form-check">
                                                    <input type="checkbox" class="form-check-input custom-checkbox" id="prestamoVehiculo" v-model="prestamoVehiculo.tiene">
                                                    <label class="form-check-label" for="prestamoVehiculo">Préstamo de vehículo</label>
                                                </div>
                                                
                                                <div class="col-md-7 col-xs-7 d-flex" v-if="prestamoVehiculo.tiene">
                                                    <input class="col-md-6 col-xs-6 removeBorders text-center" placeholder="Saldo actual" type="number" v-model="prestamoVehiculo.saldoActual">
                                                    +
                                                    <input class="col-md-6 col-xs-6 removeBorders text-center" placeholder="Cuota mensual" type="number" v-model="prestamoVehiculo.cuotaMensual">
                                                </div>
                                            </div>
                                            <!-- prestamo vehiculo -->

                                            <!-- prestamo consumo -->
                                            <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2" v-if="!deudas">
                                                <div class="col-md-5 col-xs-5 form-check">
                                                    <input type="checkbox" class="form-check-input custom-checkbox" id="prestamoConsumo" v-model="prestamoConsumo.tiene">
                                                    <label class="form-check-label" for="prestamoConsumo">Préstamo de consumo</label>
                                                </div>
                                                
                                                <div class="col-md-7 col-xs-7 d-flex" v-if="prestamoConsumo.tiene">
                                                    <input class="col-md-6 col-xs-6 removeBorders text-center" placeholder="Saldo actual" type="number" v-model="prestamoConsumo.saldoActual">
                                                    +
                                                    <input class="col-md-6 col-xs-6 removeBorders text-center" placeholder="Cuota mensual" type="number" v-model="prestamoConsumo.cuotaMensual">
                                                </div>
                                            </div>
                                            <!-- prestamo consumo -->

                                            <!-- prestamo educativo -->
                                            <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2" v-if="!deudas">
                                                <div class="col-md-5 col-xs-5 form-check">
                                                    <input type="checkbox" class="form-check-input custom-checkbox" id="prestamoEducativo" v-model="prestamoEducativo.tiene">
                                                    <label class="form-check-label" for="prestamoEducativo">Préstamo de educativo</label>
                                                </div>
                                                
                                                <div class="col-md-7 col-xs-7 d-flex" v-if="prestamoEducativo.tiene">
                                                    <input class="col-md-6 col-xs-6 removeBorders text-center" placeholder="Saldo actual" type="number" v-model="prestamoEducativo.saldoActual">
                                                    +
                                                    <input class="col-md-6 col-xs-6 removeBorders text-center" placeholder="Cuota mensual" type="number" v-model="prestamoEducativo.cuotaMensual">
                                                </div>
                                            </div>
                                            <!-- prestamo educativo -->
                                        </div>
                                        <!-- titular End-->
                                        
                                        <div class="row col-12 mt-2 d-flex justify-content-center">
                                            <a href="javascript:void(0)">
                                                <button class="btn btn-primary" 
                                                    style="font-family: Open Sans; font-size: 13px;"
                                                    @click="sendEvent"
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
    <div 
        id="botcopy-embedder-d7lcfheammjct" 
        class="botcopy-embedder-d7lcfheammjct" 
        data-botId="6023c4394917ac0009a83d3b">
    </div>
    <!-- Scripts End -->
    <script type="text/javascript" async="true" src="https://widget.botcopy.com/js/injection.js"></script>

    <script>
    
    var activosDeudas = new Vue({
        el: '#activosDeudas',
        data: {  
            valorVivienda: 0,
            valorVehiculo: 0,
            activosFinancieros: {
                menor6Meses: 0,
                mayor6Meses: 0
            },
            seguroVida: false,
            montoAsegurado: 0,
            primaAnual: 0,
            segutoComponente: {
                tiene: 'no',
            },
            deudas: false,
            prestamoHipotecario:{
                tiene: false,
                saldoActual: '',
                cuotaMensual: ''
            },
            prestamoVehiculo:{
                tiene: false,
                saldoActual: '',
                cuotaMensual: ''
            },
            prestamoConsumo:{
                tiene: false,
                saldoActual: '',
                cuotaMensual: ''
            },
            prestamoEducativo: {
                tiene: false,
                saldoActual: '',
                cuotaMensual: ''
            }
        },
        created(){
        },
        methods: {
            validar() {  

            },
            enviarActivosDeudas(){
                // if(this.validar()){
                //     let message = this.validar()
                //     console.log(message)
                //     swal(
                //         'Error en el formulario',
                //         message,
                //         'warning'
                //     )
                //     return; 
                // }
                $("[data-dismiss=modal]").trigger({ type: "click" });
                // this.isLoading = true;
                    
            },
            sendEvent(){
                Botcopy.sendEvent('Completado hijos');
                console.log(Botcopy)
            }
            
        },
        watch:{
        }
    });

    </script>

    <!-- <script src="../assets/js/activosDeudas.js"></script> -->

</body>

</html>