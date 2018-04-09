<?php

// Grab User submitted information
$email = $_POST["users_email"];
$pass = $_POST["users_pass"];

// Connect to the database
$con = mysql_connect("localhost","root","");
// Make sure we connected successfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysql_select_db("canteen",$con);

$result = mysql_query("SELECT email,password FROM signup ");

$row = mysql_fetch_array($result);

if($row["email"]==$email && $row["password"]==$pass)
		header('location:index.php');
else
    echo"Sorry, your credentials are not valid, Please try again.";
?>