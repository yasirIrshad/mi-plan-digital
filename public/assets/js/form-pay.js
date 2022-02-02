/*
 Template Name: Zinzer - Responsive Bootstrap 4 Admin Dashboard
 Author: ThemeDesign
 File: Main js
 */

class payModel {
  constructor(monthly, yearly) {
    this.monthly = monthly;
    this.yearly = yearly;
  }
}

class subPayModel {
  constructor(header, children) {
    this.header = header;
    this.children = children;
  }
}

class rowPayModel {
  constructor(id, name, value, popover) {
    this.id = id;
    this.name = name;
    this.value = value;
    this.popover = popover;
  }
}

var login = new Vue({
  el: '#formPay',
  title: 'PAGA',
  data: {
    showAuthMsg: false,
    isSpend: false,
    model: {}
  },
  created: function () {
    var _self = this;

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    _self.isSpend = !!urlParams.get('isSpend');

    _self.title = _self.isSpend ? 'GASTA' : 'PAGA';

    if (_self.isSpend) {
      _self.model = new payModel(
        new subPayModel(
          new rowPayModel('Gastos_Mes', 'Gastos mensuales', 0),
          [
            new subPayModel(
              new rowPayModel('Entretenimiento_Mes', 'Entretenimiento', 0),
              [
                new rowPayModel('Aplicaciones_Entretenimiento_Mes', 'Aplicaciones', 0, 'Suscripciones a aplicaciones móviles Ej.: Netflix, Spotify, Amazon, Videojuegos, etc.'),
                new rowPayModel('ClasesHobbiesMembresías_Entretenimiento_Mes', 'Clases / Hobbies, membresías', 0, 'Clases de deportes, membresías a clubes sociales y deportivos, gimnasios, Clases de actividades lúdicas (música, pintura, danza entre otros) ), extracurriculares de los hijos (pelota, futbol, ballet).'),
                new rowPayModel('ActividadesSociales_Entretenimiento_Mes', 'Actividades sociales', 0, 'Discotecas, bebidas alcohólicas, Conciertos, juegos de pelota, salidas de la ciudad, donaciones, regalos y/o caridad, juguetes.')
              ]
            ),
            new subPayModel(
              new rowPayModel('InternetTelefonía_Mes', 'Internet y telefonía', 0),
              [
                new rowPayModel('InternetTelefonía_InternetTelefonía_Mes', 'Internet y telefonía', 0)
              ]
            ),
            new subPayModel(
              new rowPayModel('Restaurantes_Mes', 'Restaurantes', 0, 'Restaurantes y comida a domicilio.'),
              [
                new rowPayModel('Restaurantes_Restaurantes_Mes', 'Restaurantes', 0)
              ]
            ),
            new subPayModel(
              new rowPayModel('ServiciosTerceros_Mes', 'Servicios de terceros', 0, 'Salarios de personas que trabajan para la familia (Empleada doméstica, chofer, jardinero, enfermera, entre otros), así como servicios de salón de belleza, barbería, lavado de carro, etc.'),
              [
                new rowPayModel('ServiciosTerceros_ServiciosTerceros_Mes', 'Servicios de terceros', 0)
              ]
            )
          ]
        ),
        new subPayModel(
          new rowPayModel('Gastos_Anuales', 'Gastos Anuales', 0),
          [
            new subPayModel(
              new rowPayModel('Vestuario_Anuales', 'Vestuario', 0, 'Gasto en vestuario, joyas y calzado para ti y tu familia.'),
              [
                new rowPayModel('Vestuario_Vestuario_Anuales', 'Vestuario', 0)
              ]
            ),
            new subPayModel(
              new rowPayModel('Vacaciones_Anuales', 'Vacaciones', 0, 'Alojamiento, transporte, alimentación, actividades de ocio y souvenirs durante las vacaciones.'),
              [
                new rowPayModel('Vacaciones_Vacaciones_Anuales', 'Vacaciones', 0)
              ]
            ),
            new subPayModel(
              new rowPayModel('ArtículosPersonales_Anuales', 'Artículos personales', 0, 'compra de muebles y enseres para la casa, tecnología, libros, adornos para tu casa o tu vehículo, entre otros'),
              [
                new rowPayModel('ArtículosPersonales_ArtículosPersonales_Anuales', 'Artículos personales', 0)
              ]
            )
          ]
        )
      );
    } else {
      _self.model = new payModel(
        new subPayModel(
          new rowPayModel('Pagos_Mes', 'Pagos mensuales', 0),
          [
            new subPayModel(
              new rowPayModel('Hogar_Mes', 'Hogar', 0),
              [
                new rowPayModel('Mercado_Hogar_Mes', 'Mercado', 0),
                new rowPayModel('Alquiler_Hogar_Mes', 'Alquiler', 0),
                new rowPayModel('Transporte_Hogar_Mes', 'Transporte', 0, 'Incluye gastos mensuales de combustible, transporte público y/o UBER y porción mensual de mantenimiento vehículo, marbete y seguro de vehículo.'),
                new rowPayModel('ServiciosPublicos_Hogar_Mes', 'Servicios públicos', 0),
                new rowPayModel('MantenimientoCasa_Hogar_Mes', 'Mantenimiento casa', 0, 'Son los pagos mensuales de mantenimiento de áreas comunes del condominio y gasto de mantenimiento menores (plomería, electricidad, etc).'),
                new rowPayModel('CuidadoInfantil_Hogar_Mes', 'Cuidado Infantil', 0, 'Gasto mensual incurrido durante el tiempo que los niños menores de 12 años no se encuentren en el colegio y sus padres se encuentren trabajando. Ejemplo: ampliación de horario en el colegio o contratación de servicio de cuidado a una persona o institución para tal fin.')
              ]
            ),
            new subPayModel(
              new rowPayModel('Salud_Mes', 'Salud', 0),
              [
                new rowPayModel('SeguroDeSalud_Salud_Mes', 'Seguro de salud', 0)
              ]
            )
          ]
        ),
        new subPayModel(
          new rowPayModel('Pagos_Anuales', 'Pagos Anuales', 0),
          [
            new subPayModel(
              new rowPayModel('Hogar_Anuales', 'Hogar', 0),
              [
                new rowPayModel('IPI_Hogar_Anuales', 'IPI', 0),
                new rowPayModel('SeguroDeVivienda_Hogar_Anuales', 'Seguro de vivienda', 0)
              ]
            ),
            new subPayModel(
              new rowPayModel('Salud_Anuales', 'Salud', 0),
              [
                new rowPayModel('SeguroDeVida_Salud_Anuales', 'Seguro de Vida', 0),
                new rowPayModel('FarmaciaConsultasTratamientos_Salud_Anuales', 'Farmacia Consultas/Tratamientos', 0, 'Corresponde a servicios y tratamientos médicos especializados no cubiertos por la póliza de seguro de salud, así como gastos en medicamentos y farmacia.')
              ]
            ),
            new subPayModel(
              new rowPayModel('Educacion_Anuales', 'Educación', 0),
              [
                new rowPayModel('MatriculaAnual_Educacion_Anuales', 'Matricula Anual', 0),
                new rowPayModel('ColegiaturaHijos_Educacion_Anuales', 'Colegiatura hijos', 0, 'Colegiatura y otros pagos mensuales al colegio, solo de carácter obligatorio como, Asociación de Padres (por ejemplo, no incluir las extracurriculares de pintura o pelota después de clases, esas irán en otro lado).'),
                new rowPayModel('TextosUniformes_Educacion_Anuales', 'Textos y uniformes', 0),
                new rowPayModel('EstudiosPropios_Educacion_Anuales', 'Estudios propios', 0, 'Gastos en educación superior, estudios de posgrado o certificaciones que estés adelantando tú o tu pareja en la actualidad.')
              ]
            )
          ]
        )
      );
    }

    $(function () {
      //modify buttons style
      $.fn.editableform.buttons =
        '<button type="submit" class="btn btn-success editable-submit btn-sm waves-effect waves-light"><i class="mdi mdi-check"></i></button>' +
        '<button type="button" class="btn btn-danger editable-cancel btn-sm waves-effect waves-light"><i class="mdi mdi-close"></i></button>';

      //inline
      $('.editable-field').editable({
        mode: 'inline',
        inputclass: 'form-control-sm',
        // tpl: '<input type="text" placeholder="" data-mask="$ 9,999,999,999,999">'
      });

      $('.editable-field').on('save', function (e, params) {
        _self.updateValues(e.currentTarget.id, params.newValue);
      });

      $('[data-toggle="popover"]').popover();
    });

    firebase.auth().onAuthStateChanged(function (user) {
      if (!user) {
        _self.showAuthMsg = true;
      } else {
        _self.showAuthMsg = false;
      }
    });
  },
  methods: {
    classById: function (id) {
      switch (id) {
        case 'Hogar_Mes':
        case 'Hogar_Anuales':
          return 'house';
        case 'Salud_Mes':
        case 'Salud_Anuales':
          return 'health';
        case 'Educacion_Anuales':
          return 'education';
        case 'Entretenimiento_Mes':
          return 'entertaiment';
        case 'InternetTelefonía_Mes':
          return 'internet-telephone';
        case 'Restaurantes_Mes':
          return 'restaurant';
        case 'ServiciosTerceros_Mes':
          return 'third-services';
        case 'Vestuario_Anuales':
          return 'clothing';
        case 'Vacaciones_Anuales':
          return 'vacation';
        case 'ArtículosPersonales_Anuales':
          return 'personal-item';
        case 'Salud_Anuales':
          return 'coffe-cup';
        default:
          return '';
      }
    },
    updateValues: function (id, newValue) {
      const _self = this;
      const _r = this.setAmount(_self.model.monthly, id, newValue);
      if (!_r) this.setAmount(_self.model.yearly, id, newValue);
    },
    setAmount: function (model, id, value) {
      const _self = this;
      let _r = false;

      if (model instanceof subPayModel) {
        let _total = 0;
        let valueSetted = false;
        for (let idx = 0; idx < model.children.length; idx++) {
          const child = model.children[idx];

          if (!valueSetted) {
            valueSetted = _self.setAmount(child, id, value);
          }

          if (!_r) {
            _r = valueSetted;
          }

          _total += (child instanceof subPayModel) ? +child.header.value : +child.value;
        }

        model.header.value = _total;
      } else {
        if (model.id === id) {
          model.value = +value;
          _r = true;
        }
      }

      return _r;
    }
  }
});