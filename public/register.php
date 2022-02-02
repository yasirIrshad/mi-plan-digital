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
    </style>
</head>


<body class="fixed-left">
    <div id="appRegister" style="height: 100vh; display: flex; justify-content: center;">

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

        <!-- Begin page -->
        <div class="" style="align-self: center;">

            <div class="container">             
                <div class="card mb-0">
                    <div class="card-body p-5">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="d-flex flex-column">
                                    
                                    <div class="">
                                        <img src="./assets/images/login/X113.png" width="95%" class="loginImg" alt="">
                                    </div>
                                
                                </div>
                            </div>

                            <div class="col-lg-5 offset-lg-1">                     
                                <div class="p-2">
                                    <div class="d-flex justify-content-center">
                                        <a href="index.php" class="logo logo-admin">
                                            <img src="assets/images/login/X85.png" height="45" alt="logo">
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-start">
                                        <h4 class="text-muted float-right font-18 mt-4">Registro</h4>
                                    </div>
                                </div>

                                <div class="p-2">
                                    <form class="form-horizontal m-t-20" @submit="register">

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="email" required="" placeholder="Email" v-model.lazy.trim="email">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control" type="password" required="" placeholder="Password" v-model.lazy="password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12 row">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                    <label class="custom-control-label font-weight-normal" for="customCheck1">
                                                        I accept 
                                                        <a href="#" class="text-primary">Terms and Conditions</a>   
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group text-center row m-t-20">
                                            <div class="col-12">
                                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">
                                                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true" v-if="isLoading"></span>
                                                    {{ isLoading ? 'Loading...' : 'Register' }}
                                                </button>
                                            </div>
                                        </div>

                                        <div class="form-group m-t-10 mb-0 row">
                                            <div class="col-12 m-t-20 text-center">
                                                <a href="login.php" class="text-muted">Ya tienes una cuenta?</a>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
                <!-- end row -->
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
    
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>

    <!-- Add Firebase products that you want to use -->
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-functions.js"></script>

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

    <!-- App Auth js -->
    <script src="assets/js/register.js"></script>

</body>

</html>