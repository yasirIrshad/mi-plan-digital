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
        <div class="content-page" style="margin-left: 0!important; background: white;">

            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <?php
                    require_once '../components/navbar.php'
                ?>
                <!-- Top Bar End -->

                <!-- Page content Wrapper -->
                <div class="page-content-wrapper" id="presupuesto">                   

                    <div class="row">
                        <div class="col-12 d-flex align-items-center" style="overflow:auto;">
                            <div class="col-md-12 col-xs-12 col-xs-12">                        
                                <div class="row d-flex justify-content-center">
                                    <div class="row col-md-6 col-lg-6 col-sm-12 col-xs-12 d-flex justify-content-center mt-5">
                                        <p style="font-size: 16px;">Por favor especifica los meses en los que por lo general se ejecutan las siguientes líneas de presupuesto.</p>
                                        <p style="font-size: 16px;">Selecciona cuantos meses apliquen; por ejemplo, si es un gasto anual, especifica un solo mes o si el gasto es en meses particulares, selecciona los meses que apliquen, el valor total se dividira exactamente entre los meses seleccionados:</p>

                                        <!-- Ingresos start -->
                                        <div class="form-group col-12 row" style="padding: 0;">
                                            <div class="justify-content-start col-md-12 col-xs-12" style="padding: 0;">
                                                <p style="font-size: 18px; color: #1ca7a6; margin-bottom: 0"><strong>Ingresos:</strong></p>
                                                <div class="row col-md-7 col-xs-12 d-flex justify-content-between" style="margin-left: 5px;">
                                                    <p style="font-size: 16px;">Comisiones Y Bonificaciones</p>
                                                    <p style="font-size: 16px;">RD$400,000/<small>anual</small></p>
                                                </div>
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
                                                <div class="row col-md-7 col-xs-12 d-flex justify-content-between" style="margin-left: 5px;">
                                                    <p style="font-size: 16px;">Seguro Casa</p>
                                                    <p style="font-size: 16px;">RD$400,000/<small>anual</small></p>
                                                </div>
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
                                                <div class="row col-md-7 col-xs-12 d-flex justify-content-between" style="margin-left: 5px;">
                                                    <p style="font-size: 16px;">Seguro Vida</p>
                                                    <p style="font-size: 16px;">RD$400,000/<small>anual</small></p>
                                                </div>
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
                                                <div class="row col-md-7 col-xs-12 d-flex justify-content-between" style="margin-left: 5px;">
                                                    <p style="font-size: 16px;">Seguro Vehiculo</p>
                                                    <p style="font-size: 16px;">RD$400,000/<small>anual</small></p>
                                                </div>
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
                                                <div class="row col-md-7 col-xs-12 d-flex justify-content-between" style="margin-left: 5px;">
                                                    <p style="font-size: 16px;">Mantenimiento Vehiculo</p>
                                                    <p style="font-size: 16px;">RD$10,000/<small>anual</small></p>
                                                </div>
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
                                                <div class="row col-md-7 col-xs-12 d-flex justify-content-between" style="margin-left: 5px;">
                                                    <p style="font-size: 16px;">Educación Propia</p>
                                                    <p style="font-size: 16px;">RD$30,000/<small>anual</small></p>
                                                </div>
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
                                                <div class="row col-md-7 col-xs-12 d-flex justify-content-between" style="margin-left: 5px;">
                                                    <p style="font-size: 16px;">Matricula Hijos</p>
                                                    <p style="font-size: 16px;">RD$400,000/<small>anual</small></p>
                                                </div>
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
                                                <div class="row col-md-7 col-xs-12 d-flex justify-content-between" style="margin-left: 5px;">
                                                    <p style="font-size: 16px;">Colegiatura Hijos</p>
                                                    <p style="font-size: 16px;">RD$400,000/<small>anual</small></p>
                                                </div>
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
                                                <div class="row col-md-7 col-xs-12 d-flex justify-content-between" style="margin-left: 5px;">
                                                    <p style="font-size: 16px;">Vacaciones</p>
                                                    <p style="font-size: 16px;">RD$10,000/<small>anual</small></p>
                                                </div>
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
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <!-- Scripts Start -->
    <?php
        require_once '../components/scripts.php'
    ?>
    <!-- Scripts End -->

    

    

</body>

</html>


<script src="../assets/js/perfiles.js"></script>
<script src="../assets/js/presupuesto.js"></script>