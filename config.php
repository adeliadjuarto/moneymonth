<?php
// host yang digunakan
$host = 'localhost';
 
// username untuk login ke hosthosting
$user = 'root';
 
// jika menggunakan PC sendiri sebagai host,
// secara default password dikosongkan
$pass = '';
 
// isikan nama database sesuai database yang akan digunakan
$dbname = 'moneymonth';
 
// mengubung ke host
$connect = mysqli_connect($host, $user, $pass) or die(mysql_error());
 
// memilih database yang akan digunakan
$dbselect = mysqli_select_db($connect, $dbname);