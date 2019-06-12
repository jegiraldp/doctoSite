<?php
include("informacion.php");
require("insertar.php");
class analisis{

static function getReferencia($n){
	$contGateways=0;
	//captura de Proceso
	$idPro=informacion::getCodigo($n);
	$nProceso=informacion::getNombre($n);
	$numParticipants=informacion::getParticipants($n);
	$numActividades=informacion::getActividades($n);
	
	$numTransitions=informacion::getTransitions($n);
	$archivo=informacion::getArchivo($n);
	$imagen=informacion::getImagen($n);
	
	$i=0;
	//captura activity
	while($i<$numActividades){
		$j=0;
		$idAct=informacion::getIdAct($n,$i);
		$tipoGateway=informacion::getGateway($n,$i);
		if($tipoGateway==1 || $tipoGateway==2) $contGateways++;
		
		
		analisis::registraActividad($n,$i,$idAct,$idPro);
		$numRules=informacion::getNumRules($n,$i);
		//print '<br/>Rules '.$numRules.'<br/>';
		while($j<$numRules){
			//registra Rule
			analisis::registraRule($n,$i,$j,$idAct);	
			$j++;
		}//while
		
		$i++;
	}//while
	
	//capturaTransition
	$iii=0;
	while($iii<$numTransitions){
	analisis::registraTran($n,$iii,$idPro);
	$iii++;
	}//while
	
	//capturaParticipantes
	$ii=0;
	while($ii<$numParticipants){
	analisis::registraPar($n,$ii,$idPro);
	$ii++;
	}//while	
	
	//registra RM
	insertar::nuevoRM($idPro,$nProceso,$numParticipants,$numActividades,$contGateways,$numTransitions,$imagen,$archivo);

}//getReferencia

static function registraActividad($n,$i, $idAct,$idPro){
	$gateway=0;
	$nAct=informacion::getNAct($n,$i);
	$Part=informacion::getIdParticipant($n,$i);
	$desAct=informacion::getActivityDesc($n,$i);
	$gateway=informacion::getRouteType($n,$i);
	
	//registra Activity
	insertar::nuevaActivity($idAct,$idPro,$nAct,$Part,0,$desAct,$gateway);
	
}//registraActividad

static function registraRule($n,$act,$rule,$idAct){
$idRule=informacion::getIdRule($n,$act,$rule);
$tipoRule=substr($idRule, 0,2);
$valueRule=informacion::getValueRule($n,$act,$rule);

insertar::nuevaRule($idRule,$idAct,$tipoRule,$valueRule);//id,idActivity,tipo,value
}//registraRule

static function registraPar($n,$par,$pro){
//print '<br/>Registro Participante: '.$par.'-'.$n.'--'.$pro;
$idP=informacion::getIdPart($n,$par);
$namePart=informacion::getNPart($n,$par);
insertar::nuevoPart($idP,$pro,$namePart);

}//registraPar

static function registraTran($n,$tran,$pro){
$idT=informacion::getIdTran($n,$tran);
$from=informacion::getFromTran($n,$tran);
$to=informacion::getToTran($n,$tran);
$desc=informacion::getDescTran($n,$tran);
$prob=informacion::getProbTran($n,$tran);
insertar::nuevaTran($idT,$pro,$from,$to,$desc,$prob);

}//registraPar




//////////////get Ev
static function getEV($n){
$contGateways=0;
	//captura de Proceso
	$idPro=informacion::getCodigo($n);
	$idProRef=substr($idPro,5,9);
	$nProceso=informacion::getNombre($n);
	$numParticipants=informacion::getParticipants($n);
	$numActividades=informacion::getActividades($n);
	
	$numTransitions=informacion::getTransitions($n);
	$archivo=informacion::getArchivo($n);
	$imagen=informacion::getImagen($n);
	
	$i=0;
	//captura activity
	while($i<$numActividades){
		$j=0;
		$idAct=informacion::getIdAct($n,$i);
		$tipoGateway=informacion::getGateway($n,$i);
		if($tipoGateway==1 || $tipoGateway==2) $contGateways++;
		
		
		analisis::registraActividad($n,$i,$idAct,$idPro);
		$numRules=informacion::getNumRules($n,$i);
		//print '<br/>Rules '.$numRules.'<br/>';
		while($j<$numRules){
			//registra Rule
			analisis::registraRule($n,$i,$j,$idAct);	
			$j++;
		}//while
		
		$i++;
	}//while
	
	//capturaTransition
	$iii=0;
	while($iii<$numTransitions){
	analisis::registraTran($n,$iii,$idPro);
	$iii++;
	}//while
	
	//capturaParticipantes
	$ii=0;
	while($ii<$numParticipants){
	analisis::registraPar($n,$ii,$idPro);
	$ii++;
	}//while	
	
	//registra RM
	insertar::nuevoEV($idPro,$idProRef,$nProceso,$numParticipants,$numActividades,$contGateways,$numTransitions,$imagen,$archivo);
}//ev

static function getRV($n){
$contGateways=0;
	//captura de Proceso
	$idPro=informacion::getCodigo($n);
	$idProRef=substr($idPro,5,9);
	$nProceso=informacion::getNombre($n);
	$numParticipants=informacion::getParticipants($n);
	$numActividades=informacion::getActividades($n);
	
	$numTransitions=informacion::getTransitions($n);
	$archivo=informacion::getArchivo($n);
	$imagen=informacion::getImagen($n);
	
	$i=0;
	//captura activity
	while($i<$numActividades){
		$j=0;
		$idAct=informacion::getIdAct($n,$i);
		$tipoGateway=informacion::getGateway($n,$i);
		if($tipoGateway==1 || $tipoGateway==2) $contGateways++;
		
		
		analisis::registraActividad($n,$i,$idAct,$idPro);
		$numRules=informacion::getNumRules($n,$i);
		//print '<br/>Rules '.$numRules.'<br/>';
		while($j<$numRules){
			//registra Rule
			analisis::registraRule($n,$i,$j,$idAct);	
			$j++;
		}//while
		
		$i++;
	}//while
	
	//capturaTransition
	$iii=0;
	while($iii<$numTransitions){
	analisis::registraTran($n,$iii,$idPro);
	$iii++;
	}//while
	
	//capturaParticipantes
	$ii=0;
	while($ii<$numParticipants){
	analisis::registraPar($n,$ii,$idPro);
	$ii++;
	}//while	
	
	//registra RM
	insertar::nuevoRV($idPro,$idProRef,$nProceso,$numParticipants,$numActividades,$contGateways,$numTransitions,$imagen,$archivo);
}//rv

}//class
?>