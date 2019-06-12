<?php
require("processRM.php");
require("listarRM.php");
require("structureMatch.php");

class inicio{
    
public $processRM;
static $arrRM = array();
static $arrRV = array();
static $arrEV = array();
static $contG1, $contG2;

public $tam;
public $numero;

static function cargarRM($opt){
   $numero=listarRM::numerosRM($opt);
   for($i=0;$i<$numero;$i++){
    // print 'ciclo '.$i.'<br/>';
    $cod=listarRM::getCodigo($i,$opt);
    $nombre=listarRM::getNombre($i,$opt);
    $numAct=listarRM::getNumActivities($cod);
    $numPar=listarRM::getNumPar($cod);
    $numGatExc=listarRM::getNumGateway($cod,1);
    $numGatInc=listarRM::getNumGateway($cod,2);
    $numGatIni=listarRM::getNumGateway($cod,66);
    $numGatFin=listarRM::getNumGateway($cod,99);
    $numTran=listarRM::getNumTran($cod);
    $numROp=listarRM::getNumReglas($cod,"rp"); // 1:op 2:or
    $numROr=listarRM::getNumReglas($cod,"ro"); // 1:op 2:or
    $pRM = new processRM($cod,$nombre,$numAct,$numPar,$numGatExc,$numGatInc,$numGatIni,$numGatFin,$numTran,0,$numROp,$numROr);
     //print $cod.':'.$numROp.'-'.$numROr.'<br/>';                    
    inicio::$arrRM[$i]=$pRM;
        
         
   }
  //for 
}//cargarRM
static function cargarEV($opt){
   $numero=listarRM::numerosRM($opt);
   //print "El for va hasta ".$numero."<br/>";
   for($i=0;$i<$numero;$i++){
    //print 'ciclo '.$i.'<br/>';
    $cod=listarRM::getCodigo($i,$opt);
    $nombre=listarRM::getNombre($i,$opt);
    $numAct=listarRM::getNumActivities($cod);
    $numPar=listarRM::getNumPar($cod);
    $numGatExc=listarRM::getNumGateway($cod,1);
    $numGatInc=listarRM::getNumGateway($cod,2);
    $numGatIni=listarRM::getNumGateway($cod,66);
    $numGatFin=listarRM::getNumGateway($cod,99);
    $numTran=listarRM::getNumTran($cod);
    $nomRM=listarRM::getNombreRM($i,$opt);
    $numROp=listarRM::getNumReglas($cod,"rp"); // 1:op 2:or
    $numROr=listarRM::getNumReglas($cod,"ro"); // 1:op 2:or
     // print $cod.':cargarEv:'.$numROp.'-'.$numROr.'<br/>';  
    $pEV = new processRM($cod,$nombre,$numAct,$numPar,$numGatExc,$numGatInc,$numGatIni,$numGatFin,$numTran,$nomRM,$numROp,$numROr);
                        
    inicio::$arrEV[$i]=$pEV;
        
         
   }
  //for 
}//cargarEV
static function cargarRV($opt){
   $numero=listarRM::numerosRM($opt);
   for($i=0;$i<$numero;$i++){
    // print 'ciclo '.$i.'<br/>';
    $cod=listarRM::getCodigo($i,$opt);
    $nombre=listarRM::getNombre($i,$opt);
    $numAct=listarRM::getNumActivities($cod);
    $numPar=listarRM::getNumPar($cod);
    $numGatExc=listarRM::getNumGateway($cod,1);
    $numGatInc=listarRM::getNumGateway($cod,2);
    $numGatIni=listarRM::getNumGateway($cod,66);
    $numGatFin=listarRM::getNumGateway($cod,99);
     $numTran=listarRM::getNumTran($cod);   
     $nomRM=listarRM::getNombreRM($i,$opt);
     $numROp=listarRM::getNumReglas($cod,"rp"); // 1:op 2:or
    $numROr=listarRM::getNumReglas($cod,"ro"); // 1:op 2:or
   // print $cod.':cargarRv:'.$numROp.'-'.$numROr.'<br/>';
    $pRV = new processRM($cod,$nombre,$numAct,$numPar,$numGatExc,$numGatInc,$numGatIni,$numGatFin,$numTran,$nomRM,$numROp,$numROr);
                        
    inicio::$arrRV[$i]=$pRV;
        
         
   }
  //for 
}//cargarRV
static function listarRM(){
   
   for($i=0;$i<sizeof(inicio::$arrRM);$i++){
    print "<br/>"
          .inicio::$arrRM[$i]->getId().','
          .inicio::$arrRM[$i]->getNumROp().','
          .inicio::$arrRM[$i]->getNumROr().',';
   }//for 
     
}//listarRM
static function listarRV($rm){
    $impri='';
    $img='';
    $sumEval=0;
   for($i=0;$i<sizeof(inicio::$arrRV);$i++){
    
    if(strcmp(inicio::$arrRV[$i]->getRM(),$rm)==0){
        $sumEval = inicio::$arrRV[$i]->getEvalActT();
                      
        $impri.='<tr><td>'.inicio::$arrRV[$i]->getId().'</td>'.
                 '<td>'.inicio::$arrRV[$i]->getEvalAct().'<img src="./integration/analysis/similitud/'.inicio::$arrRV[$i]->getColorAct().'.png"/></td>'.
                 '<td>'.inicio::$arrRV[$i]->getEvalActG1().'<img src="./integration/analysis/similitud/'.inicio::$arrRV[$i]->getColorActG1().'.png"/></td>'.
                 '<td>'.inicio::$arrRV[$i]->getEvalActG2().'<img src="./integration/analysis/similitud/'.inicio::$arrRV[$i]->getColorActG2().'.png"/></td>'.
                 '<td>'.inicio::$arrRV[$i]->getEvalActG66().'<img src="./integration/analysis/similitud/'.inicio::$arrRV[$i]->getColorActG66().'.png"/></td>'.
                 '<td>'.inicio::$arrRV[$i]->getEvalActG99().'<img src="./integration/analysis/similitud/'.inicio::$arrRV[$i]->getColorActG99().'.png"/></td>'.
                 '<td>'.inicio::$arrRV[$i]->getEvalROp().'<img src="./integration/analysis/similitud/'.inicio::$arrRV[$i]->getColorROp().'.png"/></td>'.
                '<td>'.inicio::$arrRV[$i]->getEvalROr().'<img src="./integration/analysis/similitud/'.inicio::$arrRV[$i]->getColorROr().'.png"/></td>'.                
                 '<td>'.$sumEval.'</td>'.
                 '<td>'.inicio::$arrRV[$i]->getEvalPar().'</td>'.
                 
                 '<td>'.inicio::$arrRV[$i]->getEvalR().'</td>'.
                 '<td>'.inicio::$arrRV[$i]->getEvalT().'</td>'.
                 '</tr>';
     }//if   
   }//for 
    
   return $impri;
}//listarRV



static function listarEV($rm){
    $impri='';
     $img='';
     $sumEval=0;
   for($i=0;$i<sizeof(inicio::$arrEV);$i++){
    if(strcmp(inicio::$arrEV[$i]->getRM(),$rm)==0){
        $sumEval = inicio::$arrEV[$i]->getEvalActT();
                   
        $impri.='<tr><td>'.inicio::$arrEV[$i]->getId().'</td>'.
                '<td>'.inicio::$arrEV[$i]->getEvalAct().'<img src="./integration/analysis/similitud/'.inicio::$arrEV[$i]->getColorAct().'.png"/></td>'.
                '<td>'.inicio::$arrEV[$i]->getEvalActG1().'<img src="./integration/analysis/similitud/'.inicio::$arrEV[$i]->getColorActG1().'.png"/></td>'.
                '<td>'.inicio::$arrEV[$i]->getEvalActG2().'<img src="./integration/analysis/similitud/'.inicio::$arrEV[$i]->getColorActG2().'.png"/></td>'.
                '<td>'.inicio::$arrEV[$i]->getEvalActG66().'<img src="./integration/analysis/similitud/'.inicio::$arrEV[$i]->getColorActG66().'.png"/></td>'.
                '<td>'.inicio::$arrEV[$i]->getEvalActG99().'<img src="./integration/analysis/similitud/'.inicio::$arrEV[$i]->getColorActG99().'.png"/></td>'.
                '<td>'.inicio::$arrEV[$i]->getEvalROp().'<img src="./integration/analysis/similitud/'.inicio::$arrEV[$i]->getColorROp().'.png"/></td>'.
                '<td>'.inicio::$arrEV[$i]->getEvalROr().'<img src="./integration/analysis/similitud/'.inicio::$arrEV[$i]->getColorROr().'.png"/></td>'.
                '<td>'.$sumEval.'</td>'.
                '<td>'.inicio::$arrEV[$i]->getEvalPar().'</td>'.
                
                '<td>'.inicio::$arrRV[$i]->getEvalR().'</td>'.
                '<td>'.inicio::$arrEV[$i]->getEvalT().'</td>'.
                '</tr>';
    }//if 
   }//for 
   
   return $impri;
}//listarEV


static function listarEVConsolidado($rm,$grupo){
    $impri='';
     
   for($i=0;$i<sizeof(inicio::$arrEV);$i++){
    if(strcmp(inicio::$arrEV[$i]->getRM(),$rm)==0){
        if(inicio::$arrEV[$i]->getGrupo()==$grupo){
            $impri.='('.inicio::$arrEV[$i]->getId().','.inicio::$arrEV[$i]->getEvalT().')';
            //$impri.=inicio::$arrEV[$i]->getId().',';
            if($grupo==1) inicio::$contG1++;
            if($grupo==2) inicio::$contG2++;
        }
    }//if 
   }//for 
   
   return $impri;
}//listarEVConsolidado


static function listarRVConsolidado($rm,$grupo){
    $impri='';
   
   for($i=0;$i<sizeof(inicio::$arrRV);$i++){
    
    if(strcmp(inicio::$arrRV[$i]->getRM(),$rm)==0){
         if(inicio::$arrRV[$i]->getGrupo()==$grupo){
            $impri.='('.inicio::$arrRV[$i]->getId().','.inicio::$arrRV[$i]->getEvalT().')';
            // $impri.=inicio::$arrRV[$i]->getId().',';
            if($grupo==1) inicio::$contG1++;
            if($grupo==2) inicio::$contG2++;
        }
     }//if   
   }//for 
    
   return $impri;
}//listarRVConsolidado

 ///agrupar
static function agrupar($arreglo, $centro, $distancia){
   
for($i=0;$i<sizeof($arreglo);$i++){
        $r1=abs($arreglo[$i]->getEvalT()-$centro);
                       
        if($r1<=$distancia){
           $arreglo[$i]->setGrupo(1);
        }else{
           $arreglo[$i]->setGrupo(2);
        }
             
    }//for

}//agrupar


}//class
$op=$_POST['op'];
$pro=$_POST['pro'];
$cen=$_POST['cen'];
$dis=$_POST['dis'];


//print $op.'--'.$pro.'--';

inicio::cargarRM("docto_rm");
inicio::cargarRV("docto_rv");
inicio::cargarEV("docto_ev");

//comparar Estructura Activities
inicio::$arrEV=structureMatch::viewActivities(inicio::$arrRM,inicio::$arrEV,$pro);
inicio::$arrRV=structureMatch::viewActivities(inicio::$arrRM,inicio::$arrRV,$pro);
//comparar Estructura Activities Gateways Type 1 (exclusive)
inicio::$arrEV=structureMatch::viewActivitiesG1(inicio::$arrRM,inicio::$arrEV,$pro);
inicio::$arrRV=structureMatch::viewActivitiesG1(inicio::$arrRM,inicio::$arrRV,$pro);
//comparar Estructura Activities Gateways Type 2 (inclusive)
inicio::$arrEV=structureMatch::viewActivitiesG2(inicio::$arrRM,inicio::$arrEV,$pro);
inicio::$arrRV=structureMatch::viewActivitiesG2(inicio::$arrRM,inicio::$arrRV,$op);
//comparar Estructura Activities Gateways Type 66 (inicio)
inicio::$arrEV=structureMatch::viewActivitiesG66(inicio::$arrRM,inicio::$arrEV,$pro);
inicio::$arrRV=structureMatch::viewActivitiesG66(inicio::$arrRM,inicio::$arrRV,$pro);
//comparar Estructura Activities Gateways Type 99 (fin)
inicio::$arrEV=structureMatch::viewActivitiesG99(inicio::$arrRM,inicio::$arrEV,$pro);
inicio::$arrRV=structureMatch::viewActivitiesG99(inicio::$arrRM,inicio::$arrRV,$pro);
//comparar participantes
inicio::$arrEV=structureMatch::viewPaticipants(inicio::$arrRM,inicio::$arrEV,$pro);
inicio::$arrRV=structureMatch::viewPaticipants(inicio::$arrRM,inicio::$arrRV,$pro);

//comparar reglas operacionales
inicio::$arrEV=structureMatch::viewRulesOp(inicio::$arrRM,inicio::$arrEV,$pro);
inicio::$arrRV=structureMatch::viewRulesOp(inicio::$arrRM,inicio::$arrRV,$pro);
//comparar reglas organizacionales
inicio::$arrEV=structureMatch::viewRulesOr(inicio::$arrRM,inicio::$arrEV,$pro);
inicio::$arrRV=structureMatch::viewRulesOr(inicio::$arrRM,inicio::$arrRV,$pro);
//setEvalTotal


//consolidado
if($op==1){
    inicio::$contG1=0;
    inicio::$contG2=0;
    inicio::agrupar(inicio::$arrRV,$cen,$dis);
    inicio::agrupar(inicio::$arrRV,$cen,$dis);
$imp='<hr/><i><b>Structural and Semantical Matching -- OK:</b></i><br/>-----------------------<br/>';
$grupo1=inicio::listarEVConsolidado($pro,1);
$grupo1.=inicio::listarRVConsolidado($pro,1);
$grupo2=inicio::listarEVConsolidado($pro,2);
$grupo2.=inicio::listarRVConsolidado($pro,2);

$imp.='<b>Grupo 1:('.inicio::$contG1.')</b><br/><font colo="blue">'.$grupo1.'</font><br/>-----------------------<br/>';
$imp.='<b>Grupo 2:('.inicio::$contG2.')</b><br/><font colo="blue">'.$grupo2.'</font>';
 print $imp;   
}//consolidado

if($op==2){  //detalle
$imp='<hr/><table border="1" style="font-size:90%;border-collapse: collapse;"><tr>
<th>(<img src="./integration/analysis/similitud/black.png"/>==)
(<img src="./integration/analysis/similitud/blue.png"/>>)
(<img src="./integration/analysis/similitud/red.png"/><)</th><th>#A</th><th>#G1</th><th>#G2</th><th>#G66</th><th>#G99</th><th>#ROp</th><th>#ROr</th>
<th><font color="blue">E#A</font></th><th><font color="blue">E#P</font></th><th><font color="blue">E#R</font></th></tr>';
$imp.=inicio::listarEV($pro);
$imp.=inicio::listarRV($pro);
$imp.='</table>';
print $imp; 
}

?>