var ingresos = new Vue({
    el: '#ingresos',
    data: {  
        valid: true,
        titularTrabaja: '',
        titularNotrabaja: '',
        parejaTrabaja: '',
        parejaNotrabaja: '',
        parejaIndependiente: '',
        parejaSinIngresos: '',
        parejaOtros: '',
        titular: {
            empleo: {
                empleado: '',
                independiente: '',
                otros: '',
                pensiones: '',
                remesas: '',
                rentasAlquiler: ''
            },
            regimen: '',
            otroCategorias: '',
            salario: '',
            bono: '',
            cci: 'cciActual'
        },
        pareja: {
            empleo: {
                empleado: '',
                independiente: '',
                otros: '',
                pensiones: '',
                remesas: '',
                rentasAlquiler: ''
            },
            regimen: '',
            otroCategorias: '',
            salario: '',
            bono: '',
            cci: 'cciActual'
        },      
        isLoading: false,
        tipoAvatar: '',
        selectedAvatar: 'sin_avatar.png'
    },
    created(){
    },
    computed:{
        personaProperties(){
            return `${this.titular.empleo.empleado}${this.titular.empleo.desempleado}`
        },
        empleoOptions(){
            return `${this.parejaTrabaja}${this.parejaNotrabaja}${this.pareja.otros}${this.pareja.empleo.independiente}`
        }
    },
    methods: {
        validar() {
            if(!this.titular.nombre) return 'Nombre es requerido!'
            if(this.titular.nombre.length >= 16) return 'Nombre debe tener maximo 15 caracteres!'
            if(this.titular.nombre.length < 3) return 'Nombre debe tener almenos 3 caracteres!'
            if(!this.titular.apellidos) return 'Apellido es requerido!'
            if(this.titular.apellidos.length < 3) return 'Apellido debe tener almenos 3 caracteres!'

            if(this.titular.estado_civil == 'casado'){
                if(!this.pareja.nombre) return 'Nombre de la pareja es requerido!'
                if(this.pareja.nombre.length >= 16) return 'Nombre de la pareja debe tener maximo 15 caracteres!'
                if(!this.pareja.apellidos) return 'Apellido de la pareja es requerido!'
                if(this.titular.apellidos.length < 3) return 'Apellido de la pareja debe tener almenos 3 caracteres!'
            }          

        },
        enviarIngresos(){
            // if(this.validar()){
            //     let message = this.validar()
            //     console.log(message)
            //     swal(
            //         'Error en el formulario',
            //         message,
            //         'warning'
            //     )
            //     return; 
            // }
            $("[data-dismiss=modal]").trigger({ type: "click" });
            // this.isLoading = true;
            // send to the backend and continue
            // window.location.href = "views/timeline.php";
            // console.log(this.titular, this.pareja)            
        },
        cambiarAvatar(e){
            let avatarsArr = document.querySelectorAll('.hoverAvatar');
            avatarsArr.forEach(el => {
                el.classList.remove('selectedAvatar')
            });

            e.path[0].classList.add('selectedAvatar')
            let index = e.path[0].src.split("/").length - 1
            let image = e.path[0].src.split("/")[index]
            
            this.selectedAvatar = image;           
        },
        confirmarCambioAvatar(){
            if(this.selectedAvatar == ''){
                swal(
                    'Avatar no elegido',
                    'Favor seleccione un avatar',
                    'warning'
                )
                return 
            }
            if(this.tipoAvatar == 'titular'){
                this.titular.avatar = this.selectedAvatar;
                document.querySelector('#avatarTitular').src = `./assets/images/avatars/${this.selectedAvatar}`
            }else {
                this.pareja.avatar = this.selectedAvatar;
                document.querySelector('#avatarPareja').src = `./assets/images/avatars/${this.selectedAvatar}`
            }
            let avatarsArr = document.querySelectorAll('.hoverAvatar');
            let verMasArr = document.querySelectorAll('.verMas');
            avatarsArr.forEach(el => {
                el.classList.remove('selectedAvatar')
            });

            verMasArr.forEach(el => {
                if(el.innerText == 'Ver Menos'){
                    el.click()
                }
            })
        },
        cancelarCambioAvatar(){
            this.selectedAvatar = '';
            let avatarsArr = document.querySelectorAll('.hoverAvatar');
            let verMasArr = document.querySelectorAll('.verMas');
            avatarsArr.forEach(el => {
                el.classList.remove('selectedAvatar')
            });

            verMasArr.forEach(el => {
                if(el.innerText == 'Ver Menos'){
                    el.click()
                }
            })


        },
        mostrar(e){
            if(e.path[0].innerText == 'Ver mas...'){
                e.path[0].innerText = 'Ver Menos'
            }else {
                e.path[0].innerText = 'Ver mas...'
            }
            
        },
        employmentTitular(type){
            if(type == 'empleado'){
                this.titular.empleo.empleado = type;
                this.titularTrabaja = true;
                this.titularNotrabaja = false;
            }else{
                this.titular.empleo.empleado = type;
                this.titularTrabaja = false;
                this.titularNotrabaja = true;
            }
        },
        employmentPareja(type){
            if(type == 'empleado'){
                this.pareja.empleo.empleado = type;
                this.parejaTrabaja = true;
                this.parejaNotrabaja = false;
                this.parejaSinIngresos = false;
            }else if(type == 'desempleado'){
                this.pareja.empleo.empleado = type;
                this.parejaTrabaja = false;
                this.parejaNotrabaja = true;
                this.parejaSinIngresos = false;
            }else if(type == 'independiente'){
                this.pareja.empleo.empleado = type;
                this.parejaIndependiente = true;
                this.parejaSinIngresos = false;
            }else if(type == 'otros'){
                this.pareja.empleo.otros = type;
                this.parejaOtros = true;
                this.parejaSinIngresos = false;
            }else if(type == 'sinIngresos'){
                this.parejaSinIngresos = true;
                this.parejaTrabaja = false;
                this.parejaNotrabaja = false;
                this.parejaIndependiente = false;
                this.parejaOtros = false;
            }
        }
    },
    watch:{
        'pareja.noTieneIngresos'(){
            if(this.pareja.noTieneIngresos){
                this.parejaTrabaja = false;
                this.parejaNotrabaja = false;
                this.pareja.otros = false;
            }
        },
        empleoOptions(){
        }
    }
  });