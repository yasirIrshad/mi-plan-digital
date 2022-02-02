/*
 Template Name: Zinzer - Responsive Bootstrap 4 Admin Dashboard
 Author: ThemeDesign
 File: Main js
 */

var app = new Vue({
  el: '#pageId',
  data: {
    showAuthMsg: false
  },
  created: function () {
    var _self = this;

    firebase.auth().onAuthStateChanged(function (user) {
      if (!user) {
        _self.showAuthMsg = true;
      } else {
        _self.showAuthMsg = false;
      }
    });
  }
});
