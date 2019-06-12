$(document).ready(function(){
$("input#botonListarDos").click(function() {
var na=$("input#nombreA").val();
var rm=$("select#rm").val();

if(na==""){
$("#divDatosReferencias").html("<br/><img src=./img/alert.png /><b>Faltan Datos !!!..</b>"); 
}else{
$.post("./integration/createVariants/listParticipantsData.php",{idP:rm,op:"99"}, function(data,status){
//$("#divDatosReferencias").html("");
$("#divPartReferencias").html(data); 
});//postquery

$.post("./integration/createVariants/listReferencesData.php",{idP:rm,op:"2"}, function(data,status){
$("#divDatosReferencias").html(data); 
});//postquery


}//else

});//click

});//ready