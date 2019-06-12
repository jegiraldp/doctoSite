<?php
class processRM{
    
    
    public $elId;
    public $nombre;
    public $numAct;
    public $numPar;
    public $numGatExc;
    public $numGatInc;
    public $numGatIni;
    public $numGatFin;
    public $numTra;
    public $rm;
    
    public $evalAct;
    public $evalActG1;
    public $evalActG2;
    public $evalActG99;
    public $evalPar;
    public $evalROp;
    public $evalROr;
    public $evalT;
       
    
    public $colorAct;
    public $colorActG1;
    public $colorActG2;
    public $colorActG99;
    public $colorActG66;
    public $colorPar;
    public $colorROp;
    public $colorROr;
    
    public $numROp;
    public $numROr;
    
    public $grupo;
    
    public function processRM($elId,$nombre,$numAct,$numPar,$numGatExc,$numGatInc,$numGatIni,$numGatFin,$numTra,$rm,$numROp,$numROr){
        $this->elId=$elId;
        $this->nombre=$nombre;
        $this->numAct=$numAct;
        $this->numPar=$numPar;
        $this->numGatExc=$numGatExc;
        $this->numGatInc=$numGatInc;
        $this->numGatIni=$numGatIni;
        $this->numGatFin=$numGatFin;
        $this->numTra=$numTra;
        $this->numROp=$numROp;
        $this->numROr=$numROr;
        
        $this->evalAct=0;
        $this->evalActG1=0;
        $this->evalActG2=0;
        $this->evalActG99=0;
        $this->evalPar=0;
        $this->evalROp=0;
        $this->evalROr=0;
        $this->evalT=0;
        
        
        $this->rm=$rm;
        $this->colorAct='black';
        $this->colorActG1='black';
        $this->colorActG2='black';
        $this->colorActG99='black';
        $this->colorActG66='black';
        $this->colorPar='black';
        $this->colorROp='black';
        $this->colorROr='black';
        
        $this->grupo=0;
        
       
        
    }//item
    
    
    public function getId(){
    return $this->elId;
    
    }//
    
     public function getNombre(){
    return $this->nombre;
    
    }//
    
    public function getNumAct(){
    return $this->numAct;
    
    }//
    public function getNumPar(){
    return $this->numPar;
    }//
    
    public function getNumROp(){
    return $this->numROp;
    }//
    public function getNumROr(){
    return $this->numROr;
    }//
    
      public function getNumGatExc(){
    return $this->numGatExc;
    
    }//
    
      public function getNumGatInc(){
    return $this->numGatInc;
    
    }//  
    public function getNumGatIni(){
    return $this->numGatIni;
    
    }//
    
    public function getNumGatFin(){
    return $this->numGatFin;
    
    }//
    
    public function getNumtra(){
    return $this->numTra;
    }//
    
    public function getGrupo(){
    return $this->grupo;
    }//
    
    public function setGrupo($grupo){
    $this->grupo=$grupo;
    }//
    
    public function getEvalAct(){
    return $this->evalAct;
    }//
    public function getEvalActG1(){
    return $this->evalActG1;
    }//
    public function getEvalActG2(){
    return $this->evalActG2;
    }//
    public function getEvalActG99(){
    return $this->evalActG99;
    }//
    public function getEvalActG66(){
    return $this->evalActG66;
    }//
    
    public function getEvalPar(){
    return $this->evalPar;
    }//
    
    public function getEvalROp(){
    return $this->evalROp;
    }//
    
    public function getEvalROr(){
    return $this->evalROr;
    }//
    
    public function getEvalActT(){
    $eval= ($this->evalAct+
    $this->evalActG1+
    $this->evalActG2+
    $this->evalActG66+
    $this->evalActG99)/5;
    return $eval;
    }//
    
     public function getEvalR(){
    $eval= ($this->evalROp+$this->evalROr)/2;
    return $eval;
    }//
    
    public function getEvalT(){
    $eval= ($this->getEvalActT()+$this->getEvalPar()+$this->getEvalR())/3;
    $eval=round($eval,1);
    return $eval;
    }//
    
    
     public function getRM(){
    return $this->rm;
    }//
    
    public function getColorAct(){
    return $this->colorAct;
    }//
    public function getColorActG1(){
    return $this->colorActG1;
    }//
    public function getColorActG2(){
    return $this->colorActG2;
    }//
    public function getColorActG99(){
    return $this->colorActG99;
    }//
    public function getColorActG66(){
    return $this->colorActG66;
    }//
    
     public function getColorPar(){
    return $this->colorPar;
    }//
    
    public function getColorROp(){
    return $this->colorROp;
    }//
    
    public function getColorROr(){
    return $this->colorROr;
    }//
    
    public function setEvalAct($eval){
    $this->evalAct=$eval;
    }//
    public function setEvalActG1($eval){
    $this->evalActG1=$eval;
    }//
    public function setEvalActG2($eval){
    $this->evalActG2=$eval;
    }//
    public function setEvalActG99($eval){
    $this->evalActG99=$eval;
    }//
    public function setEvalActG66($eval){
    $this->evalActG66=$eval;
    }//
    public function setEvalPar($eval){
    $this->evalPar=$eval;
    }//
    public function setEvalROp($eval){
    $this->evalROp=$eval;
    }//
    public function setEvalROr($eval){
    $this->evalROr=$eval;
    }//
    
    public function setColorAct($color){
    $this->colorAct=$color;
    }//
    public function setColorActG1($color){
    $this->colorActG1=$color;
    }//
    public function setColorActG2($color){
    $this->colorActG2=$color;
    }//
    public function setColorActG99($color){
    $this->colorActG99=$color;
    }//
    public function setColorActG66($color){
    $this->colorActG66=$color;
    }//
    public function setColorPar($color){
    $this->colorPar=$color;
    }//
    public function setColorROp($color){
    $this->colorROp=$color;
    }//
    public function setColorROr($color){
    $this->colorROr=$color;
    }//
        
}
?>