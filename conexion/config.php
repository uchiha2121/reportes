<?php

$hostname_mi = "localhost";
$database_mi = "auditoria";
$username_mi = "root";
$password_mi = "";
$mi = mysql_pconnect($hostname_mi, $username_mi, $password_mi) or trigger_error(mysql_error(),E_USER_ERROR); 
?>