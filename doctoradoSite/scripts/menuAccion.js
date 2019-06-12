$(document).ready(function(){
$("a.opcion").click(function(){
 var t=$(this).attr('name');
 $("#divContenido").load(t);
 });//click
 });//ready