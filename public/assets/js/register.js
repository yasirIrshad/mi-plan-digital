/*
 Template Name: Zinzer - Responsive Bootstrap 4 Admin Dashboard
 Author: ThemeDesign
 File: Main js
 */

var register = new Vue({
  el: '#appRegister',
  data: {
    firebaseConfig: {
      apiKey: "AIzaSyDDpcQ5AHMHZv7Z_6yHkO7qFzd8je34kB0",
      authDomain: "planea-digital.firebaseapp.com",
      databaseURL: "https://planea-digital.firebaseio.com",
      projectId: "planea-digital",
      storageBucket: "planea-digital.appspot.com",
      messagingSenderId: "824588272099",
      appId: "1:824588272099:web:92c0509e105f8200ce20d6"
    },
    email: '',
    password: '',
    isLoading: false,
  },
  created(){
    firebase.initializeApp(this.firebaseConfig);
  },
  methods: {
    register(e) {
      var _self = this;
      _self.isLoading = true;
      e.preventDefault();
      firebase.auth().createUserWithEmailAndPassword(this.email, this.password)
        .then((userCredential) => {
          window.location.href = "login.php";
        })
        .catch((error) => {
          _self.isLoading = false;
          var errorCode = error.code;
          var errorMessage = error.message;
          // ..
        });
    }
  }
});