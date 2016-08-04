<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully<br />';
$sql = "CREATE TABLE tamu( ".
       "id_bukutamu INT(4) NOT NULL AUTO_INCREMENT, ".
       "nama VARCHAR(100) NOT NULL, ".
	   "email VARCHAR(100) NOT NULL, ".
       "isi text NOT NULL, ".
       "PRIMARY KEY ( id_bukutamu )); ";
	   
mysql_select_db( 'pengunjung' );

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>