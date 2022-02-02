/*
 Template Name: Zinzer - Responsive Bootstrap 4 Admin Dashboard
 Author: ThemeDesign
 File: Main js
 */

class debtModel {
  constructor(nothing, mortgageLoans, vehicleLoans, personalLoans, educationLoans) {
    this.nothing = nothing;
    this.mortgageLoans = mortgageLoans;
    this.vehicleLoans = vehicleLoans;
    this.personalLoans = personalLoans;
    this.educationLoans = educationLoans;
  }
}

class baseModel {
  constructor(id, name) {
    this.id = id;
    this.name = name;
  }
}

var login = new Vue({
  el: '#formDebts',
  data: {
    showAuthMsg: false,
    ids: [
      'customRadioNothing',
      'customCheck1',
      'customCheck2',
      'customCheck3',
      'customCheck4',
    ],
    isMarried: false,
    model: {},
    previousChecked: {
      nothing: undefined,
      mortgageLoans: undefined,
      vehicleLoans: undefined,
      personalLoans: undefined,
      educationLoans: undefined
    }
  },
  created: function () {
    var _self = this;

    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    _self.isMarried = !!urlParams.get('isMarried');

    _self.model = new debtModel(
      new baseModel(_self.ids[0], _self.isMarried ? 'No Tenemos deudas' : 'No Tengo deudas'),
      new baseModel(_self.ids[1], 'Préstamo hipotecario'),
      new baseModel(_self.ids[2], 'Préstamo Vehículo'),
      new baseModel(_self.ids[3], 'Préstamo Consumo'),
      new baseModel(_self.ids[4], 'Préstamo Educativo')
    );

    $(function () {
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
    checkedMortgageLoans: _self => _self.previousChecked.mortgageLoans,
    checkedVehicleLoans: _self => _self.previousChecked.vehicleLoans,
    checkedPersonalLoans: _self => _self.previousChecked.personalLoans,
    checkedEducationLoans: _self => _self.previousChecked.educationLoans
  },
  methods: {
    uncheck: function (_id) {
      var _self = this;

      if (_id === _self.ids[0]) {
        _self.previousChecked.nothing = _id;
        _self.previousChecked.mortgageLoans = undefined;
        _self.previousChecked.vehicleLoans = undefined;
        _self.previousChecked.personalLoans = undefined;
        _self.previousChecked.educationLoans = undefined;
      } else {
        _self.previousChecked.nothing = undefined;
      }
    }
  }
});
