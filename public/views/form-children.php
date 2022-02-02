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

    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

    <style>
        .card-header {
            color: #6a91f0;
            font-weight: 400;
            background-color: transparent;
        }

        input[type="text"] {
            min-width: 180px;
        }
    </style>
</head>


<body>

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
    <div class="container-fluid" id="formChildren">

        <div class="row">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 offset-sm-1 offset-md-2 offset-lg-3">

                <div class="alert alert-danger mb-0 mt-3 mt-md-5" role="alert" v-if="showAuthMsg">
                    <strong>Oh seguridad!</strong> debe estar logueado para poder usar esta app.
                </div>

                <!-- <form class="mt-3 mt-md-5" v-if="!showAuthMsg"> -->

                    <div class="card">
                        <h5 class="card-header mt-0">HIJOS DEPENDIENTES</h5>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="example-text-input">¿Cuantos hijos tienes?</label>
                                <div class="mt-2">
                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                        <label class="btn btn-outline-primary waves-effect waves-light" v-for="(option, i) in radioOptions">
                                            <input type="radio" name="options" v-bind:id="'option' + i" v-bind:value="i" v-on:click="radioChanged($event, i)">{{option}}
                                        </label>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card mt-2 mt-md-4" v-if="validChildren">
                        <div class="card-body">

                            <div class="form-group">

                                <table class="table table-responsive-sm table-borderless">
                                    <thead>
                                        <tr>
                                            <th scope="col"></th>
                                            <th scope="col">Nombre</th>
                                            <th scope="col">Fecha</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="(child, i) in children">
                                            <th scope="row">{{i + 1}}</th>
                                            <td>
                                                <input class="form-control" type="text" v-model="child.name" v-bind:id="'names-' + i">
                                            </td>
                                            <td>
                                                <input type="date" class="form-control" placeholder="dd/mm/yyyy" v-model.date="child.date" v-bind:id="'datepicker-' + i">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                        </div>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <button class="btn btn-primary" onclick="continuar()">Continuar</button>
                    </div>

                <!-- </form> -->
            </div>
        </div>
        <!-- <div 
            id="botcopy-embedder-d7lcfheammjct" 
            class="botcopy-embedder-d7lcfheammjct" 
            data-botId="6023c4394917ac0009a83d3b">
        </div> -->

    </div>
    <!-- <script type="text/javascript" async="true" src="https://widget.botcopy.com/js/injection.js"></script> -->
    
    <!-- END wrapper -->
<!-- Add Firebase products that you want to use -->

    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-firestore.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-functions.js"></script>

    <!-- jQuery  -->
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/modernizr.min.js"></script>
    <script src="../assets/js/detect.js"></script>
    <script src="../assets/js/fastclick.js"></script>
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="../assets/js/jquery.blockUI.js"></script>
    <script src="../assets/js/waves.js"></script>
    <script src="../assets/js/jquery.nicescroll.js"></script>
    <script src="../assets/js/jquery.scrollTo.min.js"></script>

    <!-- App js -->
    <script src="../assets/js/app.js"></script>

    <!-- Vue js -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2"></script>

    <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
   

    <!-- App Auth js -->
    <script type="text/javascript"
        id="botcopy-embedder-d7lcfheammjct"
        class="botcopy-embedder-d7lcfheammjct" 
        data-botId="6023c4394917ac0009a83d3b"
    >
        var s = document.createElement('script'); 
        s.type = 'text/javascript'; s.async = true; 
        s.src = 'https://widget.botcopy.com/js/injection.js'; 
        document.getElementById('botcopy-embedder-d7lcfheammjct').appendChild(s);


        function continuar(){
            console.log(Botcopy)
            // Botcopy.closeWebview();
            // Botcopy.sendText('Completado hijos');
        }
    </script>

    <script>    
  




        class Child {
            constructor(name, date) {
                this.name = name;
                this.date = date;
            }
        }

        var formChildren = new Vue({
            el: '#formChildren',
            data: {
                showAuthMsg: false,
                radioOptions: [1, 2, 3, 4],
                children: undefined
            },
            created() {},
            computed: {
                validChildren: vm => vm.children !== undefined && vm.children.length > 0
            },
            methods: {
                radioChanged (e, i) {
                    e.preventDefault();

                    if (i !== undefined) {
                        this.children = [];
                        for (let idx = 0; idx <= i; idx++) {
                            this.children.push(new Child());
                        }
                    }
                },
                continuar(){                    
                    botcopy.sendText('Completado hijos');
                }
            }
        
        });
    </script>
    <!-- <script src="../assets/js/form-children.js"></script> -->

</body>

</html>