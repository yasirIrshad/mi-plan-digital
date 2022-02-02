/*
 Template Name: Zinzer - Responsive Bootstrap 4 Admin Dashboard
 Author: ThemeDesign
 File: Main js
 */

class Child {
  constructor(name, date) {
    this.name = name;
    this.date = date;
  }
}

var login = new Vue({
  el: '#formChildren',
  data: {
    showAuthMsg: false,
    radioOptions: [1, 2, 3, 4],
    children: undefined
  },
  created: function () {
    // var _self = this;
    // firebase.auth().onAuthStateChanged(function (user) {
    //   if (!user) {
    //     _self.showAuthMsg = true;
    //   } else {
    //     _self.showAuthMsg = false;
    //   }
    // });
  },
  computed: {
    validChildren: vm => vm.children !== undefined && vm.children.length > 0
  },
  methods: {
    logIn: function (e) {
      e.preventDefault();

    },
    radioChanged: function (e, i) {
      e.preventDefault();

      if (i !== undefined) {
        this.children = [];
        for (let idx = 0; idx <= i; idx++) {
          this.children.push(new Child());
        }
      }
    },
    continuar(){
      Botcopy.sendEvent('Completado hijos');
      console.log(Botcopy)
      // Botcopy.sendEvent('Completado hijos');
    }
  },
  
});