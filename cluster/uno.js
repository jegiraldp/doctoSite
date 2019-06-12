$(document).ready(function(){
 $("input#botonAgrupar").click(function(){
	iniciar();
 });//click
 
 });//ready
 
function iniciar(){
var c1=$("input#textoC1").val();
var dm=$("input#textoDM").val();
var al=$("input#textoAL").val();
var nd=$("input#textoND").val();

if(c1=="" || dm=="" || al=="" || nd==""){
$("#divRespuesta").html("Campos vacios"); 
}else{
$.post("uno.php", {paramc1:c1,paramdm:dm,paramal:al,paramnd:nd}, function(data,status){
$("#divRespuesta").html(data); 
});//postquery

}//else
}//iniciar