<div class="modal fade" id="perfilesModal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog" id="perfiles" style="max-width: 1200px;">
        <div class="modal-content col-xs-12">
            <div class="modal-header">
                <div class="col-11">
                    <h3 class="modal-title text-center pl-5"><a href="javascript:void(0)">PERFILES</a></h3>
                </div>
                
                <div class="col-1">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>

            <div class="modal-body row d-flex justify-content-center">
                <!-- titular Start-->
                <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center">
                    <div class="row col-12 marginBottom">
                        <p style="margin-bottom: 0; font-size: 17px; font-weight: bold;">Datos del titular</p>
                    </div>

                    <div class="row col-12">
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 d-flex">
                            <div class="col-12 d-flex justify-content-center mb-3 align-items-center">
                                <div class="row d-flex justify-content-center">
                                    <img src="../assets/images/avatars/sin_avatar.png" id="avatarTitular" alt="avatar" height="70" style="border-radius: 50%; margin: 0 auto">
                                    <a class="text-center col-sm-12 col-xs-12" data-toggle="modal" 
                                    data-target="#avatarModal2" href="javascript:void(0);" @click="tipoAvatar = 'titular'">
                                        Cambiar Avatar
                                    </a>
                                </div>                                            
                            </div>
                        </div>
                    
                        <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">
                            
                            <div class="form-group row">
                                <div class="row col-12">
                                    <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Nombre</label>
                                    <input class="form-control col-md-6 col-sm-8 col-xs-8" type="name" placeholder="Nombre" v-model="titular.nombre" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="row col-12">
                                    <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Apellidos</label>
                                    <input class="form-control col-md-6 col-sm-8 col-xs-8" type="name" placeholder="Apellidos" v-model="titular.apellidos" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="row col-12">
                                    <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Fecha de nacimiento</label>
                                    <input class="form-control col-md-6 col-sm-8 col-xs-8" type="date" placeholder="Fecha de nacimiento" v-model="titular.fecha_nacimiento" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="row col-12">
                                    <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Ciudad donde vives</label>
                                    <select class="custom-select col-md-6 col-sm-8 col-xs-8" style="font-size: 13px;" v-model="titular.cuidad">
                                        <option value="Santo Domingo">Santo Domingo</option>
                                        <option value="Santo Domingo Este">Santo Domingo Este</option>
                                        <option value="Santo Domingo Norte">Santo Domingo Norte</option>
                                        <option value="Santo Domingo Oeste">Santo Domingo Oeste</option>
                                        <option value="Boca Chica">Boca Chica</option>
                                        <option value="Los Alcarrizos">Los Alcarrizos</option>
                                        <option value="Puerto Plata">Puerto Plata</option>
                                        <option value="La Vega">La Vega</option>
                                        <option value="San Pedro de Macorís">San Pedro de Macorís</option>
                                        <option value="La Romana">La Romana</option>
                                        <option value="San Francisco de Macoris">San Francisco de Macoris</option>
                                        <option value="San Cristóbal">San Cristóbal</option>
                                        <option value="Haina">Haina</option>
                                        <option value="Higüey">Higüey</option>
                                        <option value="Barahona">Barahona</option>
                                        <option value="Bonao">Bonao</option>
                                        <option value="San Juan">San Juan</option>
                                        <option value="Baní">Baní</option>
                                        <option value="Moca">Moca</option>
                                        <option value="Azua">Azua</option>
                                        <option value="Mao">Mao</option>
                                        <option value="Punta Cana">Punta Cana</option>
                                        <option value="Cotuí">Cotuí</option>
                                        <option value="Esperanza">Esperanza</option>
                                        <option value="Villa Altagracia">Villa Altagracia</option>
                                        <option value="Hato Mayor">Hato Mayor</option>
                                        <option value="Nagua">Nagua</option>
                                        <option value="Villa Bisonó">Villa Bisonó</option>
                                        <option value="Jarabacoa">Jarabacoa</option>
                                        <option value="Constanza">Constanza</option>
                                        <option value="Consuelo">Consuelo</option>
                                        <option value="Pedro Brand">Pedro Brand </option>
                                        <option value="El Seibo">El Seibo</option>
                                        <option value="Tamboril">Tamboril</option>
                                        <option value="Las Matas de Farfán">Las Matas de Farfán</option>
                                        <option value="San José de Ocoa">San José de Ocoa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="row col-12">
                                    <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Sexo</label>
                                    <div class="form-check mr-2 d-flex align-items-baseline">
                                        <input class="form-check-input" v-model="titular.sexo" style="margin-top: 4px;" type="radio" name="sexo" value="masculino">
                                        <label class="form-check-label" for="masculino">Masculino</label>
                                    </div>   
                                    <div class="form-check d-flex align-items-baseline">
                                        <input class="form-check-input" v-model="titular.sexo" style="margin-top: 4px;" type="radio" name="sexo" value="femenino" checked>
                                        <label class="form-check-label" for="femenino">Femenino</label>
                                    </div>                                         
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="row col-12">
                                    
                                    <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Estado civil</label>
                                    
                                    <div class="form-check mr-2">
                                        <input class="form-check-input" v-model="titular.estado_civil" style="margin-top: 4px;" type="radio" name="estadoCivil" value="soltero" checked>
                                        <label class="form-check-label" for="soltero">Soltero(a)</label>
                                    </div>   
                                    <div class="form-check">
                                        <input class="form-check-input" v-model="titular.estado_civil" style="margin-top: 4px;" type="radio" name="estadoCivil" value="casado">
                                        <label class="form-check-label" for="casado">Casado(a)</label>
                                    </div>                                         
                                                                            
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- titular End-->

                <!-- pareja Start-->
                <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex d-flex justify-content-center" v-if="titular.estado_civil == 'casado'">
                
                    <div class="row col-12 marginTop marginBottom">
                        <p style="margin-bottom: 0; font-size: 17px; font-weight: bold;">Datos de la pareja</p>
                    </div>

                    <div class="row col-12 changeTop">
                        <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 d-flex">
                            <div class="col-12 d-flex justify-content-center align-items-center marginBottom">
                                <div class="row d-flex justify-content-">
                                    <img src="../assets/images/avatars/sin_avatar.png" id="avatarPareja" alt="avatar" height="70" style="border-radius: 50%; margin: 0 auto">
                                    <a class="text-center col-sm-12 col-xs-12" @click="tipoAvatar = 'pareja'" data-toggle="modal" data-target="#avatarModal2" href="javascript:void(0);">Cambiar Avatar</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-9 col-lg-9 col-sm-12 col-xs-12">                                    

                            <div class="form-group row">
                                <div class="row col-12">
                                    <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Nombre</label>
                                    <input class="form-control col-md-6 col-sm-8 col-xs-8" type="name" placeholder="Nombre" v-model="pareja.nombre" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="row col-12">
                                    <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Apellidos</label>
                                    <input class="form-control col-md-6 col-sm-8 col-xs-8" type="last_name" placeholder="Apellidos" v-model="pareja.apellidos" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="row col-12">
                                    <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Fecha de nacimiento</label>
                                    <input class="form-control col-md-6 col-sm-8 col-xs-8" type="date" placeholder="Fecha de nacimiento" v-model="pareja.fecha_nacimiento" required>
                                </div>
                            </div>                                        

                            <div class="form-group row">
                                <div class="row col-12">
                                    <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Sexo</label>
                                    <div class="form-check mr-2">
                                        <input class="form-check-input d-flex align-items-baseline" style="margin-top: 4px;" type="radio" name="parejaMasculino" value="masculino" v-model="pareja.sexo">
                                        <label class="form-check-label" for="parejaMasculinomult">Masculino</label>
                                    </div>   
                                    <div class="form-check">
                                        <input class="form-check-input d-flex align-items-baseline" style="margin-top: 4px;" type="radio" name="parejaFemenino" value="femenino" v-model="pareja.sexo" checked>
                                        <label  class="form-check-label" for="parejaFemenino">Femenino</label>
                                    </div>                                         
                                </div>
                            </div>

                        </div> 
                    </div>
                </div>
                <!-- pareja End-->

                <!-- hijos Start-->
                <div class="row col-12 mt-2" style="padding-right: 0; border-top: .5px solid #dee2e6;">
                    <div class="row col-12 d-flex justify-content-center marginTop marginBottom" style="margin-top: 10px;">
                        <p style="margin-bottom: 0; font-size: 17px; font-weight: bold;">Datos del los hijos</p>
                    </div>

                    <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center">
                        <label class="text-center col-12 mb-3" style="font-size: 16px;">Hijo 1</label>
                        
                        <div class="form-group row col-12">
                            <div class="row col-12">
                                <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Nombre</label>
                                <input class="form-control col-md-6 col-sm-8 col-xs-8" type="name" placeholder="Nombre">
                            </div>
                        </div>

                        <div class="form-group row col-12">
                            <div class="row col-12">
                                <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Fecha de nacimiento</label>
                                <input class="form-control col-md-6 col-sm-8 col-xs-8" type="date" placeholder="Fecha de nacimiento">
                            </div>
                        </div>

                    </div>                                

                    <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center">
                        <label class="text-center col-12 mb-3" style="font-size: 16px;">Hijo 2</label>
                        
                        <div class="form-group row col-12">
                            <div class="row col-12">
                                <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Nombre</label>
                                <input class="form-control col-md-6 col-sm-8 col-xs-8" type="name" placeholder="Nombre">
                            </div>
                        </div>

                        <div class="form-group row col-12">
                            <div class="row col-12">
                                <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Fecha de nacimiento</label>
                                <input class="form-control col-md-6 col-sm-8 col-xs-8" type="date" placeholder="Fecha de nacimiento">
                            </div>
                        </div>

                    </div>
                        
                    <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex d-flex justify-content-center">
                        <label class="text-center col-12 mb-3" style="font-size: 16px;">Hijo 3</label>
                        
                        <div class="form-group row col-12">
                            <div class="row col-12">
                                <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Nombre</label>
                                <input class="form-control col-md-6 col-sm-8 col-xs-8" type="name" placeholder="Nombre">
                            </div>
                        </div>

                        <div class="form-group row col-12">
                            <div class="row col-12">
                                <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Fecha de nacimiento</label>
                                <input class="form-control col-md-6 col-sm-8 col-xs-8" type="date" placeholder="Fecha de nacimiento">
                            </div>
                        </div>

                    </div>
                        
                    <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex d-flex justify-content-center">
                        <label class="text-center col-12 mb-3" style="font-size: 16px;">Hijo 4</label>
                        
                        <div class="form-group row col-12">
                            <div class="row col-12">
                                <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Nombre</label>
                                <input class="form-control col-md-6 col-sm-8 col-xs-8" type="name" placeholder="Nombre">
                            </div>
                        </div>

                        <div class="form-group row col-12">
                            <div class="row col-12">
                                <label class="col-md-6 col-sm-4 col-xs-4 d-flex align-items-center" style="margin-bottom: 0;">Fecha de nacimiento</label>
                                <input class="form-control col-md-6 col-sm-8 col-xs-8" type="date" placeholder="Fecha de nacimiento">
                            </div>
                        </div>

                    </div>                        
                    
                </div>                
                <!-- hijos End-->

                <!-- avatar modal Start -->
                <div class="modal fade" id="avatarModal2" data-backdrop="static" data-keyboard="false" 
                tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content col-xs-12 avatar-modal" style="max-height: 600px; overflow: auto;">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Seleccione un avatar</h5>
                                <button type="button" class="close" @click="hideAvatarModal">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="col col-12">
                                    <p style="margin-bottom: 5px; font-weight: bold">Sin Avatar</p>
                                    <div class="d-flex justify-content-between ">
                                        <div>
                                            <img class="hoverAvatar" src="../assets/images/avatars/sin_avatar.png" height="50" alt="Sin Avatar" @click="cambiarAvatar">
                                        </div>
                                        <div class="d-flex align-items-center">                                    
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col col-12 mt-2">
                                    <p style="margin-bottom: 5px; font-weight: bold">Avatar</p>
                                    <div class="d-flex justify-content-between ">
                                        <div>
                                            <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/001-granddaughter.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/002-turistico.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/032-niece.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/031-mother.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                            <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/042-father.png" height="50" alt="Avatar" @click="cambiarAvatar" >

                                            <div id="Avatar" class="collapse">
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/048-boy-1.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/049-granddaughter-1.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/050-grandpa-1.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/053-father-1.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/054-sister.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/055-aunt-1.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/056-man-1.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/060-cousin.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/120-hombre.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/121-mujer.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/133-mujer-9.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/135-hombre-4.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/137-hombre-5.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/139-chica.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" data-toggle="collapse" class="verMas" data-target="#Avatar" style="cursor: pointer;"  @click="mostrar">Ver mas..</a>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="col col-12 mt-2">
                                    <p style="margin-bottom: 5px; font-weight: bold">Avatar deporte favorito</p>
                                    <div class="d-flex justify-content-between ">
                                        <div>
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/007-karate.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/011-cyclist.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/012-swimmer-1.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/016-bodybuilding.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/063-swimmer.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                            
                                            <div id="AvatarDeporte" class="collapse">
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/064-weightlifting.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/065-football-player.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/066-football-player-1.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/067-squash.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/069-baseball.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/071-athlete.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/072-surfer.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/073-equestrian-1.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/074-tennis-player.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/075-golfer.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/077-gymnastics.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/078-climber.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/079-taekwondo.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/081-boxing.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/082-boxer.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" data-toggle="collapse" class="verMas" data-target="#AvatarDeporte" style="cursor: pointer;"  @click="mostrar">Ver mas..</a>
                                        </div>
                                    </div>        
                                </div>

                                <div class="col col-12 mt-2">
                                    <p style="margin-bottom: 5px; font-weight: bold">Avatar mitologico</p>
                                    <div class="d-flex justify-content-between ">
                                        <div>
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/002-mermaid.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/001-jupiter-2.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/003-yeti.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/004-juno.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/019-wizard.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            
                                            <div id="AvatarMitologico" class="collapse">
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/026-fairy.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/027-cyclops.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/028-elf.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/029-angel.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/030-alien.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/140-neptuno.png" height="50" alt="Avatar" @click="cambiarAvatar" >                                        
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/141-aquiles.png" height="50" alt="Avatar" @click="cambiarAvatar" >                                        
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/142-demeter.png" height="50" alt="Avatar" @click="cambiarAvatar" >                                        
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" data-toggle="collapse" class="verMas" data-target="#AvatarMitologico" style="cursor: pointer;" @click="mostrar">Ver mas...</a>
                                        </div>
                                    </div>        
                                </div>

                                <div class="col col-12 mt-2">
                                    <p style="margin-bottom: 5px; font-weight: bold">Avatar animal favorito</p>
                                    <div class="d-flex justify-content-between ">
                                        <div>
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/021-dog.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/023-bear.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/086-fox.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/087-zebra.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            <img class="mr-2 hoverAvatar" src="../assets/images/avatars/088-owl.png" height="50" alt="Avatar" @click="cambiarAvatar">
                                            
                                            <div id="AvatarAnimal" class="collapse">
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/091-wolf.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/092-lion.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/094-rabbit.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/095-ferret.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/097-turtle.png" height="50" alt="Avatar" @click="cambiarAvatar" >
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/098-hedgehog.png" height="50" alt="Avatar" @click="cambiarAvatar" >                                        
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/102-rhino.png" height="50" alt="Avatar" @click="cambiarAvatar" >                                        
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/104-koala.png" height="50" alt="Avatar" @click="cambiarAvatar" >                                        
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/108-deer.png" height="50" alt="Avatar" @click="cambiarAvatar" >                                        
                                                <img class="mr-2 mt-1 hoverAvatar" src="../assets/images/avatars/116-octopus.png" height="50" alt="Avatar" @click="cambiarAvatar" >                                        
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <a href="javascript:void(0)" data-toggle="collapse" class="verMas" data-target="#AvatarAnimal" style="cursor: pointer;" @click="mostrar">Ver mas...</a>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-primary" data-target="#avatarModal2" 
                                 type="button" @click="cancelarCambioAvatar">
                                    Cancelar
                                </button>
                                <button id="changeAvatar" class="btn btn-outline-primary" data-target="#avatarModal2" 
                                 type="button" @click="confirmarCambioAvatar">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- avatar modal End -->

                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-outline-primary" type="submit" @click="enviar">Actualizar</button>
            </div>
        </div>
    </div>
</div>