/*
 Template Name: Zinzer - Responsive Bootstrap 4 Admin Dashboard
 Author: ThemeDesign
 File: Main js
 */

var logout = new Vue({
  el: '#appLogout',
  
  methods: {
    logOut(e) {
      e.preventDefault();
      localStorage.removeItem("token")
      firebase.auth().signOut()
        .then(() => {
          window.location.href = "../login.php";
        })
        .catch((error) => {
          var errorCode = error.code;
          var errorMessage = error.message;
        });
      return true;
    }
  }
});