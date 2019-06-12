<?php
include_once("conexion.php");
include_once("listarVariantes.php");
include_once("encabezado.php");

class listar{

static function getNumberRules($idP){
$con=conexion::conectar();
$q="select * from docto_activity where idProceso = '".$idP."'";
$cont=0;
$r=mysql_query($q,$con);
if(mysql_num_rows($r)>0){
while($f=mysql_fetch_array($r)){
    
	$qRule="select * from docto_rules where idActivity = '".$f['id']."'";
    //print $qRule."<br/>";
	$rRule=mysql_query($qRule,$con);
	
	while($fRule=mysql_fetch_array($rRule)){
		$cont++;
	}
	
}//while
}else{
$cont=0;
}
//mysql_close($con);
return $cont;
}//getNumberRules

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
		$tabla.='<b>'.$cont.': '.$fRule['id'].'</b>,'.$fRule['value'].'<br/>';
	}
	
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

static function verRM(){

$con=conexion::conectar();
$q="select * from docto_rm order by codigo";
$r=mysql_query($q,$con);

$tablaRef='<div align="center"><div id="divAct"></div>'.encabezado::cabReferencia();	   
while($f=mysql_fetch_array($r)){
$codProceso=$f['codigo'];
$tablaRef.='<tr id="filaTabla">
				<td>'.$codProceso.'_'.$f['nombre'].'</td>
				<td><a class="info" id="theParticipants" name="'.$codProceso.'">'.$f['participantes'].'</a></td>
				<td><a class="info" id="theActivities" name="'.$codProceso.'">'.$f['actividades'].'</a></td>
				<td><a class="info" id="theGateways" name="'.$codProceso.'">'.$f['gateways'].'</a></td>
				<td><a class="info" id="theTransitions" name="'.$codProceso.'">'.$f['transiciones'].'</a></td>
				<td><a class="info" id="theRules" name="'.$codProceso.'">'.listar::getNumberRules($codProceso).'</a></td>
                <td><a id="varianteE" class="variantes" name="'.$f['codigo'].'"><i><u>'.listarVariantes::getNumberVariants($codProceso,1).'</u></i></a></td>
				<td><a id="varianteR" name="'.$f['codigo'].'"><i><u>'.listarVariantes::getNumberVariants($codProceso,2).'</u></i></a></td>';
				/*<td><a class="info" target="_blank" href="./integration/process/images/'.$f['imagen'].'"><img alt="Ver diagrama" src="./img/image.png"/></a></td>
				<td><a class="info" target="_blank" href="./integration/process/codes/'.$f['archivo'].'"><img alt="Ver Código XPDL" src="./img/xml.png"/></a></td>
				<td><a class="info" target="_blank" href="./integration/process/codes/'.$f['archivo'].'"><img alt="Ejecutar" src="./img/play.png"/></a></td>
                */
				
			$tablaRef.= '</tr>';
}
//mysql_close($con);
$tablaRef.='</table></div><script src="scripts/accionListarF1_MR.js"></script>';
return $tablaRef;
}//listarRM

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

}//class

$idA = $_POST['id'];
$tipoL = $_POST['t'];
if($tipoL=="1"){
print listar::verInfoAct($idA);
}

if($tipoL=="2"){
print listar::verInfoPart($idA);
}

if($tipoL=="3"){
print listar::verInfoGateways($idA);
}

if($tipoL=="4"){
print listar::verInfoTran($idA);
}

if($tipoL=="5"){
print listar::verInfoRules($idA);
}
?>

