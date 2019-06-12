<?php
require("../analysis/listar/conexion.php");
$con=conexion::conectar();
$q="select * from docto_rm";
$retorno='<table border="0" width="45%"><tr>
<td><label for="txtReferencias">Modelo de Referencia:</label></td>
<td><select id="rm" name="txtReferencias"><option value="99">---</option>';
$r=mysql_query($q,$con);
//
while($fila=mysql_fetch_array($r)){
$retorno.='<option value="'.$fila['codigo'].'">'.$fila['nombre'].'</option>';
}
//
$retorno.='</select> <input type="button" id="botonListarUno" value=">>>."/></td></tr>
<script src="scripts/accionVariantesChange.js"></script>';
mysql_close($con);
print $retorno;
?>