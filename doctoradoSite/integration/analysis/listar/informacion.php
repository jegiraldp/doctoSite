<?php
class informacion{

static function getCodigo($name){

	$doc = new DOMDocument();
	$doc->load('../../process/codes/'.$name);
	$process = $doc->getElementsByTagName('Process');
	foreach($process as $child) {
		$idProcess = $child->getAttribute('id');
	}//for
	unset($doc); //freeing memory space
return $idProcess;
}//getCodigo

static function getRm($name){
	$pos1 = strpos($name, "_");
	$pos1+=1;
	$pos2 = strpos($name, ".");
	$tam=$pos2-$pos1;
	$rm = substr($name,$pos1,-$tam);
return $rm;
}//getCodigo

static function getCodReference($cod){
	$pos = strpos($cod, "_");
	$pos+=1;
	$codReference = substr($cod, $pos);
return $codReference;
}//getCodReference

static function getNombre($name){
	$doc = new DOMDocument();
	$fileName= $name;
	$doc->load('../../process/codes/'.$fileName);
	$process = $doc->getElementsByTagName('Process');
	foreach($process as $child) {
		$nameProcess = $child->getAttribute('name');	
	}//for
	unset($doc); //freeing memory space
return $nameProcess;
}//getNombre

static function getNAct($name, $i){
$doc=simplexml_load_file('../../process/codes/'.$name);
$nActivity=$doc->WorkflowProcess->Activities->Activity[$i]->attributes()->name; 
unset($doc); //freeing memory space
return $nActivity;
}//getNombre

static function getStatus($name, $i){
	
		//print '<br/>activity []'.$i;
	$doc=simplexml_load_file('../../process/codes/'.$name);
	$nombre=$doc->WorkflowProcess->Activities->Activity[$i]->attributes()->participant; 
	$nameF=substr($nombre, -2);
	unset($doc); //freeing memory space
	return $nameF;
}//getNombre

static function getIdParticipant($name, $i){
	
	//print '<br/>activity []'.$i;
	$doc=simplexml_load_file('../../process/codes/'.$name);
	$nP=$doc->WorkflowProcess->Activities->Activity[$i]->attributes()->participant; 
	$nPFinal=substr($nP, 1);
	unset($doc); //freeing memory space
	return $nPFinal;
}//getNombre

static function getIdAct($name, $i){
$doc=simplexml_load_file('../../process/codes/'.$name);
$codActivity=$doc->WorkflowProcess->Activities->Activity[$i]->attributes()->id; 
unset($doc); //freeing memory space
return $codActivity;
}//getCodeActivities

static function getActividades($name){
	$doc = new DOMDocument();
	$fileName= $name;
	$doc->load('../../process/codes/'.$fileName);
	$process = $doc->getElementsByTagName('Process');
	foreach($process as $child){ 
		$activities = $child->getElementsByTagName('Activity');
		$contActi = 0; 
		foreach ($activities as $Activity){
			$contActi++;	
		}//for
	}//for
	unset($doc); //freeing memory space
return $contActi;
}//getActividades

static function getParticipants($name){
	$doc = new DOMDocument();
	$doc->load('../../process/codes/'.$name);
	$process = $doc->getElementsByTagName('Process');
	foreach($process as $child){ 
		$participants = $child->getElementsByTagName('participant');
		$contPp = 0;
		foreach ($participants as $participant) {
			$contPp++;
		}//for
	}//for
	unset($doc); //freeing memory space
return $contPp;
}//getParticipants

static function getGateway($name, $i){
	$doc=simplexml_load_file('../../process/codes/'.$name);
	$gt=$doc->WorkflowProcess->Activities->Activity[$i]->Route->attributes()->Type;
	unset($doc); //freeing memory space
	return $gt;
}//getActivityDesc

static function getTransitions($name){
	$doc = new DOMDocument();
	$fileName= $name;
	$doc->load('../../process/codes/'.$fileName);
	$process = $doc->getElementsByTagName('Process');
	foreach($process as $child){ 
		$transitions = $child->getElementsByTagName('Transition');
		$contTrans = 0;
		foreach($transitions as $transition) 
		{ 
			$contTrans ++;
		}//for
	}//for
	unset($doc); //freeing memory space
return $contTrans;
}//getTransition

static function getArchivo($name){
	return $name;
}//getArchivo

static function getImagen($name){
	$pos = strpos($name, ".");
	$imageName = substr($name, 0, $pos);
	$extendImage = ".png";
	$imageName .= $extendImage;
	return $imageName;
}//getImagen

static function getActivityDesc($name, $i){
	$doc=simplexml_load_file('../../process/codes/'.$name);
	$description=$doc->WorkflowProcess->Activities->Activity[$i]->Description;
	unset($doc); //freeing memory space
	return $description;
}//getActivityDesc

static function getRouteType($name, $i){
	$doc=simplexml_load_file('../../process/codes/'.$name);
	$rType=$doc->WorkflowProcess->Activities->Activity[$i]->Route->attributes()->Type;
	unset($doc); //freeing memory space
	return $rType;
}//getActivityDesc

static function getNumRules($name, $i){
	$doc=simplexml_load_file('../../process/codes/'.$name);
	$contR=0;
	foreach($doc->WorkflowProcess->Activities->Activity[$i]->ExtendedAttributes->ExtendedAttribute as $e){
	$contR++;
	}
	unset($doc); //freeing memory space
	return $contR;
}//getNumRules

static function getIdRule($name, $iA, $iR){
$doc=simplexml_load_file('../../process/codes/'.$name);
$idRule=$doc->WorkflowProcess->Activities->Activity[$iA]->ExtendedAttributes->ExtendedAttribute[$iR]->attributes()->id; 
unset($doc); //freeing memory space
return $idRule;
}//getRuleId

static function getValueRule($name, $iA, $iR){
$doc=simplexml_load_file('../../process/codes/'.$name);
$vRule=$doc->WorkflowProcess->Activities->Activity[$iA]->ExtendedAttributes->ExtendedAttribute[$iR]->value; 
unset($doc); //freeing memory space
return $vRule;
}//getRuleType

static function getIdPart($name, $iPart){
$doc=simplexml_load_file('../../process/codes/'.$name);
$idP=$doc->Participants->participant[$iPart]->attributes()->id; 
unset($doc); //freeing memory space
return $idP;
}//getIdParticipant

static function getIdTran($name, $iT){
$doc=simplexml_load_file('../../process/codes/'.$name);
$idT=$doc->WorkflowProcess->Transitions->Transition[$iT]->attributes()->id; 
unset($doc); //freeing memory space
return $idT;
}//getIdTran

static function getFromTran($name, $iT){
$doc=simplexml_load_file('../../process/codes/'.$name);
$fT=$doc->WorkflowProcess->Transitions->Transition[$iT]->attributes()->From; 
$fFinal=substr($fT, 1);
unset($doc); //freeing memory space
return $fFinal;
}//getFromTran

static function getToTran($name, $iT){
$doc=simplexml_load_file('../../process/codes/'.$name);
$tT=$doc->WorkflowProcess->Transitions->Transition[$iT]->attributes()->To; 
$tFinal=substr($tT, 1);
unset($doc); //freeing memory space
return $tFinal;
}//getFromTran

static function getDescTran($name, $iT){
$doc=simplexml_load_file('../../process/codes/'.$name);
$descT="-";
$descT=$doc->WorkflowProcess->Transitions->Transition[$iT]->Description; 
unset($doc); //freeing memory space
return $descT;
}//getFromTran

static function getProbTran($name, $iT){
$doc=simplexml_load_file('../../process/codes/'.$name);
$probT=$doc->WorkflowProcess->Transitions->Transition[$iT]->Condition->Expression; 
unset($doc); //freeing memory space
return $probT;
}//getFromTran

static function getNPart($name, $iPart){
$doc=simplexml_load_file('../../process/codes/'.$name);
$nP=$doc->Participants->participant[$iPart]->attributes()->name; 
unset($doc); //freeing memory space
return $nP;
}//getIdParticipant


}//class
?>