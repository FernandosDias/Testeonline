<?php
$server= "localhost:3306";
$user= "root";
$pass="";
$bd="negocmerc";
			
$con = mysql_connect($server,$user, $pass) or die (mysql_error());
mysql_select_db ($bd) or die (mysql_error());

?>
