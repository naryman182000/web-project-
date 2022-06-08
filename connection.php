<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "transportz";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
