<!-- firebase -->
<script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-app.js"></script>

<!-- Add Firebase products that you want to use -->
<script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-firestore.js"></script>
<script src="https://www.gstatic.com/firebasejs/7.14.1/firebase-functions.js"></script>


<!-- firebase credentials -->

<script>
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
    // if (!user) {
    //   window.location.href = "../login.php";
    // }
  });
</script>




<!-- Vue js cdn -->
<!-- <script src="https://cdn.jsdelivr.net/npm/vue@2"></script> -->


<!-- jQuery  -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="../assets/js/modernizr.min.js"></script>
<script src="../assets/js/detect.js"></script>
<script src="../assets/js/fastclick.js"></script>
<script src="../assets/js/jquery.slimscroll.js"></script>
<script src="../assets/js/jquery.blockUI.js"></script>
<script src="../assets/js/waves.js"></script>
<script src="../assets/js/jquery.nicescroll.js"></script>
<script src="../assets/js/jquery.scrollTo.min.js"></script>

<!--Morris Chart-->
<script src="../plugins/morris/morris.min.js"></script>
<script src="../plugins/raphael/raphael.min.js"></script> 
<script src="../assets/pages/morris.init.js"></script>

<!-- dashboard js -->
<!--<script src="../assets/pages/dashboard.int.js"></script> -->

<!-- sweet alert js -->
<script src="../plugins/sweetalert2/sweetalert2.all.min.js"></script>

  <!-- KNOB JS -->
<script src="../plugins/jquery-knob/excanvas.js"></script>
<script src="../plugins/jquery-knob/jquery.knob.js"></script>   

<!-- App js -->
<script src="../assets/js/notificaciones.js"></script>
<script src="../assets/js/avatars.js"></script>
<script src="../assets/js/app.js"></script>

<script src="../assets/js/account.js"></script>

<!-- App Auth js -->
<script src="../assets/js/guard.login.js"></script>
<script src="../assets/js/logout.js"></script>


<script>

$(document).ready(function() {

  $(".ahorro_actual").knob({
    height: 100,
  'format' : function (value) {
	  
	  console.log(value);
	  if(value > 20){
		
			   $(".ahorro_actual").trigger('configure', {
					// min: '0',
					// max: '100',
					"fgColor":"#46cd93",
					"Color":"#46cd93"
				});
				
				$(".ahorro_actual").css("color","#46cd93");
		
	  }else{
		  
			  $(".ahorro_actual").trigger('configure', {
						// min: '5',
						// max: '100',
						"fgColor":"#e66793",
						"Color":"#e66793"
				});
				
				$(".ahorro_actual").css("color","#e66793");
	  }

     return value + '%';
  }

}).children().off('mousewheel DOMMouseScroll');


  $(".activos_generando_ingreso").knob({
    height: 100,
  'format' : function (value) {
	  
	  console.log(value);
	  //if(value > 20){
	  if(value > 8){
		
			   $(".activos_generando_ingreso").trigger('configure', {
					// min: '0',
					// max: '100',
					"fgColor":"#46cd93",
					"Color":"#46cd93"
				});
				
				$(".activos_generando_ingreso").css("color","#46cd93");
		
	  }else{
		  
			  $(".activos_generando_ingreso").trigger('configure', {
						// min: '0', //5
						// max: '100',
						"fgColor":"#e66793",
						"Color":"#e66793"
				});
				
				$(".activos_generando_ingreso").css("color","#e66793");
	  }

     return value + '%';
  }

}).children().off('mousewheel DOMMouseScroll');


  $(".fondo_de_emergencia").knob({
    height: 100,
  'format' : function (value) {
	  
	  console.log(value);
	  //if(value > 20){
	  if(value > 400){
		
			   $(".fondo_de_emergencia").trigger('configure', {
					// min: '0',
					// max: '500',
					"fgColor":"#46cd93",
					"Color":"#46cd93"
				});
				
				$(".fondo_de_emergencia").css("color","#46cd93");
		
	  }else{
		  
			  $(".fondo_de_emergencia").trigger('configure', {
						// min: '0',//5
						// max: '500',
						"fgColor":"#e66793",
						"Color":"#e66793"
				});
				
				$(".fondo_de_emergencia").css("color","#e66793").css("font-size", "15px !important");
	  }

     return '$' + value + 'mil';
  }

}).children().off('mousewheel DOMMouseScroll');


 $(".pago_deudas").knob({
    height: 100,
  'format' : function (value) {
	  
	  console.log(value);
	  if(value < 20){
		
			   $(".pago_deudas").trigger('configure', {
					// min: '0',
					// max: '100',
					"fgColor":"#46cd93",
					"Color":"#46cd93"
				});
				
				$(".pago_deudas").css("color","#46cd93");
		
	  }else{
		  
			  $(".pago_deudas").trigger('configure', {
						// min: '0', //5
						// max: '100',
						"fgColor":"#e66793",
						"Color":"#e66793"
				});
				
				$(".pago_deudas").css("color","#e66793");
	  }

     return value + '%';
  }

}).children().off('mousewheel DOMMouseScroll');

 $(".endeudamiento").knob({
    height: 100,
  'format' : function (value) {
	  
	  console.log(value);
	  if(value < 50){
		
			   $(".endeudamiento").trigger('configure', {
					// min: '0',
					// max: '100',
					"fgColor":"#46cd93",
					"Color":"#46cd93"
				});
				
				$(".endeudamiento").css("color","#46cd93");
		
	  }else{
		  
			  $(".endeudamiento").trigger('configure', {
						// min: '0',//5
						// max: '100',
						"fgColor":"#e66793",
						"Color":"#e66793"
				});
				
				$(".endeudamiento").css("color","#e66793");
	  }

     return value + '%';
  }

}).children().off('mousewheel DOMMouseScroll');

$(".patrimonio_objetivo").knob({
    height: 100,
  'format' : function (value) {
	  
	  console.log(value);
	  if(value > 50){
		
			   $(".patrimonio_objetivo").trigger('configure', {
					// min: '0',
					// max: '100',
					"fgColor":"#46cd93",
					"Color":"#46cd93"
				});
				
				$(".patrimonio_objetivo").css("color","#46cd93");
		
	  }else{
		  
			  $(".patrimonio_objetivo").trigger('configure', {
						// min: '0',//5
						// max: '100',
						"fgColor":"#e66793",
						"Color":"#e66793"
				});
				
				$(".patrimonio_objetivo").css("color","#e66793");
	  }

     return '$' + value + 'MM';
  }

}).children().off('mousewheel DOMMouseScroll');


/*   $(".knob-mil").knob({
    height: 100,
  'format' : function (value) {
     return "$ "+value + ' mil';
  }

  });

  $(".knob-MM").knob({
    height: 100,
  'format' : function (value) {
     return "$ "+value + ' MM';
  }

}); */

var $barData = [
            {y: '2009', a: 100, b: 90},
            {y: '2010', a: 75, b: 65},
            {y: '2011', a: 50, b: 40},
            {y: '2012', a: 75, b: 65},
            {y: '2013', a: 50, b: 40},
            {y: '2014', a: 75, b: 65}
        ];
		
		
		Morris.Bar({
          element: 'morris-bar-example',
          data: $barData,
          xkey: 'y',
          ykeys: ['a', 'b'],
          labels: ['Series A', 'Series B'],
           gridLineColor: '#eef0f2',
            barSizeRatio: 0.4,
            resize: true,
            hideHover: 'auto',
          barColors: ['#5985ee', '#46cd93']
        });

//createLineChart('morris-bar-example', $barData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#5985ee', '#46cd93']);

});
</script>