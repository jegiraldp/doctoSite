<?php
class conexion{
static function conectar(){

//activar para trabajo con localhost
$con=mysql_connect("localhost","root","");
mysql_select_db("giraldoj_bd",$con);

//
return $con;
}

}
?>