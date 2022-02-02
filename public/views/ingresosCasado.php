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

        <!-- avatar modal -->
        <?php
            // require_once '../components/avatar_modal.php'
        ?>
        <!-- avatar modal -->

        

        <!-- Start right Content here -->
        <div class="content-page" style="margin-left: 0!important;">

            <!-- Start content -->
            <div class="content">
                
                <!-- Page content Wrapper -->
                <div class="page-content-wrapper ">

                    <!-- container fluid End-->
                    <div class="container-fluid">

                        <div class="row" id="ingresos">
                            <div class="col-12 d-flex align-items-center justify-content-center" style="">
                                <div class="card col-md-12 col-xs-12 col-xs-12 m-b-30" style="margin: 0 auto;">
                                    <div class="card-body row d-flex justify-content-center">
                                        
                                        <div class="col-11 d-flex justify-content-around row pl-5 mb-4">
                                            <div class="row pl-2 d-flex justify-content-center">
                                                <img src="../assets/images/avatars/sin_avatar.png" alt="avatar" height="60" style="border-radius: 50%; margin: 0 auto">
                                                <h6 class="modal-title" style="align-self: center;">
                                                    <a class="paddingLeft" href="javascript:void(0)">INGRESOS Y CCI DE TITULAR</a>
                                                </h6>
                                            </div>

                                            <div class="row ml-5 d-flex justify-content-center hideMobile">
                                                <img src="../assets/images/avatars/sin_avatar.png" alt="avatar" height="60" style="border-radius: 50%; margin: 0 auto">
                                                <h6 class="modal-title" style="align-self: center;">
                                                    <a class="paddingLeft" href="javascript:void(0)">INGRESOS Y CCI DE PAREJA</a>
                                                </h6>
                                            </div>
                            
                                        </div>
                                        

                                        <div class="row d-flex justify-content-center">

                                            <!-- titular start -->
                                            <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12" style="padding-right: 0;">
                
                                                <!------- titular empleado Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="col-md-3 col-xs-3 custom-control form-check">
                                                        <input type="checkbox" class="form-check-input custom-checkbox" value="empleado" 
                                                        id="titularEmpleado" v-model="titularTrabaja" @Click="employmentTitular('empleado')">
                                                        <label class="form-check-label" for="titularEmpleado">Empleado</label>
                                                    </div>
                                                    
                                                    <div class="col-md-9 col-xs-8 d-flex justify-content-between" v-if="titularTrabaja">
                                                        <input class="col-md-5 col-xs-6 removeBorders" placeholder="Salario /mes" type="number">
                                                        +
                                                        <input class="col-md-5 col-xs-6 removeBorders" placeholder="Bonos /año" type="number">
                                                    </div>
                                                </div>
                                                <!------- titular empleado End ------->

                                                <!------- titular desempleado Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="col-md-3 col-xs-3 custom-control form-check">
                                                        <input type="checkbox" class="form-check-input custom-checkbox" value="desempleado" 
                                                        id="titularDesempleado" v-model="titularNotrabaja" @Click="employmentTitular('desempleado')">
                                                        <label class="form-check-label" for="titularDesempleado">Desempleado</label>
                                                    </div>

                                                    <div class="col-md-9 col-xs-8 d-flex justify-content-between" v-if="titularNotrabaja">
                                                        <input class="col-md-5 col-xs-6 removeBorders" placeholder="Salario /mes" type="number">
                                                        +
                                                        <input class="col-md-5 col-xs-6 removeBorders" placeholder="Bonos /año" type="number" type="number">
                                                    </div>
                                                </div>
                                                <!------- titular desempleado End ------->

                                                <!------- titular independiente Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">

                                                    <div class="col-md-12 col-xs-12 custom-control  form-check">
                                                        <input type="checkbox" class="form-check-input custom-checkbox" id="seguroVida" v-model="titular.empleo.independiente">
                                                        <label class="form-check-label" for="seguroVida">Independiente</label>
                                                    </div>
                                                    
                                                    <!-- titular regimen start-->
                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-5" v-if="titular.empleo.independiente">
                                                        <div class="col-md-6 col-xs-3 custom-control custom-radio">
                                                            <input type="radio" name="titularRegimen" id="titularSimplificado" value="simplificado" class="custom-control-input" v-model="titular.regimen">
                                                            <label class="custom-control-label" for="titularSimplificado">Régimen simplificado</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-8 d-flex justify-content-between" v-if="titular.regimen == 'simplificado'">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Bruto /mes" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-5" v-if="titular.empleo.independiente">
                                                        <div class="col-md-6 col-xs-3 custom-control custom-radio">
                                                            <input type="radio" name="titularRegimen" id="titularGeneral" value="general" class="custom-control-input" v-model="titular.regimen">
                                                            <label class="custom-control-label" for="titularGeneral">Régimen General</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-8 d-flex justify-content-between" v-if="titular.regimen == 'general'">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Bruto /mes" type="number">
                                                        </div>
                                                    </div>
                                                    <!-- titular regimen end-->
                                                    
                                                </div>
                                                <!------- titular independiente end ------->

                                                <!------- titular otro Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="col-md-12 col-xs-12 custom-control form-check">
                                                        <input type="checkbox" class="form-check-input custom-checkbox" id="seguroVida" v-model="titular.empleo.otros">
                                                        <label class="form-check-label" for="seguroVida">Otros</label>
                                                    </div>
                                                    
                                                    <!-- titular otro start-->
                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-5" v-if="titular.empleo.otros">

                                                        <div class="col-md-3 col-xs-3 custom-control form-check">
                                                            <input type="checkbox" class="form-check-input custom-checkbox" id="seguroVida" v-model="titular.empleo.pensiones">
                                                            <label class="form-check-label" for="seguroVida">Pensiones<small>/mes</small></label>
                                                        </div>

                                                        <div class="col-md-9 col-xs-8 d-flex justify-content-between" v-if="titular.empleo.pensiones">
                                                            <input class="col-md-4 col-xs-4 removeBorders" placeholder="Sobrevivencia" type="number">
                                                            +
                                                            <input class="col-md-4 col-xs-4 removeBorders" placeholder="Invalidez" type="number">
                                                            +
                                                            <input class="col-md-4 col-xs-4 removeBorders" placeholder="Retiro" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-5" v-if="titular.empleo.otros">
                                                        <div class="col-md-3 col-xs-3 custom-control form-check">
                                                            <input type="checkbox" class="form-check-input custom-checkbox" id="seguroVida" v-model="titular.empleo.remesas">
                                                            <label class="form-check-label" for="seguroVida">Remesas</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-8 d-flex justify-content-between" v-if="titular.empleo.remesas">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Promedio /mes" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-5" v-if="titular.empleo.otros">
                                                        <div class="col-md-6 col-xs-3 custom-control form-check">
                                                            <input type="checkbox" class="form-check-input custom-checkbox" id="seguroVida" v-model="titular.empleo.rentasAlquiler">
                                                            <label class="form-check-label" for="seguroVida">Rentas por Alquiler</label>
                                                        </div>
                                                        

                                                        <div class="col-md-6 col-xs-8 d-flex justify-content-between" v-if="titular.empleo.rentasAlquiler">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Neto /mes" type="number">
                                                        </div>
                                                    </div>
                                                    <!-- titular otros end-->
                                                    
                                                </div>
                                                <!------- titular otro end ------->

                                                <!------- dummy Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex d-xs-none justify-content-between mb-2">
                                                    <div class="col-md-12 col-xs-12 custom-control custom-radio">
                                                        <input type="hidden" name="titularEmpleo" id="titularOtro" value="otros" class="custom-control-input" v-model="titular.empleo">
                                                        <label class="custom-control-label d-none" for="titularOtro"></label>
                                                    </div>                        
                                                </div>
                                                <!------- dummy otro end ------->

                                                <!------- titular CCI en AFP Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="col-md-12 col-xs-12 custom-control custom-radio" style="padding-left: 0;">
                                                        <h6>Cuentas de capitalización individual (CCI) en AFP</h6>
                                                    </div>
                                                    
                                                    <!-- titular CCI start-->
                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-4">
                                                        
                                                        <div class="col-md-6 col-xs-6 custom-control custom-radio">
                                                            <input type="radio" name="titularCci" id="titularCciActual" value="cciActual" class="custom-control-input" v-model="titular.cci">
                                                            <label class="custom-control-label" for="titularCciActual">Monto Actual en CCI</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-6 d-flex justify-content-between" v-if="titular.cci == 'cciActual'">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Saldo actual" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-4">

                                                        <div class="col-md-6 col-xs-6 custom-control custom-radio">
                                                            <input type="radio" name="titularCci" id="titularXciAportes" value="cciAportes" class="custom-control-input" v-model="titular.cci">
                                                            <label class="custom-control-label" for="titularXciAportes">Aportes voluntarios actual en CCI</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-6 d-flex justify-content-between" v-if="titular.cci == 'cciAportes'">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Saldo actual" type="number">
                                                        </div>
                                                    </div>
                                                    <!-- titular CCI end-->
                                                    
                                                </div>
                                                <!------- titular CCI en AFP end ------->

                                            </div>  
                                            <!-- titular end -->    

                                            <!-- pareja start -->
                                            <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12" style="padding-right: 0;">

                                                <div class="row pl-2 col-xs-12 d-flex justify-content-center mt-3 mb-2 showMobile">
                                                    <img src="../assets/images/avatars/sin_avatar.png" alt="avatar" height="60" style="border-radius: 50%; margin: 0 auto">
                                                    <h6 class="row col-xs-12 justify-content-center" style="align-self: center;">
                                                        <a class="paddingLeft" href="javascript:void(0)">INGRESOS Y CCI DE PAREJA</a>
                                                    </h6>
                                                </div>

                                                <!------- pareja empleado start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="col-md-3 col-xs-3 custom-control form-check">
                                                        <input type="checkbox" class="form-check-input custom-checkbox" value="empleado" 
                                                        id="parejaEmpleado" v-model="parejaTrabaja" @Click="employmentPareja('empleado')">
                                                        <label class="form-check-label" for="parejaEmpleado">Empleado</label>
                                                    </div>
                                                    
                                                    <div class="col-md-9 col-xs-8 d-flex justify-content-between" v-if="parejaTrabaja">
                                                        <input class="col-md-5 col-xs-6 removeBorders" placeholder="Salario /mes" type="number" v-model="pareja.sueldo">
                                                        +
                                                        <input class="col-md-5 col-xs-6 removeBorders" placeholder="Bonos /año" type="number" v-model="pareja.bono">
                                                    </div>
                                                </div>
                                                <!------- pareja empleado end ------->

                                                <!------- pareja desempleado start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="col-md-3 col-xs-3 custom-control form-check">
                                                        <input type="checkbox" class="form-check-input custom-checkbox" value="desempleado" 
                                                        id="parejaDesempleado" v-model="parejaNotrabaja" @Click="employmentPareja('desempleado')">
                                                        <label class="form-check-label" for="parejaDesempleado">Desempleado</label>
                                                    </div>

                                                    <div class="col-md-9 col-xs-8 d-flex justify-content-between" v-if="parejaNotrabaja">
                                                        <input class="col-md-5 col-xs-6 removeBorders" placeholder="Salario /mes" type="number">
                                                        +
                                                        <input class="col-md-5 col-xs-6 removeBorders" placeholder="Bonos /año" type="number">
                                                    </div>
                                                </div>
                                                <!------- pareja desempleado end ------->

                                                <!------- pareja independiente Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="col-md-12 col-xs-12 custom-control form-check">
                                                        <input type="checkbox" class="form-check-input custom-checkbox" id="parejaIndependiente" v-model="pareja.empleo.independiente">
                                                        <label class="form-check-label" for="parejaIndependiente">Independiente</label>
                                                    </div>
                                                    
                                                    <!-- pareja Regimen  start-->
                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-5" v-if="pareja.empleo.independiente">
                                                        <div class="col-md-6 col-xs-3 custom-control custom-radio">
                                                            <input type="radio" name="parejaRegimen" id="parejaSimplificado" value="simplificado" class="custom-control-input" v-model="pareja.regimen">
                                                            <label class="custom-control-label" for="parejaSimplificado">Régimen simplificado</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-8 d-flex justify-content-between" v-if="pareja.regimen == 'simplificado'">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Bruto /mes" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-5" v-if="pareja.empleo.independiente">
                                                        <div class="col-md-6 col-xs-3 custom-control custom-radio">
                                                            <input type="radio" name="parejaRegimen" id="parejaGeneral" value="general" class="custom-control-input" v-model="pareja.regimen">
                                                            <label class="custom-control-label" for="parejaGeneral">Régimen General</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-8 d-flex justify-content-between" v-if="pareja.regimen == 'general'">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Bruto /mes" type="number">
                                                        </div>
                                                    </div>
                                                    <!-- pareja Regimen end-->
                                                    
                                                </div>
                                                <!------- pareja independiente end ------->

                                                <!------- pareja otro Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="col-md-12 col-xs-12 custom-control form-check">
                                                        <input type="checkbox" class="form-check-input custom-checkbox" id="parejaOtro" v-model="pareja.empleo.otro">
                                                        <label class="form-check-label" for="parejaOtro">Otros</label>
                                                    </div>
                                                    
                                                    <!-- pareja otro start-->
                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-5" v-if="pareja.empleo.otro">
                                                        <div class="col-md-3 col-xs-3 custom-control form-check">
                                                            <input type="checkbox" class="form-check-input custom-checkbox" id="parejaPensiones" v-model="pareja.empleo.pensiones">
                                                            <label class="form-check-label" for="parejaPensiones">Pensiones<small>/mes</small></label>
                                                        </div>

                                                        <div class="col-md-9 col-xs-8 d-flex justify-content-between" v-if="pareja.empleo.pensiones">
                                                            <input class="col-md-4 col-xs-4 removeBorders" placeholder="Sobrevivencia" type="number">
                                                            +
                                                            <input class="col-md-4 col-xs-4 removeBorders" placeholder="Invalidez" type="number">
                                                            +
                                                            <input class="col-md-4 col-xs-4 removeBorders" placeholder="Retiro" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-5" v-if="pareja.empleo.otro">
                                                        <div class="col-md-6 col-xs-3 custom-control form-check">
                                                            <input type="checkbox" class="form-check-input custom-checkbox" id="parejaRemesas" v-model="pareja.empleo.remesas">
                                                            <label class="form-check-label" for="parejaRemesas">Remesas</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-8 d-flex justify-content-between" v-if="pareja.empleo.remesas">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Promedio /mes" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-5" v-if="pareja.empleo.otro">
                                                        <div class="col-md-6 col-xs-3 custom-control form-check">
                                                            <input type="checkbox" class="form-check-input custom-checkbox" id="parejaRenta" v-model="pareja.empleo.rentasAlquiler">
                                                            <label class="form-check-label" for="parejaRenta">Rentas por Alquiler</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-8 d-flex justify-content-between" v-if="pareja.empleo.rentasAlquiler">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Neto /mes" type="number">
                                                        </div>
                                                    </div>
                                                    <!-- pareja otros end-->
                                                    
                                                </div>
                                                <!------- pareja otro end ------->

                                                <!------- pareja no tiene ingresos Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="col-md-12 col-xs-12 custom-control form-check">
                                                        <input type="checkbox" class="form-check-input custom-checkbox" id="parejaIngresos" v-model="pareja.noTieneIngresos">
                                                        <label class="form-check-label" for="parejaIngresos">No tiene ingresos</label>
                                                    </div>                        
                                                </div>
                                                <!------- pareja no tiene ingresos end ------->

                                                <!------- pareja CCI en AFP Start ------->
                                                <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                                                    <div class="col-md-12 col-xs-12 custom-control custom-radio" style="padding-left: 0;">
                                                        <h6>Cuentas de capitalización individual (CCI) en AFP</h6>
                                                    </div>
                                                    
                                                    <!-- pareja CCI start-->
                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-4">
                                                        
                                                        <div class="col-md-6 col-xs-6 custom-control custom-radio">
                                                            <input type="radio" name="parejaCci" id="parejaCciActual" value="cciActual" class="custom-control-input" v-model="pareja.cci">
                                                            <label class="custom-control-label" for="parejaCciActual">Monto Actual en CCI</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-6 d-flex justify-content-between" v-if="pareja.cci == 'cciActual'">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Saldo actual" type="number">
                                                        </div>
                                                    </div>

                                                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between pl-4">

                                                        <div class="col-md-6 col-xs-6 custom-control custom-radio">
                                                            <input type="radio" name="parejaCci" id="parejaXciAportes" value="cciAportes" class="custom-control-input" v-model="pareja.cci">
                                                            <label class="custom-control-label" for="parejaXciAportes">Aportes voluntarios actual en CCI</label>
                                                        </div>

                                                        <div class="col-md-6 col-xs-6 d-flex justify-content-between" v-if="pareja.cci == 'cciAportes'">
                                                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Saldo actual" type="number">
                                                        </div>
                                                    </div>
                                                    <!-- pareja CCI end-->
                                                    
                                                </div>
                                                <!------- pareja CCI en AFP end ------->

                                            </div>  
                                            <!-- pareja end -->   

                                        </div>

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

    <script src="../assets/js/ingresos.js"></script>

</body>

</html>