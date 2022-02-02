



var egresos = new Vue({
    el: '#egresos',
    data: {  
        pagosMensuales: {
            hogar: {
                mercado: 0,
                alquiler: 0,
                transporteCombustible: 0,
                transportePublico: 0,
                transporteEscolar: 0,
                serviciosPublicos: 0,
                mantenimientoCasa: 0,
                cuidadoInfantil: 0,
                hogarTotal: 0,
            },
            salud: {
                seguroSalud: 0,
                saludTotal: 0
            },
            pagosMensualesTotal: 0
        },
        pagosAnuales: {
            hogar: {
                seguro: {
                    vivienda: 0,
                    vehiculoMarbete: 0
                },
                mantenimientoVehiculo: 0,
                hogarTotal: 0
            },
            educacion: {
                matriculaAnual: 0,
                colegiaturaHijos: 0,
                textosUniformes: 0,
                educacionPersonal: 0,
                educacionTotal: 0
            },
            pagosAnualesTotal: 0
        },
        cuotasMensualesTotal: 0,

        gastosMensuales: {
            entretenimiento: {
                aplicaciones: 0,
                clasesHobbies: 0,
                actividadesSociales: 0,
                entretenimientoTotal: 0
            },
            internetTelefonia: 0,
            restaurantes: 0,
            serviciosDeTerceros: 0,
            pagosMensualesTotal: 0
        },

        gastosAnuales: {
            vestuario: 0,
            vacaciones: 0,
            articulosPersonales: 0,
            gastosAnualesTotal: 0
        },
    },
    created(){
    },
    computed: {
        hogarMensualProperties(){
            return `${this.pagosMensuales.hogar.mercado}${this.pagosMensuales.hogar.alquiler}
            ${this.pagosMensuales.hogar.serviciosPublicos}${this.pagosMensuales.hogar.mantenimientoCasa}
            ${this.pagosMensuales.hogar.cuidadoInfantil}${this.pagosMensuales.hogar.transporteCombustible}
            ${this.pagosMensuales.hogar.transportePublico}${this.pagosMensuales.hogar.transporteEscolar}
            ${this.pagosMensuales.hogar.hogarTotal}${this.pagosMensuales.salud.seguroSalud}
            ${this.pagosMensuales.salud.saludTotal}${this.educacionHijos}${this.educacionPropia}
            ${this.pagosMensuales.pagosMensualesTotal}`;
        },
        hogarAnualProperties(){
            return `${this.pagosAnuales.hogar.seguro.vivienda}${this.pagosAnuales.hogar.seguro.vehiculoMarbete}
            ${this.pagosAnuales.hogar.mantenimientoVehiculo}${this.pagosAnuales.hogar.hogarTotal}
            ${this.pagosAnuales.educacion.matriculaAnual}${this.pagosAnuales.educacion.colegiaturaHijos}
            ${this.pagosAnuales.educacion.textosUniformes}${this.pagosAnuales.educacion.educacionPersonal}
            ${this.pagosAnuales.educacion.educacionTotal}${this.pagosAnuales.pagosAnualesTotal}`;
        },
    },
    filters: {
        addComma(value){
            if(value.length >= 4){ 
                value = value.toString().replace(/,/g, "");
                return value.replace(/(\d)(?=(\d\d\d)+(?!\d))/g, "$1,");
               
            }else {
                return value;
            }
        }
    },
    methods: {
        pagosTotalCalulo(){
            this.hogar = parseInt(this.hogar, 10);
            this.alquiler = parseInt(this.alquiler, 10);
            this.transporte = parseInt(this.transporte, 10);
            this.serviciosPublicos = parseInt(this.serviciosPublicos, 10);
            this.mantenimientoCasa =  parseInt(this.mantenimientoCasa, 10);
            this.cuidadoInfantil = parseInt(this.cuidadoInfantil, 10);
            this.pagosTotal = parseInt(this.pagosTotal, 10);
            

            this.hogar ? isNaN(this.hogar) : this.hogar = 0;
            this.alquiler ? isNaN(this.alquiler) : this.alquiler = 0;
            this.transporte ? isNaN(this.transporte) : this.transporte = 0;
            this.serviciosPublicos ? isNaN(this.serviciosPublicos) : this.serviciosPublicos = 0;
            this.mantenimientoCasa ? isNaN(this.mantenimientoCasa) : this.mantenimientoCasa = 0;
            this.cuidadoInfantil ? isNaN(this.cuidadoInfantil) : this.cuidadoInfantil = 0;


            this.pagosTotal = this.hogar + this.alquiler + this.transporte +
            this.serviciosPublicos +  this.mantenimientoCasa + this.cuidadoInfantil;
        },
        educacionTotalCalculo(){
            this.educacionHijos = parseInt(this.educacionHijos, 10);
            this.educacionPropia = parseInt(this.educacionPropia, 10);
            this.educacionTotal = parseInt(this.educacionTotal, 10);

            this.educacionHijos ? isNaN(this.educacionHijos) : this.educacionHijos = 0;
            this.educacionPropia ? isNaN(this.educacionPropia) : this.educacionPropia = 0;
            this.educacionTotal ? isNaN(this.educacionTotal) : this.educacionTotal = 0;

            this.educacionTotal = this.educacionHijos + this.educacionPropia;
        },
        saludTotalCalculo(){
            this.salud = parseInt(this.salud, 10);
            this.saludTotal = parseInt(this.saludTotal, 10);

            this.salud ? isNaN(this.salud) : this.salud = 0;

            this.saludTotal = this.salud;
        },
        pagosAnualesTotalCalulo(){
            this.pagosAnuales.hogar.hogarTotal = parseInt(this.pagosAnuales.hogar.hogarTota, 10);
            this.pagosAnuales.hogar.seguro.vivienda = parseInt(this.pagosAnuales.hogar.hogarTota, 10);
            this.pagosAnuales.hogar.seguro.vehiculoMarbete = parseInt(this.pagosAnuales.hogar.hogarTota, 10);
            this.pagosAnuales.salud.saludTotal = parseInt(this.pagosAnuales.salud.saludTotal, 10);

            this.pagosAnuales.salud.saludTotal ? isNaN(this.pagosAnuales.salud.saludTotal) : this.pagosAnuales.salud.saludTotal = 0;
            this.pagosAnuales.salud.saludTotal ? isNaN(this.pagosAnuales.salud.saludTotal) : this.pagosAnuales.salud.saludTotal = 0;

            this.pagosAnuales.educacion.educacionTotal = (this.pagosAnuales.hogar.hogarTotal + this.pagosAnuales.educacion.educacionTotal + this.pagosAnuales.salud.saludTotal) * 12;
        },
        hogarMensualCalculo(){
            this.pagosMensuales.hogar.mercado = parseInt(this.pagosMensuales.hogar.mercado, 10);
            this.pagosMensuales.hogar.alquiler = parseInt(this.pagosMensuales.hogar.alquiler, 10);
            this.pagosMensuales.hogar.transporteCombustible = parseInt(this.pagosMensuales.hogar.transporteCombustible, 10);
            this.pagosMensuales.hogar.transportePublico = parseInt(this.pagosMensuales.hogar.transportePublico, 10);
            this.pagosMensuales.hogar.transporteEscolar = parseInt(this.pagosMensuales.hogar.transporteEscolar, 10);
            this.pagosMensuales.hogar.serviciosPublicos = parseInt(this.pagosMensuales.hogar.serviciosPublicos, 10);
            this.pagosMensuales.hogar.mantenimientoCasa = parseInt(this.pagosMensuales.hogar.mantenimientoCasa, 10);
            this.pagosMensuales.hogar.cuidadoInfantil = parseInt(this.pagosMensuales.hogar.cuidadoInfantil, 10);
            this.pagosMensuales.salud.seguroSalud = parseInt(this.pagosMensuales.salud.seguroSalud, 10);

            this.pagosMensuales.hogar.mercado ? isNaN(this.pagosMensuales.hogar.mercado) : this.pagosMensuales.hogar.mercado = 0;
            this.pagosMensuales.hogar.alquiler ? isNaN(this.pagosMensuales.hogar.alquiler) : this.pagosMensuales.hogar.alquiler = 0;
            this.pagosMensuales.hogar.transporteCombustible  ? isNaN(this.pagosMensuales.hogar.transporteCombustible ) : this.pagosMensuales.hogar.transporteCombustible  = 0;
            this.pagosMensuales.hogar.transportePublico  ? isNaN(this.pagosMensuales.hogar.transportePublico ) : this.pagosMensuales.hogar.transportePublico = 0;
            this.pagosMensuales.hogar.transporteEscolar  ? isNaN(this.pagosMensuales.hogar.transporteEscolar ) : this.pagosMensuales.hogar.transporteEscolar = 0;
            this.pagosMensuales.hogar.serviciosPublicos  ? isNaN(this.pagosMensuales.hogar.serviciosPublicos ) : this.pagosMensuales.hogar.serviciosPublicos = 0;
            this.pagosMensuales.hogar.cuidadoInfantil  ? isNaN(this.pagosMensuales.hogar.cuidadoInfantil ) : this.pagosMensuales.hogar.cuidadoInfantil = 0;
            this.pagosMensuales.salud.seguroSalud  ? isNaN(this.pagosMensuales.salud.seguroSalud) : this.pagosMensuales.salud.seguroSalud = 0;

            this.pagosMensuales.pagosMensualesTotal = (this.pagosMensuales.hogar.mercado + this.pagosMensuales.hogar.alquiler +
            this.pagosMensuales.hogar.transporteCombustible + this.pagosMensuales.hogar.transportePublico +
            this.pagosMensuales.hogar.serviciosPublicos + this.pagosMensuales.hogar.mantenimientoCasa + this.pagosMensuales.hogar.cuidadoInfantil + 
            this.pagosMensuales.salud.seguroSalud).toString();

            this.pagosMensuales.hogar.hogarTotal = (this.pagosMensuales.hogar.mercado + this.pagosMensuales.hogar.alquiler +
            this.pagosMensuales.hogar.transporteCombustible + this.pagosMensuales.hogar.transportePublico + this.pagosMensuales.hogar.transporteEscolar +
            this.pagosMensuales.hogar.serviciosPublicos + this.pagosMensuales.hogar.mantenimientoCasa + 
            this.pagosMensuales.hogar.cuidadoInfantil).toString()

            this.pagosMensuales.salud.saludTotal = (this.pagosMensuales.salud.seguroSalud).toString()
        }

            
    },
    watch:{
        hogarMensualProperties() {
            this.hogarMensualCalculo();
        },
        hogarAnualProperties(){
            this.educacionTotalCalculo();
            this.pagosAnualesTotalCalulo();
        } 
    }
  });