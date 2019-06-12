<?php
class structureMatch{
    
    static function viewActivities($arrM, $arrV, $rm){
        
                  
        for($i=0;$i<sizeof($arrM);$i++){
            
            if(strcmp ($arrM[$i]->getId(),$rm)==0){
               // print 'comparar '.$arrM[$i]->getId().'--'.$arrM[$i]->getNumAct().' con sus variantes<br/>';
                for($j=0;$j<sizeof($arrV);$j++){
                  
                  $model=$arrV[$j]->getRM();
                   
                  //actividades iguales             
                  if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumAct()==$arrV[$j]->getNumAct()){
                    $arrV[$j]->setEvalAct(5);
                   }//if     
                   
                   //actividades rm<v
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumAct()<$arrV[$j]->getNumAct()){
                    $arrV[$j]->setColorAct('red');
                    $arrV[$j]->setEvalAct(3);
                   }//if
                   
                   //actividades rm>v
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumAct()>$arrV[$j]->getNumAct()){
                    $arrV[$j]->setColorAct('blue');
                    $arrV[$j]->setEvalAct(7);
                   }//if
                                    
            }//for interno
          }//if comparar nombre MR
        }//for externo
        return $arrV;
    }//Activities
    
    //////////////////
    
    static function viewActivitiesG1($arrM, $arrV, $rm){
        
                  
        for($i=0;$i<sizeof($arrM);$i++){
            
            if(strcmp ($arrM[$i]->getId(),$rm)==0){
                //print 'comparar '.$arrM[$i]->getId().'--'.$arrM[$i]->getNumGatExc().'<br/>';
                for($j=0;$j<sizeof($arrV);$j++){
                  
                  $model=$arrV[$j]->getRM();
                   
                  //gateways exc (1) iguales             
                  if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatExc()==$arrV[$j]->getNumGatExc()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setEvalActG1(5);
                   }//if     
                   
                  //gateways exc > (1) MR vs V 
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatExc()<$arrV[$j]->getNumGatExc()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorActG1('red');
                    $arrV[$j]->setEvalActG1(3);
                   }//if
                   
                   //gateways exc > (1) MR vs V 
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatExc()>$arrV[$j]->getNumGatExc()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorActG1('blue');
                    $arrV[$j]->setEvalActG1(7);
                   }//if
                                    
            }//for interno
          }//if comparar nombre MR
        }//for externo
        return $arrV;
    }//ActivitiesG1
    
     static function viewActivitiesG2($arrM, $arrV, $rm){
        
                  
        for($i=0;$i<sizeof($arrM);$i++){
            
            if(strcmp ($arrM[$i]->getId(),$rm)==0){
                //print 'comparar '.$arrM[$i]->getId().'--'.$arrM[$i]->getNumGatExc().'<br/>';
                for($j=0;$j<sizeof($arrV);$j++){
                  
                  $model=$arrV[$j]->getRM();
                   
                  //gateways inc (1) iguales             
                  if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatInc()==$arrV[$j]->getNumGatInc()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setEvalActG2(5);
                   }//if     
                   
                  //gateways inc > (1) MR vs V 
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatInc()<$arrV[$j]->getNumGatInc()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorActG2('red');
                    $arrV[$j]->setEvalActG2(3);
                   }//if
                   
                   //gateways inc > (1) MR vs V 
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatInc()>$arrV[$j]->getNumGatInc()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorActG2('blue');
                    $arrV[$j]->setEvalActG2(7);
                   }//if
                                    
            }//for interno
          }//if comparar nombre MR
        }//for externo
        return $arrV;
    }//ActivitiesG2
    
    static function viewActivitiesG66($arrM, $arrV, $rm){
        
                  
        for($i=0;$i<sizeof($arrM);$i++){
            
            if(strcmp ($arrM[$i]->getId(),$rm)==0){
                //print 'comparar '.$arrM[$i]->getId().'--'.$arrM[$i]->getNumGatExc().'<br/>';
                for($j=0;$j<sizeof($arrV);$j++){
                  
                  $model=$arrV[$j]->getRM();
                   
                  //gateways inc (1) iguales             
                  if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatIni()==$arrV[$j]->getNumGatIni()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setEvalActG66(5);
                   }//if     
                   
                  //gateways inc > (1) MR vs V 
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatIni()<$arrV[$j]->getNumGatIni()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorActG66('red');
                    $arrV[$j]->setEvalActG66(3);
                   }//if
                   
                   //gateways inc > (1) MR vs V 
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatIni()>$arrV[$j]->getNumGatIni()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorActG66('blue');
                    $arrV[$j]->setEvalActG66(7);
                   }//if
                                    
            }//for interno
          }//if comparar nombre MR
        }//for externo
        return $arrV;
    }//Activities66
    
     static function viewActivitiesG99($arrM, $arrV, $rm){
        
                  
        for($i=0;$i<sizeof($arrM);$i++){
            
            if(strcmp ($arrM[$i]->getId(),$rm)==0){
                //print 'comparar '.$arrM[$i]->getId().'--'.$arrM[$i]->getNumGatExc().'<br/>';
                for($j=0;$j<sizeof($arrV);$j++){
                  
                  $model=$arrV[$j]->getRM();
                   
                  //gateways inc (1) iguales             
                  if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatFin()==$arrV[$j]->getNumGatFin()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setEvalActG99(5);
                   }//if     
                   
                  //gateways inc > (1) MR vs V 
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatFin()<$arrV[$j]->getNumGatFin()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorActG99('red');
                    $arrV[$j]->setEvalActG99(3);
                   }//if
                   
                   //gateways inc > (1) MR vs V 
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumGatFin()>$arrV[$j]->getNumGatFin()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorActG99('blue');
                    $arrV[$j]->setEvalActG99(7);
                   }//if
                                    
            }//for interno
          }//if comparar nombre MR
        }//for externo
        return $arrV;
    }//ActivitiesG99
    
    ///Participants
    static function viewPaticipants($arrM, $arrV, $rm){
       // print 'comparar participants '.$rm;
                  
        for($i=0;$i<sizeof($arrM);$i++){
            
            if(strcmp ($arrM[$i]->getId(),$rm)==0){
           
                for($j=0;$j<sizeof($arrV);$j++){
                  
                  $model=$arrV[$j]->getRM();
                   
                  //participants  iguales             
                  if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumPar()==$arrV[$j]->getNumPar()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setEvalPar(5);
                   }//if     
                   
                  //participants  > MR vs V 
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumPar()<$arrV[$j]->getNumPar()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorPar('red');
                    $arrV[$j]->setEvalPar(3);
                   }//if
                   
                   //participants  > MR vs V
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumPar()>$arrV[$j]->getNumPar()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorPar('blue');
                    $arrV[$j]->setEvalPar(7);
                   }//if
                                    
            }//for interno
          }//if comparar nombre MR
        }//for externo
        return $arrV;
    }//Participants
    
    ///Reglas OP
    static function viewRulesOp($arrM, $arrV, $rm){
       // print 'comparar participants '.$rm;
                  
        for($i=0;$i<sizeof($arrM);$i++){
            
            if(strcmp ($arrM[$i]->getId(),$rm)==0){
           
                for($j=0;$j<sizeof($arrV);$j++){
                  
                  $model=$arrV[$j]->getRM();
                  
                   
                  //participants  iguales             
                  if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumROp()==$arrV[$j]->getNumROp()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumROp().'<br/>';
                    $arrV[$j]->setEvalROp(5);
                   }//if     
                   
                  //participants  > MR vs V 
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumROp()<$arrV[$j]->getNumROp()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumROp().'<br/>';
                    $arrV[$j]->setColorROp('red');
                    $arrV[$j]->setEvalROp(3);
                   }//if
                   
                   //participants  > MR vs V
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumROp()>$arrV[$j]->getNumROp()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumROp().'<br/>';
                    $arrV[$j]->setColorROp('blue');
                    $arrV[$j]->setEvalROp(7);
                   }//if
                                    
            }//for interno
          }//if comparar nombre MR
        }//for externo
        return $arrV;
    }//Reglas
    
     ///Reglas Or
    static function viewRulesOr($arrM, $arrV, $rm){
       // print 'comparar participants '.$rm;
                  
        for($i=0;$i<sizeof($arrM);$i++){
            
            if(strcmp ($arrM[$i]->getId(),$rm)==0){
           
                for($j=0;$j<sizeof($arrV);$j++){
                  
                  $model=$arrV[$j]->getRM();
                  
                   
                  //participants  iguales             
                  if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumROr()==$arrV[$j]->getNumROr()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setEvalROr(5);
                   }//if     
                   
                  //participants  > MR vs V 
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumROr()<$arrV[$j]->getNumROr()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorROr('red');
                    $arrV[$j]->setEvalROr(3);
                   }//if
                   
                   //participants  > MR vs V
                   if(strcmp ($model,$rm)==0 && $arrM[$i]->getNumROr()>$arrV[$j]->getNumROr()){
                    //print $arrV[$j]->getId().'--'. $arrV[$j]->getNumAct().'<br/>';
                    $arrV[$j]->setColorROr('blue');
                    $arrV[$j]->setEvalROr(7);
                   }//if
                                    
            }//for interno
          }//if comparar nombre MR
        }//for externo
        return $arrV;
    }//Reglas
}//class
?>