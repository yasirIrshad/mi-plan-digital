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

                        <div class="row">
                            <div class="col-12 d-flex align-items-center justify-content-center" style="height: 81vh">
                                <div class="card col-md-12 col-xs-12 col-xs-12 m-b-30" style="margin: 0 auto;">
                                    <div class="card-body row d-flex justify-content-center">
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
                                                            <a class="text-center col-sm-12 col-xs-12" @click="tipoAvatar = 'titular'" 
                                                            data-toggle="modal" data-target="#avatarModal1" href="javascript:void(0);">Cambiar Avatar</a>
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
                                                                <input class="form-check-input" style="margin-top: 4px;" type="radio" 
                                                                name="estadoCivil" value="soltero" v-model="titular.estado_civil" checked>
                                                                <label class="form-check-label" for="soltero">Soltero(a)</label>
                                                            </div>   
                                                            <div class="form-check">
                                                                <input class="form-check-input" style="margin-top: 4px;" type="radio" name="estadoCivil" 
                                                                value="casado" v-model="titular.estado_civil">
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
                                                            <a class="text-center col-sm-12 col-xs-12" @click="tipoAvatar = 'pareja'" data-toggle="modal" data-target="#avatarModal1" href="javascript:void(0);">Cambiar Avatar</a>
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

    <script src="../assets/js/perfiles.js"></script>

</body>

</html>