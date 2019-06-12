<?php
include_once("conexion.php");

class consultar{
	
    static function existe($cod, $tabla){
        $bnd=false;
		$q="select * from ".$tabla." where codigo ='".$cod."'";
		
		$con=conexion::conectar();
		$r=mysql_query($q,$con);
		if(mysql_num_rows($r)>0){
		$bnd=true; 
		}
        
        mysql_close($con);
        return $bnd;
		
	}//getCode_db
}//
?>