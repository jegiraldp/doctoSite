$(document).ready(function(){

$("input#botonListarUno").click(function() {
var tv=$("select#tipoVariante").val();
var rm=$("select#rm").val();
var te=$("select#tipoEvento").val();
if(tv==99 || rm==99 || te==99){
$("#divDatosReferencias").html("<br/><img src=./img/alert.png /><b>Faltan Datos !!!</b>"); 
$("#divPartReferencias").html("");
$("#divCampoTexto").html("");
}else{
if(te==1){
var impri='<hr/><table border="0" width="45%"><tr><td><label for="txtNombreA">Nombre de actividad:</label></td>';
impri+='<td><input type="text" name="txtNombreA" id="nombreA" />';
impri+=' <input type="button"  id="botonListarDos" value=">>>.." /></td></tr></table>';
impri+='<script src="scripts/accionVariantesChangeDos.js"></script>';
$("#divCampoTexto").html(impri); 
$("#divDatosReferencias").html("");
$("#divPartReferencias").html(""); 
}else{
$("#divCampoTexto").html(""); 
$.post("./integration/createVariants/listReferencesData.php",{idP:rm,op:"1"}, function(data,status){
$("#divPartReferencias").html("");
$("#divDatosReferencias").html(data); 
});//postquery
}//else 1

}//else 99

});//click

});//ready