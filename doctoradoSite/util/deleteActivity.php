<?php
class deleteActivity{

static function deleteA($idAct,$doc){

foreach($doc->WorkflowProcess->Activities->Activity as $act){
 if($act['id']==$idAct){
	$dom=dom_import_simplexml($act);
    $dom->parentNode->removeChild($dom);
}//if
 }//for
unset($doc); //freeing memory space
}//deleteActivity



}//class
$doc=simplexml_load_file('xml.xml');
deleteActivity::deleteA('a02_rm01',$doc);
//
$fd = fopen("copia.xml", "w+");
fwrite($fd, $doc->saveXML());
fclose($fd);
//
print 'listo';
?>
