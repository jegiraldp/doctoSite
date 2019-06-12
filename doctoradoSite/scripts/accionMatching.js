$(document).ready(function(){

$.post("./util/cargarFromFases.php",{op:2,ob:0,ct:0}, function(data,status){
		var datas = data.split(",");
		var obj = datas[0];
		var ctx = datas[1];
		var mod = datas[2];
		var impri= '<b><b><i>Initial Data</i></b><br/>Reference Model:</b> '+mod+' --- ';
		impri+= '<b>Integration Goal:</b> '+obj+' --- ';
		impri+= '<b>Model Context:</b> '+ctx+'<br/>-----------<br/><b><i>Clustering Settings</i></b><br/>';
		impri+='<b>Center:</b><input type="text" name="txtCen" id="txtCen" size="5" value="5" /> --- ';
		impri+='<b>Distance:</b><input type="text" name="txtDis" id="txtDis" size="5" value="0.3" />';
		impri+='<input type="hidden" name="txtMod" id="txtMod" value="'+mod+'" /> --- ';
		impri+='<input type="button" id="boton" value="Start >>" />';
		impri+=' ---  Context Awareness:<input type="checkbox" id="txtContext" value="1"/>';
		impri+='<script src="scripts/accionSearch.js"></script>';
		$("div#divEncabezado").html(impri); 
		//reporte(mod);
	});//postquery
   ////
  
 
 });//ready