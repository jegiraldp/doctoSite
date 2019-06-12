<?php
class conexion{
static function conectar(){

//activar para trabajo con localhost
$con=mysql_connect("localhost","root","");
mysql_select_db("giraldoj_bd",$con);
//

//activar para trabajo en servidor giraldojorge.com
//$con=mysql_connect("localhost","giraldoj","jegiraldphosting");
//mysql_select_db("giraldoj_bd",$con);
//
//print 'Conectado <br/>';
return $con;
}

}
?>