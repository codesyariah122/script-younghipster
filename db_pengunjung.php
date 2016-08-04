<?php

$koneksidatabase = mysql_connect("localhost","root","");

if (!$koneksidatabase)

{

die('Koneksi Gagal: ' . mysql_error());

}

if (mysql_query("CREATE DATABASE pengunjung",$koneksidatabase))

{

echo "database baru telah dibuat";

}

else

{

echo "proses pembuatan database gagal " . mysql_error();

}

mysql_close($koneksidatabase);

?>
