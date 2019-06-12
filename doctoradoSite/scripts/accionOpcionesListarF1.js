$(document).ready(function(){

$("a#volverListarF1").click(function(){
 var t=$(this).attr('name');
 $("#divContenido").load(t);
 });//click


$("a#opcionNuevaVariante").click(function(){
 var t=$(this).attr('name');
 $("#divContenido").load(t);
 });//click
 

 });//ready