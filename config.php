<?php
$host       =   "sql100.epizy.com";
$user	    =   "epiz_22768031";
$password   =   "a9pvkEKPwagN";
$database   =   "epiz_22768031_absensi";
$koneksi = mysqli_connect($host, $user, $password, $database);
mysql_connect($host,$user,$password) or die ("connection failed");
mysql_select_db($database) or die ("error connect database");
?>