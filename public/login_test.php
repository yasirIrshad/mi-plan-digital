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

    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <style>
        .icon-app {
            display: flex;
            position: absolute;
        }

        .login-img-holder {
            display: flex;
            flex: 0 0 400px;
            max-width: 400px;
        }

        .login-img-holder img {
            width: 100%;
        }

        @media (max-width: 600px) {
            .col-xs-12 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }
    </style>
</head>


<body class="fixed-left" >
    <div id="appLogin">
    
        <div id="wrapper">

        
            <!-- Loader -->
            <div id="preloader">
                <div id="status">
                    <div class="spinner">
                        <div class="rect1"></div>
                        <div class="rect2"></div>
                        <div class="rect3"></div>
                        <div class="rect4"></div>
                        <div class="rect5"></div>
                    </div>
                </div>
            </div>

            <div class="content-page" style="margin-left: 0">

                <!-- Start content -->
                <div class="content">

                    <!-- Begin page -->
                    <div class="page-content-wrapper ">

                        <div class="container-fluid">
                            
                            <!-- end row -->
                            <div class="row">
                                <div class="col-12 d-flex align-items-center justify-content-center">
                                    <div class="card col-md-8 col-xs-12 col-xs-12 m-b-30" style="margin: 0 auto;">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between row col-12">
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="">
                                                        <img src="./assets/images/login/X54.png" width="95%" class="loginImg" alt="">
                                                    </div>
                                                    <p class="text-muted mt-3 mb-4">La herramienta para que tomes control de tu dinero. Organiza tus finanzas personales, define tus planes a futuro y la forma en que puedes hacerlos realidad.</p>
                                            
                                                </div>
                                                <div class="col-md-6 col-sm-12 col-xs-12">
                                                    <div class="p-2">
                                                        <div class="d-flex justify-content-center">
                                                            <a href="index.html" class="logo logo-admin">
                                                                <img src="assets/images/login/X85.png" height="45" alt="logo">
                                                            </a>
                                                        </div>
                                                        <div class="d-flex justify-content-start">
                                                            <h4 class="text-muted float-right font-18 mt-4">Iniciar sesión</h4>
                                                        </div>
                                                        
                                                        
                                                    </div>

                                                    <div class="p-2">
                                                        <form class="form-horizontal m-t-20" @submit="logIn">

                                                            <div class="form-group row">
                                                                <div class="col-12">
                                                                    <input class="form-control" type="text" required="" placeholder="Email" v-model.lazy.trim="email">
                                                                </div>
                                                            </div>

                                                            <div class="form-group row">
                                                                <div class="col-12 mb-4">
                                                                    <input class="form-control" type="password" required="" placeholder="Password" v-model.lazy="password">
                                                                </div>
                                                            </div>

                                                            <div class="form-group text-center row mt-5">
                                                                <div class="col-12">
                                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                                                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" v-if="isLoading"></span>
                                                                        {{ isLoading ? 'Cargando...' : 'Ingresar' }}
                                                                    </button>
                                                                </div>
                                                            </div>

                                                            <div class="form-group m-t-10 mb-0 row">
                                                                <div class="col-sm-7 m-t-20">
                                                                    <a href="pages-recoverpw.html" class="text-muted"><i class="mdi mdi-lock"></i> ¿Olvidaste tu contraseña?</a>
                                                                </div>
                                                                <div class="col-sm-5 m-t-20">
                                                                    <a href="register.php" class="text-muted"><i class="mdi mdi-account-circle"></i> Crear una cuenta</a>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    


    <!-- jQuery  -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/modernizr.min.js"></script>
    <script src="assets/js/detect.js"></script>
    <script src="assets/js/fastclick.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/jquery.blockUI.js"></script>
    <script src="assets/js/waves.js"></script>
    <script src="assets/js/jquery.nicescroll.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

    <!-- Vue js -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
    <!-- <script src="/__/firebase/8.2.7/firebase-app.js"></script> -->
    <!-- Add Firebase products that you want to use -->
    <!-- <script src="/__/firebase/8.2.7/firebase-auth.js"></script> -->
    <!-- Initialize Firebase -->
    <!-- <script src="/__/firebase/init.js?useEmulator=true"></script> -->
    <!-- <script src="/__/firebase/init.js"></script> -->
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>

    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-functions.js"></script>

    <!-- <script>
        // Your web app's Firebase configuration
        var firebaseConfig = {
        apiKey: "AIzaSyDDpcQ5AHMHZv7Z_6yHkO7qFzd8je34kB0",
        authDomain: "planea-digital.firebaseapp.com",
        databaseURL: "https://planea-digital.firebaseio.com",
        projectId: "planea-digital",
        storageBucket: "planea-digital.appspot.com",
        messagingSenderId: "824588272099",
        appId: "1:824588272099:web:92c0509e105f8200ce20d6"
        };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script> -->

    <!-- App Auth js -->
    <script src="assets/js/login.js"></script>
    <script src="assets/js/firebase.js"></script>

</body>

</html>