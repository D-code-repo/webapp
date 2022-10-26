<?php

$host="10.110.95.73";
$user="root";
$pass="password";
$db="webapp";

$con=mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
	print("Not Connected<br>".mysql_error());

}
else
{
	//echo("Connected");
}






?>