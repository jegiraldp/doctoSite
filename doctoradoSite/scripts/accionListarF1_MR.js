$(document).ready(function(){
 
 $("a#varianteE").click(function(){
 var idProceso=$(this).attr('name');
 var tipo=$(this).attr('id');
 cargarVariantes(idProceso,tipo);
 });//click
 
 $("a#varianteR").click(function(){
 var t=$(this).attr('name');
  var tipo=$(this).attr('id');
 cargarVariantes(t,tipo);
 });//click
 
  $("a#theActivities").click(function(e){
 //$("div#divAct").show("slow");
 $("#divAct").css("left", e.pageX + 5);
 $("#divAct").css("top", e.pageY + 5);
 $("#divAct").css("display", "block");
var idAct=$(this).attr('name');

	$.post("integration/analysis/listar/listar.php",{id:idAct,t:"1"}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divAct").show("slow");
		var ocultar='<a id="ocultarMR"><img src="./img/hide.png"/><u>Ocultar</u></a><hr/>';
		$("div#divAct").html(ocultar+data+'<script src="scripts/accionOcultarVE.js"></script>'); 
	});//postquery
	
 });//click
 
  $("a#theParticipants").click(function(e){
 //$("div#divAct").show("slow");
 $("#divAct").css("left", e.pageX + 5);
 $("#divAct").css("top", e.pageY + 5);
 $("#divAct").css("display", "block");
	var idAct=$(this).attr('name');

	$.post("integration/analysis/listar/listar.php",{id:idAct,t:"2"}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divAct").show("slow");
		var ocultar='<a id="ocultarMR"><img src="./img/hide.png"/><u>Ocultar</u></a><hr/>';
		$("div#divAct").html(ocultar+data+'<script src="scripts/accionOcultarVE.js"></script>'); 
	});//postquery
	
 });//click
 
   $("a#theGateways").click(function(e){
 //$("div#divAct").show("slow");
 $("#divAct").css("left", e.pageX + 5);
 $("#divAct").css("top", e.pageY + 5);
 $("#divAct").css("display", "block");
	var idAct=$(this).attr('name');

	$.post("integration/analysis/listar/listar.php",{id:idAct,t:"3"}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divAct").show("slow");
		var ocultar='<a id="ocultarMR"><img src="./img/hide.png"/><u>Ocultar</u></a><hr/>';
		$("div#divAct").html(ocultar+data+'<script src="scripts/accionOcultarVE.js"></script>'); 
	});//postquery
	
 });//click
 
   $("a#theTransitions").click(function(e){
 //$("div#divAct").show("slow");
 $("#divAct").css("left", e.pageX + 5);
 $("#divAct").css("top", e.pageY + 5);
 $("#divAct").css("display", "block");
	var idAct=$(this).attr('name');

	$.post("integration/analysis/listar/listar.php",{id:idAct,t:"4"}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divAct").show("slow");
		var ocultar='<a id="ocultarMR"><img src="./img/hide.png"/><u>Ocultar</u></a><hr/>';
		$("div#divAct").html(ocultar+data+'<script src="scripts/accionOcultarVE.js"></script>'); 
	});//postquery
	
 });//click
 
    $("a#theRules").click(function(e){
 
 $("#divAct").css("left", e.pageX + 5);
 $("#divAct").css("top", e.pageY + 5);
 $("#divAct").css("display", "block");
	var idAct=$(this).attr('name');

	$.post("integration/analysis/listar/listar.php",{id:idAct,t:"5"}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divAct").show("slow");
		var ocultar='<a id="ocultarMR"><img src="./img/hide.png"/><u>Ocultar</u></a><hr/>';
		$("div#divAct").html(ocultar+data+'<script src="scripts/accionOcultarVE.js"></script>'); 
	});//postquery
	
 });//click
 
    
 /////////////////////
 
 function cargarVariantes(idP,tv){
 $.post("integration/analysis/listar/listarVariantes.php",{proceso:idP,tipo:tv}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divListarF1Variantes").html(data); 
	});//postquery
	}//cargarV
 
 });//ready