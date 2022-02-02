<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <title>Mi plan digital</title>
    <meta content="Admin Dashboard" name="description" />
    <meta content="ThemeDesign" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="../assets/images/logosq.png">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

    <style>
        .content {
            margin-top: 70px;
            margin-bottom: 63px;
            padding: 0 15px;
        }

        .header-paragraph {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .header-text-holder {
            display: flex;
            justify-content: center;
            margin-right: 50px;
            margin-top: 15px;
        }

        .header-text-holder .header-icon {
            display: flex;
            width: 40px;
            height: 40px;
            margin-right: 10px;
            background-image: url('../assets/images/chat/chatbot.png');
            background-position: center center;
            background-size: contain;
            background-repeat: no-repeat;
        }

        .header-text-holder .header-text {
            max-width: 315px;
            font-size: 16px;
            font-weight: 500;
            color: #212529;
            text-align: center;
        }

        .header-paragraph .header-bottom-text {
            max-width: 415px;
            margin: 5px auto 0;
        }

        .header-paragraph .header-bottom-text p {
            font-size: 13px;
            font-weight: 300;
            color: #707070;
            margin: 5px auto 0;
            text-align: center;
        }

        #cd-timeline {
            margin-top: 1em;
        }

        #cd-timeline::before {
            height: 90%;
        }

        .welcome-page-card-holder {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .welcome-page-card-holder .text-holder {
            display: flex;
            flex-direction: column;
            flex: 1 0 0;
            align-items: flex-end;
            justify-content: center;
        }

        .welcome-page-card-holder .text-holder p {
            text-align: end;
        }

        .welcome-page-card-holder.right .text-holder {
            align-items: flex-start;
        }

        .welcome-page-card-holder.right .text-holder p {
            text-align: start;
        }

        .welcome-page-card-holder .icon {
            display: flex;
            width: 130px;
        }

        .welcome-page-card-holder.right.coffe .text-holder {
            display: block;
        }

        .welcome-page-card-holder.coffe .icon {
            display: flex;
            width: 30px;
        }

        .cd-timeline-block.last {
            display: flex;
            justify-content: center;
        }

        ul.dashed {
            list-style-type: none;
            padding-inline-start: 10px;
        }

        ul.dashed>li {
            text-indent: -5px;
        }

        ul.dashed>li:before {
            content: "-";
            margin: 0 5px 0 0;
        }

        @media only screen and (min-width: 576px) {
            .welcome-page-card-holder {
                flex-direction: row;
            }

            .welcome-page-card-holder.coffe {
                align-items: flex-start;
            }
        }

        @media only screen and (min-width: 992px) {
            .cd-timeline-block.last .cd-timeline-content {
                max-width: 550px;
            }
        }
    </style>
</head>


<body class="fixed-left">
    <div id="appPages">

        
        <!-- Loader Start -->
        <?php
            require_once '../components/loader.php'
        ?>
        <!-- Loader End -->

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Start content -->
            <div class="content">

                <!-- Top Bar Start -->
                <div class="topbar d-flex justify-content-between">

                    <nav class="navbar-custom d-flex justify-content-between w-100">

                        <div class="topbar-left">
                            <div class="text-center">
                                <a href="index.html" class="logo"><img src="../assets/images/X86.png" height="35" alt="logo"></a>
                            </div>
                        </div>

                        <ul class="list-inline mb-0">

                            <li class="list-inline-item dropdown notification-list nav-user">
                                <a class="nav-link dropdown-toggle arrow-none waves-effect" data-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="false" aria-expanded="false">
                                    <img src="../assets/images/users/avatar-6.jpg" alt="user" class="rounded-circle">
                                    <span class="d-none d-md-inline-block ml-1">
                                        David M. Bailey 
                                        <i class="mdi mdi-chevron-down"></i> 
                                    </span>
                                </a>
                                <div id="appLogout" class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown">
                                    <a class="dropdown-item" id="showAccountCard" href="#">
                                        <i class="dripicons-user text-muted"></i> 
                                        Mi cuenta
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" v-on:click="logOut">
                                        <i class="dripicons-exit text-muted"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                            <!--------------------------- card mi cuenta Start ---------------------->
                            <?php
                                require_once '../components/mi_cuenta.php'
                            ?>
                            <!--------------------------- card mi cuenta End ---------------------->

                            <!-- --------------------------------- -->                         

                        </ul>


                    </nav>

                </div>
                <!-- avatar modal Start -->
                <?php
                    require_once '../components/avatar_modal.php'
                ?>
                <!-- avatar modal End --> 
                <!-- Top Bar End -->

                <div class="page-content-wrapper">

                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="header-paragraph">
                                    <div class="header-text-holder">
                                        <div class="header-icon"></div>
                                        <div class="header-text">Hola Fabio! Bienvenido a Mi Plan Digital, tu planificador financiero virtual</div>
                                    </div>
                                    <div class="header-bottom-text">
                                        <p>Te ayudaremos a conocer y entender tu economía personal, a definir tus metas financieras y como las puedes hacer realidad en solo 3 pasos:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">

                            <div class="col-md-12">
                                <section id="cd-timeline" class="cd-container">
                                    <div class="cd-timeline-block">

                                        <div class="cd-timeline-content p-3">
                                            <div class="welcome-page-card-holder">
                                                <div class="text-holder mr-4">
                                                    <h3>Paso 1: Conocernos</h3>
                                                    <p class="mb-0 text-muted">Lo primero es tener un chat con tu asesor virtual para que le cuentes de ti, tu familia, tu estilo de vida, tu apetito de riesgo y tus finanzas.</p>
                                                </div>
                                                <img class="icon mt-3 mt-sm-0" src="../assets/images/X55.png" alt="">
                                            </div>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">

                                        <div class="cd-timeline-content p-3">
                                            <div class="welcome-page-card-holder right">
                                                <img class="icon mb-3 mb-sm-0" src="../assets/images/X58.png" alt="">
                                                <div class="text-holder ml-4">
                                                    <h3>Paso 2: Planes de vida</h3>
                                                    <p class="mb-0 text-muted">Todos tenemos planes a futuro: La educación de nuestros hijos, comprar una casa o asegurar una jubilación económicamente tranquila. Acá nos contarás cuales son tus planes.</p>
                                                </div>
                                            </div>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block">

                                        <div class="cd-timeline-content p-3">
                                            <div class="welcome-page-card-holder">
                                                <div class="text-holder mr-4">
                                                    <h3>Paso 3: Resultados</h3>
                                                    <p class="mb-0 text-muted">Revisar tus resultados mediante tableros de control, diseñados para que puedas gestionar tus indicadores de salud financiera, obtener sugerencias, armar tu presupuesto y mucho mas.</p>
                                                </div>
                                                <img class="icon mt-3 mt-sm-0" src="../assets/images/X59.png" alt="">
                                            </div>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->

                                    <div class="cd-timeline-block last">

                                        <div class="cd-timeline-content p-3">
                                            <div class="welcome-page-card-holder right coffe">
                                                <img class="icon mb-3 mb-sm-0" src="../assets/images/X4.png" alt="">
                                                <div class="text-holder ml-4">
                                                    <h3>Antes de empezar:</h3>
                                                    <ul class="m-b-20 text-muted dashed">
                                                        <li>El paso 1 y 2 te tomaran cerca de 45 minutos.</li>
                                                        <li>Si deseas cambiar un dato ya ingresado; no te preocupes, podrás editarlo después.</li>
                                                        <li>Si durante el proceso debes parar; no te preocupes puedes retomarlo después donde lo dejaste.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-center">
                                                <a href="planes_de_vida.php">
                                                    <button class="btn btn-primary">Empecemos</button>
                                                </a>                                                
                                            </div>
                                        </div> <!-- cd-timeline-content -->
                                    </div> <!-- cd-timeline-block -->
                                </section> <!-- cd-timeline -->
                            </div>
                        </div><!-- Row -->

                    </div><!-- container fluid -->

                </div> <!-- Page content Wrapper -->

            </div> <!-- content -->

        </div>
        <!-- END wrapper -->

    </div>
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>
    <!-- Scripts Start -->
    <?php
        require_once '../components/scripts.php'
    ?>
    <!-- Scripts End -->

</body>

</html>