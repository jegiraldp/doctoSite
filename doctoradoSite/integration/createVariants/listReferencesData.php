<?php
require("../analysis/listar/conexion.php");
$rm=$_POST['idP'];
$op=$_POST['op'];
$con=conexion::conectar();
$q="select * from docto_activity where idProceso = '".$rm."'";
if($op=="2")$msg="Seleccione Actividad (izquierda):";
if($op=="1")$msg="Seleccione Actividad a eliminar:";

$retorno='<table border="0" width="45%">
<tr><td><label for="txtActivitiesRM">'.$msg.'</label></td>
<td><select id="rm" name="txtActivitiesRM"><option value="99">---</option>';
$r=mysql_query($q,$con);
//
while($fila=mysql_fetch_array($r)){
$idA=$fila['id'];
$gt=$fila['gateway'];
if($gt=="66" || $gt=="99"){
	if($gt=="66" && $op=="2"){ // va a adicionar. No puede adicionar después de fin
	$retorno.='<option value="'.$idA.'">'.$fila['name'].'</option>';
	}
}else{
$retorno.='<option value="'.$idA.'">'.$fila['name'].'</option>';
}//else inicio/fin
}//while
//
$retorno.='</select> <input type="button" id="botonCrearFile" value=">>>"/></td></tr></table>
<script src="scripts/accionVariantesCrearFile.js"></script>';
mysql_close($con);
print $retorno;
?>