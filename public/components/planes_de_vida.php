<div class="modal fade" id="planesVidaModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 750px;">
        <div class="modal-content col-xs-12" id="planesVida">

            <!-- Activos -->
            <div class="modal-header">
                <div class="col-11 d-flex justify-content-around row pl-5">
                    <div class="pl-2 d-flex justify-content-center">
                        <h5 class="modal-title" style="align-self: center;">
                            <a class="paddingLeft" href="javascript:void(0)">PLANES DE VIDA</a>
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
                <div class="col-md-12 col-sm-12 col-xs-12 justify-content-center" style="padding: 0 15px;">

                    <!-------  ------->
                    <p style="font-size: 16px;">Da clic en cada uno de los planes de vida que desees modificar o agregar. 
                        Cuando hayas terminado oprime el boton Modificar.
                    </p>

                    <!------- retiro laboral ------->
                    <div class="dropdown-item collapse-title mb-2" style="padding: 0;">   

                        <div data-toggle="collapse" data-target="#retiroLaboral" class="col-12 row d-flex justify-content-start ml-2"  
                         style="align-self: center; height: 40px; align-content: center">
                            <b class="notify-details" style="margin-left:0px; font-size: 16px;">
                                Plan de retiro laboral
                            </b>
                        </div> 
                                
                        <div class="notify-details row col-12" style="margin-left: 0px; ">                               
                            
                            <div class="col-12 row collapse" id="retiroLaboral" 
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    <img src="../assets/images/X100.png" alt="retiro laboral">
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Edad en la que estas planeando retirarte
                                    </Label>
                                    <small>(La edad mínima de jubilación son 60 años.)</small>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="0" type="number">
                                </div>
                            </div> 

                        </div>
                    </div>
                    <!------ retiro laboral ------>
                    
                    <!------- plan de mejora ------->
                    <div class="dropdown-item collapse-title mb-2" style="padding: 0;">   

                        <div data-toggle="collapse" data-target="#planMejora" class="col-12 row d-flex justify-content-start ml-2"  
                         style="align-self: center; height: 40px; align-content: center">
                            <b class="notify-details" style="margin-left:0px; font-size: 16px;">
                                Plan de mejora educativa
                            </b>
                        </div> 

                        <!-- fecha estudios -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">   
                            <div class="col-12 row collapse" id="planMejora" 
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    <img src="../assets/images/X101.png" alt="plan de mejora">
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Fecha de inicio de estudios
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" type="date">
                                </div>
                            </div> 
                        </div>
                        <!-- fecha estudios -->

                        <!-- matricula creditos -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">                               
                            
                            <div class="col-12 row collapse" id="planMejora" 
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Matrícula y créditos anuales
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="0" type="number">
                                </div>
                            </div> 

                        </div>
                        <!-- matricula creditos -->

                        <!-- año de duracion -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">                               
                            
                            <div class="col-12 row collapse" id="planMejora" 
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Años de duración
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="0 años" type="number">
                                </div>
                            </div> 

                        </div>
                        <!-- año de duracion -->
                    </div>
                    <!------ plan de mejora ------>  

                    <!------- plan de vivienda ------->
                    <div class="dropdown-item collapse-title mb-2" style="padding: 0;">   

                        <div data-toggle="collapse" data-target="#planVivienda" class="col-12 row d-flex justify-content-start ml-2"  
                         style="align-self: center; height: 40px; align-content: center">
                            <b class="notify-details" style="margin-left:0px; font-size: 16px;">
                                Plan de vivienda
                            </b>
                        </div> 

                        <!-- años compra casa -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">   
                            <div class="col-12 row collapse"  id="planVivienda" 
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    <img src="../assets/images/X102.png" alt="plan de mejora">
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Años en los que planeas comprar tu casa
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="0" type="number">
                                </div>
                            </div> 
                        </div>
                        <!-- años compra casa -->

                        <!-- costo vivienda -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">                               
                            
                            <div class="col-12 row collapse" id="planVivienda"
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Costo estimado de la vivienda
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="0" type="number">
                                </div>
                            </div> 

                        </div>
                        <!-- costo vivienda -->
                    </div>
                    <!------ plan de vivienda ------>  

                    <!------- plan de vehiculo ------->
                    <div class="dropdown-item collapse-title mb-2" style="padding: 0;">   

                        <div data-toggle="collapse" data-target="#planVehiculo" class="col-12 row d-flex justify-content-start ml-2"  
                         style="align-self: center; height: 40px; align-content: center">
                            <b class="notify-details" style="margin-left:0px; font-size: 16px;">
                                Plan de vehiculo
                            </b>
                        </div> 

                        <!-- años compra vehiculo -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">   
                            <div class="col-12 row collapse"  id="planVehiculo" 
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    <img src="../assets/images/X103.png" alt="plan de mejora">
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Años en los que planeas comprar tu vehículo
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="0" type="number">
                                </div>
                            </div> 
                        </div>
                        <!-- años compra vehiculo -->

                        <!-- costo vehiculo -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">                               
                            
                            <div class="col-12 row collapse" id="planVehiculo"
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Costo estimado del vehículo
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="0" type="number">
                                </div>
                            </div> 

                        </div>
                        <!-- costo vehiculo -->

                        <!-- vender vehiculo -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">                               
                            
                            <div class="col-12 row collapse" id="planVehiculo"
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Venderias tu vehículo actual    
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="si" type="text">
                                </div>
                            </div> 

                        </div>
                        <!-- vender vehiculo -->

                        <!-- valor vehiculo actual -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">                               
                            
                            <div class="col-12 row collapse" id="planVehiculo"
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Valor comercial actual del vehículo que venderias    
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="0" type="number">
                                </div>
                            </div> 

                        </div>
                        <!-- valor vehiculo actual -->
                    </div>
                    <!------ plan de vehiculo ------>  

                    <!------- Plan universidad de los hijos ------->
                    <div class="dropdown-item collapse-title mb-2" style="padding: 0;">   

                        <div data-toggle="collapse" data-target="#planUniversidad" class="col-12 row d-flex justify-content-start ml-2"  
                         style="align-self: center; height: 40px; align-content: center">
                            <b class="notify-details" style="margin-left:0px; font-size: 16px;">
                                Plan universidad de los hijos
                            </b>
                        </div> 

                        <!-- porcentaje universidad -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">   
                            <div class="col-12 row collapse" id="planUniversidad" 
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    <img src="../assets/images/X103.png" alt="plan de mejora">
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Porcentaje de la universidad a pagar
                                    </Label>
                                    <small>(La edad mínima de jubilación son 60 años.)</small>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="%" type="number">
                                </div>
                            </div> 
                        </div>
                        <!-- porcentaje universidad -->
                    </div>
                    <!------- Plan universidad de los hijos ------->  

                    <!------- Otros planes ------->
                    <div class="dropdown-item collapse-title mb-2" style="padding: 0;">   

                        <div data-toggle="collapse" data-target="#otrosPlanes" class="col-12 row d-flex justify-content-start ml-2"  
                         style="align-self: center; height: 40px; align-content: center">
                            <b class="notify-details" style="margin-left:0px; font-size: 16px;">
                                Otros planes
                            </b>
                        </div> 

                        <!-- tipo de plan -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">   
                            <div class="col-12 row collapse" id="otrosPlanes" 
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                    <img src="../assets/images/X103.png" alt="plan de mejora">
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Tipo de plan
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="Eje: Remodelacion" type="text">
                                </div>
                            </div> 
                        </div>
                        <!-- tipo de plan -->

                        <!-- nombre del plan -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">   
                            <div class="col-12 row collapse" id="otrosPlanes" 
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Nombre del plan
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="Remodelación Cocina " type="text">
                                </div>
                            </div> 
                        </div>
                        <!-- nombre del plan -->

                        <!-- meses en los que planeas realizarlo -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">   
                            <div class="col-12 row collapse" id="otrosPlanes" 
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Meses en los que planeas realizarlo
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="12 meses" type="number">
                                </div>
                            </div> 
                        </div>
                        <!-- meses en los que planeas realizarlo -->

                        <!-- costo estimado  -->
                        <div class="notify-details row col-12" style="margin-left: 0px; ">   
                            <div class="col-12 row collapse" id="otrosPlanes" 
                                style="padding: 0;margin-left: 0px; background: white;"
                            >
                                
                                <div class="col-md-1 col-xs-2 d-flex justify-content-center pt-2 pb-2">
                                </div>

                                <div class="row col-md-5 col-xs-8 d-flex justify-content-start pt-2 pb-2" style="align-content: center;">                                    
                                    <Label class="" style="margin-bottom: 0;">
                                        Costo estimado 
                                    </Label>
                                </div>

                                <div class="col-md-6 col-xs-12 d-flex justify-content-center pt-2 pb-2">
                                    <input class="col-md-6 col-xs-12 removeBorders text-center" placeholder="0" type="number">
                                </div>
                            </div> 
                        </div>
                        <!-- costo estimado  -->

                    </div>
                    <!------- Otros planes ------->                      
                    
                </div>  
                <!--  --> 

            </div>
            <!-- Activos -->

            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-outline-primary" type="submit" @click="enviarActivosDeudas">Actualizar</button>
            </div>
        </div>
    </div>
</div>