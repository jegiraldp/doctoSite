<?php
include_once("conexion.php");

class cargarMR_metodo{
    
    
    static function cargar(){
        
        $con=conexion::conectar();
        $q="select * from docto_rm order by codigo";
        $retorno='Cargar Modelo de Referencia: <select id="txtRM">';
        $r=mysql_query($q,$con);
            while($f=mysql_fetch_array($r)){
	          $retorno.='<option value="'.$f['codigo'].'">'.$f['nombre'].'</option>';	
            }//while
            
            $retorno.='</select>';
         mysql_close($con);
        return $retorno;   
    }//cargar
    
    
}//class

print cargarMR_metodo::cargar();

?>