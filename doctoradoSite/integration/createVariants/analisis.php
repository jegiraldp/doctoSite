<?php
class analisis{

static function getActividadesNames($nameDoc){
	$doc = new DOMDocument();
	$fileName= $nameDoc;
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

}
?>