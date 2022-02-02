<div class="modal fade" id="activosDeudasModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content col-xs-12" id="activosDeudas">

            <!-- Activos -->
            <div class="modal-header">
                <div class="col-11 d-flex justify-content-around pl-5">
                    <div class="row pl-2 d-flex justify-content-center">
                        <h5 class="modal-title" style="align-self: center;">
                            <a class="paddingLeft" href="javascript:void(0)">ACTIVOS</a>
                        </h5>
                    </div>
    
                </div>
                
                <div class="col-1">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            <div class="modal-body row d-flex justify-content-center">

                <!-- -->
                <div class="col-md-12 col-sm-12 col-xs-12 justify-content-center" style="padding-right: 0;">

                    <!-------  ------->
                    <div class="row col-md-12 col-xs-12 mb-3">
                        <div class="col-md-6 col-xs-6 d-flex justify-content-start">
                            <label style="margin-bottom: 0;">Valor vivienda</label>
                        </div>
                        
                        <div class="col-md-5 col-xs-6 d-flex justify-content-between">
                            <input class="col-md-12 col-xs-12 removeBorders text-center" placeholder="Valor actual" type="number">
                        </div>
                    </div>

                    <!-- cantidad vehiculo -->
                    <div class="row col-md-12 col-xs-12 mb-3">
                        <div class="col-md-6 col-xs-6 d-flex justify-content-start">
                            <label style="margin-bottom: 0;">Cant. vehículo(s)</label>
                        </div>
                        
                        <div class="col-md-5 col-xs-6 d-flex justify-content-center">
                            <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="Cant." type="number" style="margin-right: 1px;">
                        </div>
                    </div>
                    <!-- cantidad vehiculo -->

                    <!-- valor vehiculo -->
                    <div class="row col-md-12 col-xs-12 mb-3">
                        <div class="col-md-6 col-xs-6 d-flex justify-content-start">
                            <label style="margin-bottom: 0;">Valor vehículo(s)</label>
                        </div>
                        
                        <div class="col-md-5 col-xs-6 d-flex justify-content-between">                           
                            <input class="col-md-12 col-xs-12 removeBorders text-center" placeholder="Valor actual" type="number" style="margin-left: 1px;">
                        </div>
                    </div>
                    <!-- valor vehiculo -->
                    

                    <div class="row col-md-12 col-xs-12 mb-3">
                        <div class="row col-md-6 col-xs-6 d-flex justify-content-start" style="margin: 0 0; padding-left: 0;">
                            <label class="col-12 d-flex justify-content-start" style="margin-bottom: 0;">
                                Activos Financieros                                
                            </label>
                            <small class="col-12 d-flex justify-content-start">(vencimiento menor a 6 meses)</small>                            
                        </div>
                        
                        <div class="col-md-5 col-xs-6 d-flex">
                            <input class="col-md-12 col-xs-12 removeBorders text-center" placeholder="Valor actual" type="number">
                        </div>
                    </div>

                    <div class="row col-md-12 col-xs-12 mb-3">
                        <div class="row col-md-6 col-xs-6 d-flex justify-content-start" style="margin: 0 0; padding-left: 0;">
                            <label class="col-12 d-flex justify-content-start" style="margin-bottom: 0;">
                                Activos Financieros                                
                            </label>
                            <small class="col-12 d-flex justify-content-start">(vencimiento mayor a 6 meses)</small>                            
                        </div>
                        
                        <div class="col-md-5 col-xs-6 d-flex">
                            <input class="col-md-12 col-xs-12 removeBorders text-center" placeholder="Valor actual" type="number">
                        </div>
                    </div>

                    <div class="row col-md-12 col-xs-12 mb-3">
                        <div class="col-md-6 col-xs-6 d-flex justify-content-start">
                            <label style="margin-bottom: 0;">Otros activos</label>
                        </div>
                        
                        <div class="col-md-5 col-xs-6 d-flex justify-content-between">
                            <input class="col-md-12 col-xs-12 removeBorders text-center" placeholder="Valor actual" type="number">
                        </div>
                    </div>
                    <!-------  ------->                  
                    
                </div>  
                <!--  --> 

            </div>
            <!-- Activos -->


            <!-- Seguro de vida -->
            <div class="modal-header" style="padding: 1rem 1rem; border-top: 1px solid #dee2e6;">
                <div class="col-12 d-flex justify-content-center" style="padding: 0;">
                    <h5 class="modal-title" style="align-self: center; margin: 0">
                        <a class="paddingLeft" href="javascript:void(0)">SEGURO DE VIDA</a>
                    </h5>                       
                </div>
            </div>

            <div class="modal-body row d-flex justify-content-center">
                <div class="col-md-12 col-sm-12 col-xs-12 justify-content-center" style="padding-right: 0;">
                    <!------- titular desempleado Start ------->
                    <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2">
                        <div class="col-md-12 col-xs-12 form-check">
                            <input type="checkbox" class="form-check-input custom-checkbox" id="seguroVida" v-model="seguroVida">
                            <label class="form-check-label" for="seguroVida">Tengo seguro de vida</label>
                        </div>
                    </div>
                    <!------- titular desempleado End ------->

                    <!-- monto asegurado -->
                    <div class="row col-md-12 col-xs-12 mb-3" v-if="seguroVida">
                        <div class="col-md-6 col-xs-6 ml-4" style="align-self: flex-end;">
                            <label style="margin-bottom: 0;">Monto asegurado</label>
                        </div>
                        
                        <div class="col-md-5 col-xs-5 d-flex justify-content-between">
                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Valor actual" type="number">
                        </div>
                    </div>
                    <!-- monto asegurado -->

                    <!-- prima anual -->
                    <div class="row col-md-12 col-xs-12 mb-3" v-if="seguroVida">
                        <div class="col-md-6 col-xs-6 ml-4" style="align-self: flex-end;">
                            <label style="margin-bottom: 0;">Prima anual</label>
                        </div>
                        
                        <div class="col-md-5 col-xs-5 d-flex justify-content-between">
                            <input class="col-md-12 col-xs-12 removeBorders" placeholder="Valor actual" type="number">
                        </div>
                    </div>
                    <!-- prima anual -->

                    <div class="row col-md-12 col-xs-12 mb-3" v-if="seguroVida">
                        <div class="col-md-12 col-xs-12 ml-4 mb-3">
                            <label style="margin-bottom: 0;">El seguro tiene componente de ahorro?</label>
                        </div>

                        <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2 ml-5">
                            <div class="col-md-12 col-xs-12 custom-control custom-radio">
                                <input type="radio" name="componenteAhorro" id="siTiene" value="true" class="custom-control-input">
                                <label class="custom-control-label" for="siTiene">Si tiene</label>
                            </div>
                        </div>
                        <div class="row col-md-12 col-xs-12 d-flex justify-content-between mb-2 ml-5">
                            <div class="col-md-12 col-xs-12 custom-control custom-radio">
                                <input type="radio" name="componenteAhorro" id="noTiene" value="false" class="custom-control-input">
                                <label class="custom-control-label" for="noTiene">No tiene</label>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Seguro de vida -->

            <!-- Deudas -->
            <div class="modal-header" style="padding: 1rem 1rem; border-top: 1px solid #dee2e6;">
                <div class="col-12 d-flex justify-content-center" style="padding: 0;">
                    <h5 class="modal-title" style="align-self: center; margin: 0">
                        <a class="paddingLeft" href="javascript:void(0)">DEUDAS</a>
                    </h5>                       
                </div>
            </div>

            <div class="modal-body row d-flex justify-content-center">
                <div class="col-md-12 col-sm-12 col-xs-12 justify-content-center" style="padding-right: 0;">

                    <div class="row col-md-12 col-xs-12 d-flex justify-content-start mb-2">
                        <div class="col-md-6 col-xs-6 form-check">
                            <input type="checkbox" class="form-check-input custom-checkbox" id="noDeudas" v-model="deudas">
                            <label class="form-check-label" for="noDeudas">No tengo deudas</label>
                        </div>
                    </div>

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
                            <input class="col-md-6 col-xs-6 removeBorders text-center" placeholder="Cuota mensual" type="text" v-model="prestamoEducativo.cuotaMensual">
                        </div>
                    </div>
                    <!-- prestamo educativo -->
                </div>
            </div>
            <!-- Deudas -->

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-outline-primary" type="submit" @click="enviarActivosDeudas">Actualizar</button>
            </div>
        </div>
    </div>
</div>