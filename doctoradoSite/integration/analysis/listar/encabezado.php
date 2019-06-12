<?php
class encabezado{

static function cabReferencia(){
	$cabeza='<i><b>P:</b>Participants - <b>A:</b>Activities - <b>G:</b> Gateways - <b>T:</b>Transitions - <b>EV:</b>Evolution Variants - <b>RV:</b>Request Variants -  <b>R:</b>Rules </i><table class="procesos" width="70%">
	<tr>
		<th>Code</th>
		<th>P</th>
		<th>A</th>
		<th>G</th>
		<th>T</th>
		<th>R</th>
        <th>EV</th>
        <th>RV</th>
	</tr>';
return $cabeza;
}//cabReference

static function cabVariante(){
	$tablaVar='<table class="procesos" width="70%" >
	<tr>
		<th>Code</th>
		<th>P</th>
		<th>A</th>
		<th>G</th>
		<th>T</th>
		<th>R</th>
	</tr>';
return $tablaVar;
}//cabVar

}//class
?>