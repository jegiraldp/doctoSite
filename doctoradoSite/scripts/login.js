$(document).ready(function(){
  $("input#boton").click(function(){
		var usr=$("input#usr").val();
		var clv=$("input#clv").val();
		if(usr=="" || clv==""){
			$("div#divEscondido").show("slow");
			document.getElementById("divEscondido").innerHTML="<img src=./img/ojo.png /> Faltan Datos !!";
		}else{
		//ajax jquery Envio post
	  $.post("./util/login.php",{usuario:usr,clave:clv}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		
		if(data==99){
		$("div#divEscondido").show("slow");
		$("div#divEscondido").html("<img src=./img/ojo.png /> USUARIO NO REGISTRADO !!");
		}else{
		$("input#usr").val("");
		$("input#clv").val("");
		//$("div#divEscondido").show("slow");
		$("div#divContenido").html("<img src=./img/hand.png /> Bienvenido: <b>"+data+"</b>"); 
		////cargarMenuAdmin
		cargarMenuAdmin();
		}//else
	});//postquery
		
	}//else
  });//click

	function cargarMenuAdmin(){
	
	$.post("./util/inicioAdmin.php", function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divMenu").html(data); 
	});//postquery
	}//cargarMenu
  
  
  
});//ready



 

  
 