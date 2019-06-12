$(document).ready(function(){

$("a.fase").click(function(){
 var t=$(this).attr('name');
 $("#divContenido").load(t);
 });//click
 
 
  //cargar MR
 
	$.post("./util/cargarMR_metodo.php", function(data,status){
		//alert("Data: " + data + "\nStatus: " + status);
		$("div#selectMR").html(data); 
	});//postquery
   ////

 
 $("a#f2").click(function(){
//registrar
 var ob=$("input#txtFileObjetivo").val().split('\\').pop();
 var ct=$("input#txtFileContexto").val().split('\\').pop();
  var mr=$("select#txtRM").val();
  
 if(ob=="" || ct==""){
	alert("Falta cargar Objetivo de Integración y/o Modelo de Contexto");
	location.reload();
 }else{
	//cargar Datos
	$.post("./util/cargarFromFases.php", {op:1,ob:ob,ct:ct,mr:mr},function(data,status){ //opcion 1 es para registrar  opcion 2, para leer
		//$("div#selectMR").html(data);
	});//postquery
   ////
   }//else

 });//click
	
   
   
 
 });//ready