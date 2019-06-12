<?php
require("../analysis/listar/conexion.php");
$rm=$_POST['idP'];
$con=conexion::conectar();
$q="select * from docto_participant where idProceso = '".$rm."'";

$retorno='<hr/><table border="0" width="45%"><tr>
<td><label for="txtParticipantsRM">Seleccione participante:</label></td>
<td><select id="rmP" name="txtParticipantsRM"><option value="99">---</option>';
$r=mysql_query($q,$con);
//
while($fila=mysql_fetch_array($r)){
$idP=$fila['id'];
$name=$fila['name'];
	$retorno.='<option value="'.$idP.'">'.$name.'</option>';
}//while
//
$retorno.='</select></td></tr></table>';
mysql_close($con);
print $retorno;
?>