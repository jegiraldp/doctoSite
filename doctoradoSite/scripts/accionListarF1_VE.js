$(document).ready(function(){
 
 $("a#theActivitiesVE").click(function(e){
 $("#divActVE").css("left", e.pageX + 5);
 $("#divActVE").css("top", e.pageY + 5);
 $("#divActVE").css("display", "block");
 var idAct=$(this).attr('name');

	$.post("integration/analysis/listar/listarVariantesData.php",{id:idAct,opInfo:"1"}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divActVE").show("slow");
		var ocultar='<a id="ocultar"><img src="./img/hide.png"/><u>Ocultar</u></a><hr/>';
		$("div#divActVE").html(ocultar+data+'<script src="scripts/accionOcultarVE.js"></script>'); 
	});//postquery
	
 });//click
 
 $("a#theParticipantsVE").click(function(e){
 $("#divActVE").css("left", e.pageX + 5);
 $("#divActVE").css("top", e.pageY + 5);
 $("#divActVE").css("display", "block");
 var idAct=$(this).attr('name');

	$.post("integration/analysis/listar/listarVariantesData.php",{id:idAct,opInfo:"2"}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divActVE").show("slow");
		var ocultar='<a id="ocultar"><img src="./img/hide.png"/><u>Ocultar</u></a><hr/>';
		$("div#divActVE").html(ocultar+data+'<script src="scripts/accionOcultarVE.js"></script>'); 
	});//postquery
	
 });//click
 
 $("a#theGatewaysVE").click(function(e){
 $("#divActVE").css("left", e.pageX + 5);
 $("#divActVE").css("top", e.pageY + 5);
 $("#divActVE").css("display", "block");
 var idAct=$(this).attr('name');

	$.post("integration/analysis/listar/listarVariantesData.php",{id:idAct,opInfo:"3"}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divActVE").show("slow");
		var ocultar='<a id="ocultar"><img src="./img/hide.png"/><u>Ocultar</u></a><hr/>';
		$("div#divActVE").html(ocultar+data+'<script src="scripts/accionOcultarVE.js"></script>'); 
	});//postquery
	
 });//click
 
$("a#theTransitionsVE").click(function(e){
 $("#divActVE").css("left", e.pageX + 5);
 $("#divActVE").css("top", e.pageY + 5);
 $("#divActVE").css("display", "block");
 var idAct=$(this).attr('name');

	$.post("integration/analysis/listar/listarVariantesData.php",{id:idAct,opInfo:"4"}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divActVE").show("slow");
		var ocultar='<a id="ocultar"><img src="./img/hide.png"/><u>Ocultar</u></a><hr/>';
		$("div#divActVE").html(ocultar+data+'<script src="scripts/accionOcultarVE.js"></script>'); 
	});//postquery
	
});//click

$("a#theRulesVE").click(function(e){
 $("#divActVE").css("left", e.pageX + 5);
 $("#divActVE").css("top", e.pageY + 5);
 $("#divActVE").css("display", "block");
 var idAct=$(this).attr('name');

	$.post("integration/analysis/listar/listarVariantesData.php",{id:idAct,opInfo:"5"}, function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#divActVE").show("slow");
		var ocultar='<a id="ocultar"><img src="./img/hide.png"/><u>Ocultar</u></a><hr/>';
		$("div#divActVE").html(ocultar+data+'<script src="scripts/accionOcultarVE.js"></script>'); 
	});//postquery
	
 });//click

 
 });//ready