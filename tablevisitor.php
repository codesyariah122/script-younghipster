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
$sql = "CREATE TABLE visitor( ".
       "id INT(11) NOT NULL AUTO_INCREMENT, ".
       "tanggal date NOT NULL, ".
	   "ip_address text NOT NULL, ".
	   "counter text NOT NULL, ".
       "browser text NOT NULL, ".
       "PRIMARY KEY ( id )); ";
	   
mysql_select_db( 'visitor' );

$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not create table: ' . mysql_error());
}
echo "Table created successfully\n";
mysql_close($conn);
?>