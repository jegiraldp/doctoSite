<?php
require("analisis.php");
include("listar.php");
include("consultar.php");

$path = "../../process/codes";
$dir = opendir($path);

$retorno="<br/>";

while ($file = readdir($dir)){ 
    $name = substr($file, 0, 2);
    
	if($file == '.' || $file == '..'){
	}else if (strcmp($name, "rm") == 0) {
		$nameRM = substr($file, 0, 4);
        if(consultar::existe($nameRM,"docto_rm")){
			
        }else{
            $retorno.="(<b>Repository:</b><i>New item:".$file.'</i>, --> <b>System:</b><i> List process updated !</i>)<br/>';
            analisis::getReferencia($file);
        }
        
        
    }else if (strcmp($name, "ev") == 0) {
	   $nameEV = substr($file, 0, 9);
		if(consultar::existe($nameEV,"docto_ev")){
            
        }else{
            $retorno.="(<b>Repository:</b><i>New item,".$file.'</i>, -- <b>System:</b><i> List process updated !</i>)<br/>';
            analisis::getEV($file);
        }
        
        //
        
	}else if (strcmp($name, "rv") == 0) {
		$nameRV = substr($file, 0, 9);
        if(consultar::existe($nameRV,"docto_rv")){
            
        }else{
            $retorno.="(<b>Repository:</b><i>New item,".$file.'</i>, -- <b>System:</b><i> List process updated !</i>)<br/>';
            analisis::getRV($file);
        }
        
        
	}		
}
closedir($dir);

$retorno.=listar::verRM();
print $retorno;
?>