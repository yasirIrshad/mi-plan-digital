<div class="modal fade" id="egresosModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 700px;" id="egresos">
        <div class="modal-content col-xs-12 col-md-12">
            <!-- Paga start -->
            <div class="modal-header">
                <div class="col-11 d-flex justify-content-center row pl-5">
                    <div class="row pl-2 d-flex justify-content-center">
                        <h5 class="modal-title" style="align-self: center;">
                            <a class="paddingLeft" href="javascript:void(0)">PAGA</a>
                        </h5>
                    </div>
    
                </div>
                
                <div class="col-1">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
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
            
            <hr class="row col-12" style="margin-bottom: 0">


            <!-------------------------------------- Gasta ------------------------------->

            <!-- Gasta -->
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
                        <h6 class="mr-5">${{gastosMensuales.pagosMensualesTotal | addComma}}<small>/mes</small></h6>
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
                            <h6>${{gastosMensuales.entretenimiento.entretenimientoTotal | addComma }}<small>/mes</small></h6>
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
                                    v-model="gastosMensuales.entretenimiento.aplicaciones"
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
                                    v-model="gastosMensuales.entretenimiento.clasesHobbies"
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
                                    v-model="gastosMensuales.entretenimiento.actividadesSociales"
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
                            <h6>${{gastosMensuales.internetTelefonia | addComma }}<small>/mes</small></h6>
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
                                    v-model="gastosMensuales.internetTelefonia"
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
                            <h6>${{gastosMensuales.restaurantes | addComma }}<small>/mes</small></h6>
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
                                    v-model="gastosMensuales.restaurantes"
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
                            <h6>${{gastosMensuales.serviciosDeTerceros | addComma }}<small>/mes</small></h6>
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
                                    v-model="gastosMensuales.serviciosDeTerceros"
                                >
                                <div class="input-group-append">
                                    <span class="input-group-text">/mes</span>
                                </div>
                            </div>
                        </div>                        
                    </div>
                    <!-- servicios de terceros --> 
                    <!---------------- Servicios de terceros --------------->


                    <!-- -------------------------Gastos anuales------------------------ -->
                    <!------- Gastos anuales total Start ------->
                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2 pt-2 pb-2" style="background: #ada9a980;">
                        <h6 class="ml-2">Gastos anuales</h6>
                        <h6 class="mr-5">${{gastosAnuales.gastosAnualesTotal | addComma}}<small>/mes</small></h6>
                    </div>
                    <!------- Gastos anuales total End ------->


                    <!---------------- Vestuario --------------->
                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                        <div class="row ml-2">
                            <img style="margin-right: 10px;" width="30" height="30" src="../assets/icons/iconsImg/X119.png">
                            <h6>Vestuario</h6>
                        </div>

                        <div class="row mr-5">
                            <h6>${{gastosAnuales.vestuario | addComma }}<small>/mes</small></h6>
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
                                    v-model="gastosAnuales.vestuario"
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
                            <h6>${{gastosAnuales.vacaciones | addComma }}<small>/mes</small></h6>
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
                                    v-model="gastosAnuales.vacaciones"
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
                            <h6>${{gastosAnuales.articulosPersonales | addComma }}<small>/mes</small></h6>
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
                                    v-model="gastosAnuales.articulosPersonales"
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

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-outline-primary" type="submit">Actualizar</button>
            </div>
        </div>
    </div>
</div>