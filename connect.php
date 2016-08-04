<?php
$koneksi = 
mysql_connect("localhost","root","") or die ("Koneksi Gagal dibentuk");
if ($koneksi){
mysql_select_db("visitor") 
or die("Tidak Dapat Memilih Database");
}
?>