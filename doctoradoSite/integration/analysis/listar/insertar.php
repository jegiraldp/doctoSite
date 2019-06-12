<?php
include_once("conexion.php");
class insertar{

static function nuevoRM($c,$n,$p,$a,$g,$t,$i,$f){
	$con=conexion::conectar();
	$q="insert into docto_rm (codigo,nombre,participantes,actividades,gateways,transiciones,imagen,archivo) values ('$c','$n','$p','$a','$g','$t','$i','$f')";
	//print "<br/>".$q."<br/>";
	mysql_query($q,$con);
	mysql_close($con);
}//nuevo

static function nuevoEV($c,$rm,$n,$p,$a,$g,$t,$i,$f){
	$con=conexion::conectar();
	$q="insert into docto_ev (codigo,rm,nombre,participantes,actividades,gateways,transiciones,imagen,archivo) values ('$c','$rm','$n','$p','$a','$g','$t','$i','$f')";
	//print $q."<br/>";
	mysql_query($q,$con);
	mysql_close($con);
}//nuevoEV

static function nuevoRV($c,$rm,$n,$p,$a,$g,$t,$i,$f){
	$con=conexion::conectar();
	$q="insert into docto_rv (codigo,rm,nombre,participantes,actividades,gateways,transiciones,imagen,archivo) values ('$c','$rm','$n','$p','$a','$g','$t','$i','$f')";
	//print $q."<br/>";
	mysql_query($q,$con);
	mysql_close($con);
}//nuevoRV

static function nuevaActivity($i,$idP,$n,$p,$s,$d,$g){
	$con=conexion::conectar();
	$q="insert into docto_activity (id,idProceso,name,participant,status,description,gateway) values ('$i','$idP','$n','$p','$s','$d','$g')";
	//print "<br/><b>".$q."</b>";
	mysql_query($q,$con);
	mysql_close($con);
}//nuevoActivity

static function nuevaRule($i,$idA,$tipo,$val){
	$con=conexion::conectar();
	$q="insert into docto_rules (id,idActivity,tipo,value) values ('$i','$idA','$tipo','$val')";
	//print "<br/>".$q;
	mysql_query($q,$con);
	mysql_close($con);
}//nuevaRule

static function nuevoPart($iP,$idPro,$nom){
	$con=conexion::conectar();
	$q="insert into docto_participant (id,idProceso,name) values ('$iP','$idPro','$nom')";
	//print "<br/>".$q;
	mysql_query($q,$con);
	mysql_close($con);
}//nuevoPart

static function nuevaTran($iT,$idPro,$f,$t,$d,$pro){
	$con=conexion::conectar();
	$q="insert into docto_transition values ('$iT','$idPro','$f','$t','$d','$pro')";
	//print "<br/>".$q;
	mysql_query($q,$con);
	mysql_close($con);
}//nuevaTran


}//Class
?>