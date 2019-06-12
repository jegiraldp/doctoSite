<?php
include_once("conexion.php");

class listarVariantesData{
static function verInfoAct($idP){

$con=conexion::conectar();
$q="select * from docto_activity where idProceso = '".$idP."'";
$tabla='';
$cont=0;
$r=mysql_query($q,$con);
if(mysql_num_rows($r)>0){
while($f=mysql_fetch_array($r)){
$cont++;
$tabla.='<b>'.$cont.': '.$f['description'].'</b>,'.$f['participant'].','.$f['status'].','.$f['gateway'].'<br/>';
}//while
}else{
$tabla.='No hay datos !!';
}
mysql_close($con);
return $tabla;
}//infoAct

static function verInfoPart($idProceso){
$con=conexion::conectar();
$q="select * from docto_participant where idProceso = '".$idProceso."'";
$r=mysql_query($q,$con);
$tabla='';
$cont=0;
if(mysql_num_rows($r)>0){
while($f=mysql_fetch_array($r)){
$cont++;
$tabla.='<b>'.$cont.'</b>: '.$f['id'].',<b>'.$f['name'].'</b><br/>';
}
}else{
$tabla.='No hay datos !!';
}
mysql_close($con);
return $tabla;
}//infoAct

static function verInfoGateways($idProceso){
$con=conexion::conectar();
$q="select * from docto_activity where idProceso = '".$idProceso."' and gateway ='1'";
$q2="select * from docto_activity where idProceso = '".$idProceso."' and gateway ='2'";
$r=mysql_query($q,$con);
$r2=mysql_query($q2,$con);
$tabla='';
$cont=0;
if(mysql_num_rows($r)>0 || mysql_num_rows($r2)>0){
while($f=mysql_fetch_array($r)){
$cont++;
$tabla.='<b>'.$cont.':'.$f['description'].'</b>,'.$f['participant'].','.$f['status'].'</br>';
}//while

////

while($f2=mysql_fetch_array($r2)){
$cont++;
$tabla.='<b>'.$cont.':'.$f2['description'].'</b>,'.$f2['participant'].','.$f2['status'].'</br>';
}//while
}else{
$tabla.='No hay datos !!';
}
//////////



mysql_close($con);
return $tabla;
}//infoAct

static function verInfoTran($idP){

$con=conexion::conectar();
$q="select * from docto_transition where idProceso = '".$idP."'";
$tabla='';
$cont=0;
$r=mysql_query($q,$con);
if(mysql_num_rows($r)>0){
while($f=mysql_fetch_array($r)){
$cont++;
$tabla.='<b>'.$cont.':</b> '.$f['from'].'=>'.$f['to'].','.$f['prob'].','.$f['description'].'<br/>';
}//while
}else{
$tabla.='No hay datos !!';
}
mysql_close($con);
return $tabla;
}//infoAct

static function verInfoRules($idP){

$con=conexion::conectar();
$q="select * from docto_activity where idProceso = '".$idP."'";
$tabla='';

$r=mysql_query($q,$con);
if(mysql_num_rows($r)>0){
$cont=0;
while($f=mysql_fetch_array($r)){
	$qRule="select * from docto_rules where idActivity = '".$f['id']."'";
	$rRule=mysql_query($qRule,$con);
	
	while($fRule=mysql_fetch_array($rRule)){
		$cont++;
		$tabla.='<b>'.$cont.': '.$fRule['idActivity'].'</b>,'.$fRule['value'].'<br/>';
	}
	
}//while
}else{
$tabla.='No hay datos !!';
}
mysql_close($con);
return $tabla;
}//infoAct

}//class

$idA = $_POST['id'];
$opInfo = $_POST['opInfo'];
if($opInfo=="1"){
print listarVariantesData::verInfoAct($idA);
}

if($opInfo=="2"){
print listarVariantesData::verInfoPart($idA);
}

if($opInfo=="3"){
print listarVariantesData::verInfoGateways($idA);
}

if($opInfo=="4"){
print listarVariantesData::verInfoTran($idA);
}
if($opInfo=="5"){
print listarVariantesData::verInfoRules($idA);
}
?>