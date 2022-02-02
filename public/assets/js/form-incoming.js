/*
 Template Name: Zinzer - Responsive Bootstrap 4 Admin Dashboard
 Author: ThemeDesign
 File: Main js
 */

class incomingModel {
  constructor(employee, unEmployee, independent, others, nothing) {
    this.employee = employee;
    this.unEmployee = unEmployee;
    this.independent = independent;
    this.others = others;
    this.nothing = nothing;
  }
}

class baseModel {
  constructor(id, name, radioId, children) {
    this.id = id;
    this.name = name;
    this.radioId = radioId || id;
    this.children = children;
  }
}

var login = new Vue({
  el: '#formIncoming',
  data: {
    showAuthMsg: false,
    ids: [
      'customRadio1',
      'customRadio2',
      'customCheck1',
      'customRadio1_1',
      'customRadio1_2',
      'customCheck2',
      'customCheck1_1',
      'customCheck1_2',
      'customCheck1_3',

      'customRadioPartner1',
      'customRadioPartner2',
      'customCheckPartner1',
      'customRadioPartner1_1',
      'customRadioPartner1_2',
      'customCheckPartner2',
      'customCheckPartner1_1',
      'customCheckPartner1_2',
      'customCheckPartner1_3',
      'customRadioPartner3',
    ],
    isMarried: false,
    model: {},
    modelPartner: {},
    previousChecked: {
      employee_enEmployee: undefined,
      independent: undefined,
      others: undefined,
      independent_simple_general: undefined,
      others_pensions: undefined,
      others_exterior: undefined,
      others_rental: undefined
    },
    previousPartnerChecked: {
      employee_enEmployee: undefined,
      independent: undefined,
      others: undefined,
      independent_simple_general: undefined,
      others_pensions: undefined,
      others_exterior: undefined,
      others_rental: undefined,
      nothing: undefined
    }
  },
  created: function () {
    var _self = this;

    _self.model = new incomingModel(
      new baseModel(_self.ids[0], 'Empleado'),
      new baseModel(_self.ids[1], 'Desempleado, pero buscando', _self.ids[0]),
      new baseModel(
        _self.ids[2],
        'Independiente',
        undefined,
        {
          simple: new baseModel(_self.ids[3], 'Régimen simplificado'),
          general: new baseModel(_self.ids[4], 'Régimen general', _self.ids[3])
        }),
      new baseModel(
        _self.ids[5],
        'Otros',
        undefined,
        {
          pensions: new baseModel(_self.ids[6], 'Pensiones'),
          exterior: new baseModel(_self.ids[7], 'Remesas del exterior'),
          rental: new baseModel(_self.ids[8], 'Rentas por alquileres')
        })
    );

    _self.modelPartner = new incomingModel(
      new baseModel(_self.ids[9], 'Empleado'),
      new baseModel(_self.ids[10], 'Desempleado, pero buscando', _self.ids[9]),
      new baseModel(
        _self.ids[11],
        'Independiente',
        undefined,
        {
          simple: new baseModel(_self.ids[12], 'Régimen simplificado'),
          general: new baseModel(_self.ids[13], 'Régimen general', _self.ids[12])
        }),
      new baseModel(
        _self.ids[14],
        'Otros',
        undefined,
        {
          pensions: new baseModel(_self.ids[15], 'Pensiones'),
          exterior: new baseModel(_self.ids[16], 'Remesas del exterior'),
          rental: new baseModel(_self.ids[17], 'Rentas por alquileres')
        }),
      new baseModel(_self.ids[18], 'No tiene ingresos')
    );

    $(function () {
      //tooltip & popover
      $('[data-toggle="tooltip"]').tooltip();
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
  computed: {
    checkedEmployee: _self => _self.previousChecked.employee_enEmployee === _self.ids[0],
    checkedUnEmployee: _self => _self.previousChecked.employee_enEmployee === _self.ids[1],
    checkedIndependents: _self => _self.previousChecked.independent,
    checkedOthers: _self => _self.previousChecked.others,
    checkedIndependentSimple: _self => _self.previousChecked.independent_simple_general === _self.ids[3],
    checkedIndependentGeneral: _self => _self.previousChecked.independent_simple_general === _self.ids[4],
    checkedOthersPensions: _self => _self.previousChecked.others_pensions,
    checkedOthersExterior: _self => _self.previousChecked.others_exterior,
    checkedOthersRental: _self => _self.previousChecked.others_rental,

    checkedPartnerEmployee: _self => _self.previousPartnerChecked.employee_enEmployee === _self.ids[9],
    checkedPartnerUnEmployee: _self => _self.previousPartnerChecked.employee_enEmployee === _self.ids[10],
    checkedPartnerIndependents: _self => _self.previousPartnerChecked.independent,
    checkedPartnerOthers: _self => _self.previousPartnerChecked.others,
    checkedPartnerIndependentSimple: _self => _self.previousPartnerChecked.independent_simple_general === _self.ids[12],
    checkedPartnerIndependentGeneral: _self => _self.previousPartnerChecked.independent_simple_general === _self.ids[13],
    checkedPartnerOthersPensions: _self => _self.previousPartnerChecked.others_pensions,
    checkedPartnerOthersExterior: _self => _self.previousPartnerChecked.others_exterior,
    checkedPartnerOthersRental: _self => _self.previousPartnerChecked.others_rental
  },
  methods: {
    uncheck: function (_id) {
      var _self = this;

      if (_id === _self.ids[2]) {
        _self.previousChecked.independent_simple_general = undefined;
      }

      if (_id === _self.ids[5]) {
        _self.previousChecked.others_pensions = undefined;
        _self.previousChecked.others_exterior = undefined;
        _self.previousChecked.others_rental = undefined;
      }

      _self.activatePopover();
    },

    uncheckPartner: function (_id) {
      var _self = this;

      if (_id === _self.ids[18]) {
        _self.previousPartnerChecked.nothing = _id;
        _self.previousPartnerChecked.employee_enEmployee = undefined;
        _self.previousPartnerChecked.independent = undefined;
        _self.previousPartnerChecked.others = undefined;
        _self.previousPartnerChecked.independent_simple_general = undefined;
        _self.previousPartnerChecked.others_pensions = undefined;
        _self.previousPartnerChecked.others_exterior = undefined;
        _self.previousPartnerChecked.others_rental = undefined;
      } else {
        _self.previousPartnerChecked.nothing = undefined;

        if (_id === _self.ids[11]) {
          _self.previousPartnerChecked.independent_simple_general = undefined;
        }

        if (_id === _self.ids[14]) {
          _self.previousPartnerChecked.others_pensions = undefined;
          _self.previousPartnerChecked.others_exterior = undefined;
          _self.previousPartnerChecked.others_rental = undefined;
        }
      }

      _self.activatePopover();
    },

    activatePopover: function () {
      $(function () {
        $('[data-toggle="popover"]').popover();
      });
    }
  }
});
