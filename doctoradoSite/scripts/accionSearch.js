$(document).ready(function(){
	
	$("input#boton").click(function() {
	
	var cen= $("input#txtCen").val();
	var dis= $("input#txtDis").val();
	var mod= $("input#txtMod").val();
	$("div#divResultado").html('<font color="blue"><img src="./img/time.gif" width="24" height="24">Thinking...Please Wait....</font>'); 
	//alert(cen+"--"+dis+"--"+mod);
	
	 if ($('#txtContext').prop('checked')){
		dis=dis-0.1;
		cen=cen-0.1;
		//alert(dis);
		//alert(cen);
	 }
	
	$.post("./integration/analysis/similitud/inicio.php",{op:1,pro:mod,cen:cen,dis:dis}, function(data,status){
		$("div#divResultado").html(data);
	});//postquery
   
 });//click
 });//ready