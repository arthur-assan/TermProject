<?php
//Set database access information:
DEFINE ('DB_USER', 'assan');
DEFINE ('DB_PASSWORD', '');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'artech_computers');

//Make the connection
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to my SQL'. mysqli_connect_error() );

//Set encoding:
mysqli_set_charset ($dbc, 'utf-8');
?>
