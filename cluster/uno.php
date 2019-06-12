<?php
require("item.php");

class uno{

public $item;
public $arr = array();
public $tam;

public function crear($lSuperior, $numDatos){
    $this->tam=$numDatos;
    for($i=0;$i<$this->tam;$i++){
        $this->arr[$i]=new item(rand(1,$lSuperior),0);
    }//for
}//crear

public function imprimir(){
    $contG1=0;
    $contG2=0;
    for($ix=0;$ix<sizeof($this->arr);$ix++){
        if(strcmp($this->arr[$ix]->getGrupo(),"1")==0){
          $contG1++;
          $g1.='<b><font color="blue">'.$this->arr[$ix]->getDato().'</font></b>,d:'.$this->arr[$ix]->getGap().' - ';
        }else{
          $contG2++;
          $g2.='<b><font color="blue">'.$this->arr[$ix]->getDato().'</font></b>,d:'.$this->arr[$ix]->getGap().' - ';
        }    
    }//for
    $grupos='<table id="tablaCluster"><tr><th>Seleccionados ('.$contG1.')</th><th>Otros ('.$contG2.')</th></tr>';
    $g1=substr($g1, 0, -2);
    $g2=substr($g2, 0, -2);
    $grupos .= '<tr><td>'.$g1.'</td><td>'.$g2.'</td></tr></table>';
    print $grupos;
}//imprimir

public function agrupar($c1,$dm){
    for($i=0;$i<sizeof($this->arr);$i++){
        $r1=abs($this->arr[$i]->getDato()-$c1);
        // print $r1.'<br/>';               
        if($r1<=$dm){
           $this->arr[$i]->setGrupo(1);
           $this->arr[$i]->setGap($r1); 
        }else{
           $this->arr[$i]->setGrupo(2);
           $this->arr[$i]->setGap($r1);   
        }
             
    }
}//agrupar



}//class
$c1=$_POST['paramc1'];
$c2=$_POST['paramc2'];
$al=$_POST['paramal'];
$dm=$_POST['paramdm'];
$nd=$_POST['paramnd'];
$objUno = new uno();
$objUno->crear($al,$nd);
$objUno->agrupar($c1,$dm);
$objUno->imprimir();
?>