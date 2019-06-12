<?php
 include_once("../listar/conexion.php");
class listarRM{
  
static function numerosRM($opt){
$con=conexion::conectar();
$q="select * from ".$opt;
//print $q."<br/>";
$r=mysql_query($q,$con);
$num=mysql_num_rows($r);
//print $num."<br/>";
mysql_close($con);
return $num;
}//numerosRM
static function getNombre($indice,$opt){
    $cont=0;
    $con=conexion::conectar();
    $q="select * from ".$opt;
    $r=mysql_query($q,$con);
                   
    while($f=mysql_fetch_array($r)){
           if($cont == $indice){
           $nombre=$f['nombre'];            
        }
        $cont++;
    }//while
    mysql_close($con);
   // print "nombre :".$nombre."<br/>";
    return $nombre;   
}//getNombre
static function getCodigo($indice,$opt){
    $cont=0;
    $con=conexion::conectar();
    $q="select * from ".$opt;
    //print "codigo :".$q."<br/>"; 
    $r=mysql_query($q,$con);
                   
    while($f=mysql_fetch_array($r)){
           if($cont == $indice){
           $cod=$f['codigo'];            
        }
        $cont++;
    }//while
    mysql_close($con);
    //print "codigo :".$cod."<br/>";
    return $cod;   
}//getNombre
static function getNumActivities($idProceso){
    $cont=0;
    $con=conexion::conectar();
    $q="select * from docto_activity where idProceso ='".$idProceso."'";
    //print "numAct :".$q."<br/>";
    $r=mysql_query($q,$con);
    $num=mysql_num_rows($r);
    mysql_close($con); 
    //print "numAct :".$num."<br/>";                  
    return $num;   
}//getNumActivities
static function getNumPar($idProceso){
    $cont=0;
    $con=conexion::conectar();
    $q="select * from docto_participant where idProceso ='".$idProceso."'";
    $r=mysql_query($q,$con);
    $num=mysql_num_rows($r); 
    mysql_close($con);
    //print $num.'<br/>';                  
    return $num;   
}//getNumPar
static function getNumGateway($idProceso, $gtwOption){
    $con=conexion::conectar();
    $q="select * from docto_activity where idProceso ='".$idProceso."' and gateway='".$gtwOption."'";
    //print $q."<br/>";
    $r=mysql_query($q,$con);
    $num=mysql_num_rows($r);
    mysql_close($con); 
    //print "gwt ".$num.'<br/>';                  
    return $num;   
}//getNumPar
static function getNumTran($idProceso){
    $cont=0;
    $con=conexion::conectar();
    $q="select * from docto_transition where idProceso ='".$idProceso."'";
    $r=mysql_query($q,$con);
    $num=mysql_num_rows($r); 
    mysql_close($con);
    //print $num.'<br/>';                  
    return $num;   
}//getNumTran
static function getNombreRM($indice,$opt){
    $cont=0;
    $con=conexion::conectar();
    $q="select * from ".$opt;
    $r=mysql_query($q,$con);
                   
    while($f=mysql_fetch_array($r)){
           if($cont == $indice){
           $nombreRM=$f['rm'];            
        }
        $cont++;
    }//while
    mysql_close($con);
   // print "nombre :".$nombre."<br/>";
    return $nombreRM;   
}//getNombre

static function getNumReglas($idProceso,$tipo){
    
    $cont=0;
    $elRM='';
    $con=conexion::conectar();
    
    $q1="select * from docto_activity where idProceso ='".$idProceso."'";
    $r1=mysql_query($q1,$con);
    
    while($f1=mysql_fetch_array($r1)){
          $qr="select * from docto_rules where idActivity ='".$f1['id']."' and tipo='".$tipo."'";    
        
        $rr=mysql_query($qr,$con);  
        while($fr=mysql_fetch_array($rr)){
            $cont++;
        }//while rr
    }//while r1
       
    mysql_close($con);
                      
    return $cont;   
}//getNumReglasOrganizacional

}//class
?>