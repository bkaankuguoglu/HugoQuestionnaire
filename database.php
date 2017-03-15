<?php
// create connection credentials
$db_host = 'hugodb.cyzpp0zwfkup.us-west-2.rds.amazonaws.com:3306';
$db_name = 'hugodb';
$db_user = 'admin';
$db_pass = 'admin1234';

//create mysqli object

$mysqli = new mysqli($db_host,$db_user,$db_pass,$db_name);

if($mysqli->connect_error){
  printf("Connection failed: %s\n", $mysqli->connect_error);
  exit();
}

 ?>
