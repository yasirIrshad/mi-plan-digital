
var activosDeudas = new Vue({
    el: '#activosDeudas',
    data: {  
        valorVivienda: 0,
        valorVehiculo: 0,
        activosFinancieros: {
            menor6Meses: 0,
            mayor6Meses: 0
        },
        seguroVida: false,
        montoAsegurado: 0,
        primaAnual: 0,
        segutoComponente: {
            tiene: 'no',
        },
        deudas: false,
        prestamoHipotecario:{
            tiene: false,
            saldoActual: '',
            cuotaMensual: ''
        },
        prestamoVehiculo:{
            tiene: false,
            saldoActual: '',
            cuotaMensual: ''
        },
        prestamoConsumo:{
            tiene: false,
            saldoActual: '',
            cuotaMensual: ''
        },
        prestamoEducativo: {
            tiene: false,
            saldoActual: '',
            cuotaMensual: ''
        }
    },
    created(){
    },
    methods: {
        validar() {  

        },
        enviarActivosDeudas(){
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
                  
        },
        
    },
    watch:{
    }
  });