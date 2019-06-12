<?php
class item{
private $dato;
private $grupo;
private $gap;

public function item($dato,$grupo){
$this->dato=$dato;
$this->grupo=$grupo;

}//item

public function getDato(){
return $this->dato;
}//

public function getGrupo(){
return $this->grupo;
}//

public function setGrupo($NuevoGrupo){
$this->grupo=$NuevoGrupo;
}//

public function getGap(){
return $this->gap;
}//

public function setGap($NuevoGap){
$this->gap=$NuevoGap;
}//

}//class
?>