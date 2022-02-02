

var antesDeEmpezar = new Vue({
    el: '#antesDeEmpezar',
    data: {  
        valid: true,
        titular: {
            nombre: '',
            apellidos: '',
            fecha_nacimiento: '1990-01-01',
            cuidad: 'Santo Domingo',
            sexo: 'femenino',
            estado_civil: 'Soltero',
            avatar: 'sin_avatar.png'
        },
        pareja: {
            nombre: '',
            apellidos: '',
            fecha_nacimiento: '1990-01-01',
            sexo: 'femenino',
            avatar: 'sin_avatar.png'
        },      
        isLoading: false,
        tipoAvatar: '',
        selectedAvatar: 'sin_avatar.png'
    },
    created(){
    },
    methods: {
        validar() {            
            if(!this.titular.nombre) return 'Nombre es requerido!'
            if(!this.titular.nombre.match(/^[A-Za-z]+$/)) return 'Solo se permite letras!'
            if(this.titular.nombre.length >= 16) return 'Nombre debe tener maximo 15 caracteres!'
            if(this.titular.nombre.length < 3) return 'Nombre debe tener almenos 3 caracteres!'
            if(!this.titular.apellidos) return 'Apellido es requerido!'
            if(!this.titular.apellidos.match(/^[A-Za-z]+$/)) return 'Solo se permite letras!'
            if(this.titular.apellidos.length < 3) return 'Apellido debe tener almenos 3 caracteres!'

            if(this.titular.estado_civil == 'casado'){
                if(!this.pareja.nombre) return 'Nombre de la pareja es requerido!'
                if(!this.pareja.nombre.match(/^[A-Za-z]+$/)) return 'Solo se permite letras!'
                if(this.pareja.nombre.length >= 16) return 'Nombre de la pareja debe tener maximo 15 caracteres!'
                if(!this.pareja.apellidos) return 'Apellido de la pareja es requerido!'
                if(!this.pareja.apellidos.match(/^[A-Za-z]+$/)) return 'Solo se permite letras!'
                if(this.titular.apellidos.length < 3) return 'Apellido de la pareja debe tener almenos 3 caracteres!'
            }
        },
        enviar(){
            if(this.validar()){
                let message = this.validar()
                swal(
                    'Error en el formulario',
                    message,
                    'warning'
                )
                return; 
            }
            // this.isLoading = true;
            const token = localStorage.getItem('token')

            const instance = axios.create({
                baseURL: 'https://dev2.clouddevs.net/api/addUser',
                // timeout: 1000,
                headers: {'Authorization': token}
            });


            instance.post('https://dev2.clouddevs.net/api/addUser', {titular: this.titular, pareja: this.pareja})
                .then(res => {
                    if(res.data.status == true){
                        swal(
                            'Informacion guardada',
                            'La informacion se guardo correctamente',
                            'success'
                        )
                    }
                })
                .catch(err => {
                    swal(
                        'Ocurrio un error',
                        err.message,
                        'error'
                    )
                })        
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
            
        }
    },
    watch:{
        'this.titular.estado_civil'(){
            if(this.titular.estado_civil == 'casado'){

            }
        }
    }
  });