<!-- <div class="col-md-4"> -->
    <!-- <div class="float-right d-none d-md-block"> -->
    <div class="float-right d-md-block">
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img style="margin-left: 3px; margin-right: 10px;" src="https://img.icons8.com/windows/18/FFFFFF/pencil.png"/>
                Editar datos
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#perfilesModal">
                    <img style="margin-left: 3px; margin-right: 10px;" src="https://img.icons8.com/windows/18/707070/settings--v1.png"/>
                    Perfil
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ingresosModal">
                    <img style="margin-left: 3px; margin-right: 10px;" src="https://img.icons8.com/windows/18/707070/receive-cash.png"/>
                    Ingresos
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#egresosModal">
                    <img style="margin-left: 3px; margin-right: 10px;" src="https://img.icons8.com/windows/18/707070/card-in-use.png"/>
                    Egresos
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#activosDeudasModal">
                    <img style="margin-left: 3px; margin-right: 10px;" src="https://img.icons8.com/windows/18/707070/safe.png"/>
                    Activos y deudas
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#planesVidaModal">
                    <img style="margin-left: 3px; margin-right: 10px;" src="https://img.icons8.com/windows/18/707070/test-passed.png"/>
                    Planes de vida
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#presupuestoModal">
                    <img style="margin-left: 3px; margin-right: 10px;" src="https://img.icons8.com/windows/18/707070/promotion-budget.png"/>
                    Presupuesto
                </a>
            </div>
        </div>
    </div>
<!-- </div> -->
<!-- Vue js cdn -->
<script src="https://cdn.jsdelivr.net/npm/vue@2"></script>


<!-- Perfiles Modal Start -->
<?php
    require_once '../components/perfiles.php'
?> 
<!-- Perfiles Modal End-->

<!-- Ingresos Modal Start -->
<?php
    require_once '../components/ingresos.php'
?> 
<!-- Ingresos Modal End-->

<!-- Egresos Modal Start -->
<?php
    require_once '../components/egresos.php'
?> 
<!-- Egresos Modal End-->

<!-- Activos deudas Modal Start -->
<?php
    require_once '../components/activos_y_deudas.php'
?> 
<!-- Activos deudas Modal End-->

<!-- Activos deudas Modal Start -->
<?php
    require_once '../components/planes_de_vida.php'
?> 
<!-- Activos deudas Modal End-->

<!-- Activos deudas Modal Start -->
<?php
    require_once '../components/presupuesto.php'
?> 
<!-- Activos deudas Modal End-->

<script src="../assets/js/perfiles.js"></script>
<script src="../assets/js/ingresos.js"></script>
<script src="../assets/js/egresos.js"></script>
<script src="../assets/js/activosDeudas.js"></script>
<script src="../assets/js/presupuesto.js"></script>