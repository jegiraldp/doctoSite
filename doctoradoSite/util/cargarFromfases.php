<?php
include("conexion.php");
class cargarfromFases{
    
    static function setValue($_oi, $_ctx, $_mod){
        $con=conexion::conectar();
        $q="update docto_f2 set objetivo='".$_oi."', contexto='".$_ctx."', modelo='".$_mod."' where id=1";
        //print $q;
        $r=mysql_query($q,$con);
       mysql_close($con);
       
    }//setValue
    
    static function getValue($opc){
        $con=conexion::conectar();
        $q="select * from docto_f2 where id=1";
        $r=mysql_query($q,$con);
        $f=mysql_fetch_array($r);
        if($opc==1) $val=$f['objetivo'];
        if($opc==2) $val=$f['contexto'];
        if($opc==3) $val=$f['modelo'];
        
       mysql_close($con);
       return $val;
    }//setValue
    
}//class

$op=$_POST['op'];
$oi=$_POST['ob'];
$ctx=$_POST['ct'];
$mod=$_POST['mr'];

//print $op.'--'.$oi.'--'.$ctx.'--'.$mod.'<br/>';

if($op==1){
    cargarfromFases::setValue($oi, $ctx,$mod);
}//

if($op==2){
    $impri='';
    $impri.=cargarfromFases::getValue(1).',';
    $impri.=cargarfromFases::getValue(2).',';
    $impri.=cargarfromFases::getValue(3);
    print $impri;
}//

?>