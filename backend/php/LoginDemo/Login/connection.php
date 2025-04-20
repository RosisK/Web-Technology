<?php

$dbhost = "localhost";
$dbuser = "hsmanandhar";
$dbpass = "sayami";
$dbname = "logindb";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
