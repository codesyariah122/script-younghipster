<?php
$server="localhost";
$username="root";
$password="";
$database="pengunjung";
$koneksi = mysql_connect($server,$username,$password)
or die ('koneksi gagal');
if($koneksi){
	mysql_select_db($database) or die ('Database belum dibuat');
}
?>