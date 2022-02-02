<!-- Top Bar Start -->
<div class="topbar">

    <!-- <div class="topbar-left	d-none d-lg-block"> -->
    <div class="topbar-left d-none d-lg-block">
        <div class="text-center d-flex justify-content-center align-items-center">
            <a href="index.html" class="logo">
                <img src="../assets/images/X84-2.png" width="40" height="30" alt="logo">     
            </a> 
            <p style="color: #ffff; font-size: 14px; margin: 0 0 0 0">Mi plan digital</p>            
        </div>
    </div>

    <nav class="navbar-custom">

        <ul class="list-inline float-right mb-0">
            
            <li class="list-inline-item dropdown notification-list">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" id="notiIcon"  href="#" role="button">
                    <img src="https://img.icons8.com/windows/24/FFFFFF/appointment-reminders--v1.png"/>
                </a>                            
            </li>


            <li class="list-inline-item dropdown notification-list nav-user">
                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                aria-haspopup="false" aria-expanded="false">
                    <img src="../assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                    <span class="d-none d-md-inline-block ml-1">David M. Bailey <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div id="appLogout" class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                <a class="dropdown-item" id="showAccountCard" href="#">
                    <img src="https://img.icons8.com/windows/18/000000/user.png"/>
                    Mi cuenta
                </a>
                    
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" v-on:click="logOut"><img src="https://img.icons8.com/windows/18/000000/exit.png"/> Cerrar sessión</a>                    
                </div>        
            </li>
            <!--------------------------- card mi cuenta Start ---------------------->
            <?php
                require_once '../components/mi_cuenta.php'
            ?>
            <!--------------------------- card mi cuenta End ---------------------->

            <!-- Lista de notificaciones Start -->
            <?php
                require_once '../components/lista_notificaciones.php'
            ?>
            <!-- Lista de notificaciones End -->  
        </ul>

        <ul class="list-inline menu-left mb-0">
            <li class="list-inline-item">
                <button type="button" class="button-menu-mobile open-left waves-effect">
                    <img src="https://img.icons8.com/windows/24/FFFFF/menu--v1.png"/>
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