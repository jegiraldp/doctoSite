<?php
include_once("conexion.php");
include_once("encabezado.php");

class listarVariantes{

static function getNumberRules($idP){
$con=conexion::conectar();
$q="select * from docto_activity where idProceso = '".$idP."'";
$cont=0;
$r=mysql_query($q,$con);
if(mysql_num_rows($r)>0){
while($f=mysql_fetch_array($r)){
	$qRule="select * from docto_rules where idActivity = '".$f['id']."'";
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

static function getNumberVariants($idP, $op){

if($op==1){
$q="select * from docto_ev where rm = '".$idP."'";    
}
if($op==2){
$q="select * from docto_rv where rm = '".$idP."'";    
}
$contV=0;
$con=conexion::conectar();

$r=mysql_query($q,$con);
while($f=mysql_fetch_array($r)){
$contV++;	
}//while
mysql_close($con);
return $contV;
}//getNumberVariants

static function verEV($rm){
$con=conexion::conectar();
$q="select * from docto_ev where rm='".$rm."'";
//print $q."<br>";
$r=mysql_query($q,$con);

$tablaEV='<div id="divActVE"></div><div align="center">'.encabezado::cabVariante();
//$tablaEV='<div id="divActVE"></div><div align="center"><h3>Variantes por Evolución - Modelo: '.$rm.'</h3>'.encabezado::cabVariante();
while($f=mysql_fetch_array($r)){
$codProceso=$f['codigo'];
$tablaEV.='<tr id="filaTabla">
				<td>'.$codProceso.'_'.$f['nombre'].'</td>
				<td><a class="info" id="theParticipantsVE" name="'.$codProceso.'">'.$f['participantes'].'</a></td>
				<td><a class="info" id="theActivitiesVE" name="'.$codProceso.'">'.$f['actividades'].'</a></td>
				<td><a class="info" id="theGatewaysVE" name="'.$codProceso.'">'.$f['gateways'].'</a></td>
				<td><a class="info" id="theTransitionsVE" name="'.$codProceso.'">'.$f['transiciones'].'</a></td>
				<td><a class="info" id="theRulesVE" name="'.$codProceso.'">'.listarVariantes::getNumberRules($codProceso).'</a></td>';
				/*<td><a class="info" target="_blank" href="./integration/process/images/'.$f['imagen'].'"><img alt="Ver diagrama" src="./img/image.png"/></a></td>
				<td><a class="info" target="_blank" href="./integration/process/codes/'.$f['archivo'].'"><img alt="Ver Código XPDL" src="./img/xml.png"/></a></td>
				<td><a class="info" target="_blank" href="./integration/process/codes/'.$f['archivo'].'"><img alt="Ejecutar" src="./img/play.png"/></a></td>
                */
			$tablaEV.='</tr>';
}
mysql_close($con);
$tablaEV.='</table></div><script src="scripts/accionListarF1_VE.js"></script>';
return $tablaEV;
}//verEV

static function verRV($rm){
$con=conexion::conectar();
$q="select * from docto_rv where rm='".$rm."'";
//print $q."<br>";
$r=mysql_query($q,$con);

//$tablaEV='<div id="divActVE"></div><div align="center"><h3>Variantes por Petición - Modelo: '.$rm.'</h3>'.encabezado::cabVariante();
$tablaEV='<div id="divActVE"></div><div align="center">'.encabezado::cabVariante();
while($f=mysql_fetch_array($r)){
$codProceso=$f['codigo'];
$tablaEV.='<tr id="filaTabla">
				<td>'.$codProceso.'_'.$f['nombre'].'</td>
				<td><a class="info" id="theParticipantsVE" name="'.$codProceso.'">'.$f['participantes'].'</a></td>
				<td><a class="info" id="theActivitiesVE" name="'.$codProceso.'">'.$f['actividades'].'</a></td>
				<td><a class="info" id="theGatewaysVE" name="'.$codProceso.'">'.$f['gateways'].'</a></td>
				<td><a class="info" id="theTransitionsVE" name="'.$codProceso.'">'.$f['transiciones'].'</a></td>
				<td><a class="info" id="theRulesVE" name="'.$codProceso.'">'.listarVariantes::getNumberRules($codProceso).'</a></td>';
				/*<td><a class="info" target="_blank" href="./integration/process/images/'.$f['imagen'].'"><img alt="Ver diagrama" src="./img/image.png"/></a></td>
				<td><a class="info" target="_blank" href="./integration/process/codes/'.$f['archivo'].'"><img alt="Ver Código XPDL" src="./img/xml.png"/></a></td>
				<td><a class="info" target="_blank" href="./integration/process/codes/'.$f['archivo'].'"><img alt="Ejecutar" src="./img/play.png"/></a></td>
                */
			$tablaEV.='</tr>';
            
}
mysql_close($con);
$tablaEV.='</table></div><script src="scripts/accionListarF1_VE.js"></script>';
return $tablaEV;
}//verEV



}//class

$model=$_POST['proceso'];
$tp=$_POST['tipo'];

if($tp=="varianteE"){
//$retorno.='<hr/>'.listarVariantes::verEV($model);
$retorno.=listarVariantes::verEV($model);
}
if($tp=="varianteR"){
//$retorno.='<hr/>'.listarVariantes::verRV($model);
$retorno.=listarVariantes::verRV($model);
}
print $retorno;

?>