<!DOCTYPE html>
<html lang="en">
<?php
    require_once '../components/head.php';
?>

<body class="fixed-left" >
    

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
        <div class="content-page" id="presupuesto" style="margin-left: 0!important; background: white;">

            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <div class="topbar-left d-lg-block">
                        <div class="text-center">
                            <a href="index.html" class="logo"><img src="../assets/images/X86.png" height="35" alt="logo"></a>
                        </div>
                    </div>

                    <nav class="navbar-custom">

                        <!-- Search input -->

                        <ul class="list-inline float-right mb-0">

                            <li class="list-inline-item dropdown notification-list nav-user">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                aria-haspopup="false" aria-expanded="false">
                                    <img src="../assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                    <span class="d-none d-md-inline-block ml-1">David M. Bailey <i class="mdi mdi-chevron-down"></i> </span>
                                </a>
                                <div id="appLogout" class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <a class="dropdown-item" id="showAccountCard" href="#">
                                        <i class="dripicons-user text-muted"></i> 
                                        Mi cuenta
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" v-on:click="logOut"><i class="dripicons-exit text-muted"></i> Cerrar sessión</a>
                                </div>
                            </li>
                            <!--------------------------- card mi cuenta Start ---------------------->
                            <?php
                                require_once '../components/mi_cuenta.php'
                            ?>
                            <!--------------------------- card mi cuenta End ---------------------->
                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="list-inline-item">
                                <button type="button" style="opacity: 0;" class="button-menu-mobile open-left waves-effect">
                                    <i class="mdi mdi-menu"></i>
                                </button>
                            </li>
                        </ul>

                    </nav>

                </div>
                <!-- avatar modal Start -->
                <?php
                    require_once '../components/avatar_modal.php'
                ?>
                <!-- avatar modal End --> 
                <!-- Top Bar End -->

                <!-- Page content Wrapper -->
                <div class="page-content-wrapper ">

                    <!-- container fluid End-->
                    <div class="row" >

                        <div class="row">
                            <div class="col-12 d-flex align-items-center" style="overflow:auto;">
                                <div class="col-md-9 col-xs-12 col-xs-12">
                            
                                    <div class="row d-flex justify-content-center">
                                        <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center mt-5">
                                            <p style="font-size: 16px;">Por favor especifica los meses en los que por lo general se ejecutan las siguientes líneas de presupuesto.</p>
                                            <p style="font-size: 16px;">Selecciona cuantos meses apliquen; por ejemplo, si es un gasto anual, especifica un solo mes o si el gasto es en meses particulares, selecciona los meses que apliquen, el valor total se dividira exactamente entre los meses seleccionados:</p>

                                            <!-- Ingresos start -->
                                            <div class="form-group col-12 row" style="padding: 0;">
                                                <div class="justify-content-start col-md-12 col-xs-12" style="padding: 0;">
                                                    <p style="font-size: 18px; color: #1ca7a6; margin-bottom: 0"><strong>Ingresos:</strong></p>
                                                    <p style="font-size: 16px; margin-left: 10px">Comisiones Y Bonificaciones   <span class="ml-2">RD$400,000/<small>anual</small></span></p>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ene</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Abr</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jul</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Oct</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Feb</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">May</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ago</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Nov</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Mar</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jun</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Sep</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Dic</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Ingresos End -->

                                            <!-- Gastos start -->
                                            <div class="form-group col-12 row mt-4" style="padding: 0;">
                                                <div class="justify-content-start col-md-12 col-xs-12" style="padding: 0;">
                                                    <p style="font-size: 18px; color: #1ca7a6; margin-bottom: 0"><strong>Gastos:</strong></p>
                                                    <p style="font-size: 16px; margin-left: 10px">Seguro Casa   <span class="ml-5">RD$400,000/<small>anual</small></span></p>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ene</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Abr</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jul</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Oct</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Feb</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">May</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ago</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Nov</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Mar</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jun</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Sep</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Dic</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-12 row mt-4" style="padding: 0;">
                                                <div class="justify-content-start col-md-12 col-xs-12" style="padding: 0;">
                                                    <p style="font-size: 16px; margin-left: 10px">Seguro Vida    <span class="ml-5">RD$400,000/<small>anual</small></span></p>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ene</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Abr</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jul</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Oct</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Feb</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">May</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ago</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Nov</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Mar</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jun</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Sep</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Dic</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-12 row mt-4" style="padding: 0;">
                                                <div class="justify-content-start col-md-12 col-xs-12" style="padding: 0;">
                                                    <p style="font-size: 16px; margin-left: 10px">Seguro Vehiculo    <span class="ml-5">RD$400,000/<small>anual</small></span></p>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ene</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Abr</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jul</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Oct</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Feb</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">May</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ago</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Nov</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Mar</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jun</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Sep</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Dic</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-12 row mt-4" style="padding: 0;">
                                                <div class="justify-content-start col-md-12 col-xs-12" style="padding: 0;">
                                                    <p style="font-size: 16px; margin-left: 10px">Mantenimiento Vehiculo    <span class="ml-5">RD$10,000/<small>anual</small></span></p>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ene</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Abr</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jul</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Oct</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Feb</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">May</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ago</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Nov</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Mar</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jun</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Sep</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Dic</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-12 row mt-4" style="padding: 0;">
                                                <div class="justify-content-start col-md-12 col-xs-12" style="padding: 0;">
                                                    <p style="font-size: 16px; margin-left: 10px">Educación Propia    <span class="ml-5">RD$30,000/<small>mes</small></span></p>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ene</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Abr</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jul</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Oct</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Feb</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">May</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ago</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Nov</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Mar</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jun</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Sep</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Dic</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-12 row mt-4" style="padding: 0;">
                                                <div class="justify-content-start col-md-12 col-xs-12" style="padding: 0;">
                                                    <p style="font-size: 16px; margin-left: 10px">Matricula Hijos    <span class="ml-5">RD$400,000/<small>anual</small></span></p>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ene</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Abr</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jul</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Oct</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Feb</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">May</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ago</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Nov</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Mar</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jun</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Sep</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Dic</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-12 row mt-4" style="padding: 0;">
                                                <div class="justify-content-start col-md-12 col-xs-12" style="padding: 0;">
                                                    <p style="font-size: 16px; margin-left: 10px">Colegiatura Hijos    <span class="ml-5">RD$400,000/<small>anual</small></span></p>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ene</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Abr</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jul</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Oct</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Feb</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">May</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ago</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Nov</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Mar</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jun</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Sep</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Dic</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-12 row mt-4" style="padding: 0;">
                                                <div class="justify-content-start col-md-12 col-xs-12" style="padding: 0;">
                                                    <p style="font-size: 16px; margin-left: 10px">Vacaciones    <span class="ml-5">RD$10,000/<small>anual</small></span></p>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ene</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Abr</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jul</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Oct</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Feb</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">May</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Ago</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Nov</label>
                                                        </div>
                                                    </div>
                                                    <div class="row col-md-8 col-xs-12 d-flex justify-content-around">
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Mar</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Jun</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Sep</label>
                                                        </div>
                                                        <div class="form-check" style="width: 10px;">
                                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                            <label class="form-check-label" for="exampleCheck1">Dic</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group col-12 row mt-5">
                                                <div class="justify-content-start col-md-5 col-xs-12" style="padding: 0;">
                                                    <a href="javascript:void(0)">
                                                        <button class="btn btn-primary btn-block waves-effect waves-light" style="background: #1ca7a6; padding: 10px 0; border-radius: 5px" @click="isLoading = true">
                                                            <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" v-if="isLoading"></span>
                                                            {{ isLoading ? 'Cargando...' : 'Empecemos' }}
                                                        </button>
                                                    </a>
                                                </div>
                                            </div>
                                            <!-- Gastos End -->
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

            <!-- Footer Start -->
            <footer class="footer col-12" style="left: 0;">
                © 2019 - 2020 Zinzer <span class="d-none d-md-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesdesign.</span>
            </footer>
            <!-- Footer End -->

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper --> 


    <!-- Scripts Start -->
    <?php
        require_once '../components/scripts.php'
    ?>
    <!-- Scripts End -->

    <?php
        require_once '../components/bot.php'
    ?>

    
    

</body>

</html>

<script src="../assets/js/presupuesto.js"></script>