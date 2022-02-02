/*
 Template Name: Zinzer - Responsive Bootstrap 4 Admin Dashboard
 Author: ThemeDesign
 File: Main js
 */

// anterior
  // var firebaseConfig = {
  //   apiKey: "AIzaSyDDpcQ5AHMHZv7Z_6yHkO7qFzd8je34kB0",
  //   authDomain: "planea-digital.firebaseapp.com",
  //   databaseURL: "https://planea-digital.firebaseio.com",
  //   projectId: "planea-digital",
  //   storageBucket: "planea-digital.appspot.com",
  //   messagingSenderId: "824588272099",
  //   appId: "1:824588272099:web:92c0509e105f8200ce20d6"
  // }

  var firebaseConfig = {
    apiKey: "AIzaSyAKQ9WiN5gUoShtyDW9U3d_xJ68-XTtnCM",
    authDomain: "kb-nlmi.firebaseapp.com",
    databaseURL: "https://kb-nlmi-default-rtdb.firebaseio.com",
    projectId: "kb-nlmi",
    storageBucket: "kb-nlmi.appspot.com",
    messagingSenderId: "20929144142",
    appId: "1:20929144142:web:ab9c17f7bdec7d158eea1f"
  }

  firebase.initializeApp(this.firebaseConfig);


firebase.auth().onAuthStateChanged(function (user) {
  if (!user) {
    //window.location.href = "login.php";
  }
});