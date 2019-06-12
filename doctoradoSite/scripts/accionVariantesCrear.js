$(document).ready(function(){
//cargar referencias
$.post("./integration/createVariants/listReferences.php", function(data,status){
$("#divListarReferencia").html(data); 
});//postquery
//
$("a#volverListarF1").click(function(){
 var t=$(this).attr('name');
 $("#divContenido").load(t);
 });//click

 });//ready