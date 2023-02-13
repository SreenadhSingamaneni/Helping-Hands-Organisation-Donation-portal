<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "test1";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
