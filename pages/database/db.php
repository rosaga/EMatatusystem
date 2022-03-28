<?php
$localhost="localhost";
$user="aringo";
$password="Bugatti!02";
$db_name="ematatu";

//create connecting to the server and database

$con=mysqli_connect($localhost,$user,$password,$db_name);

if($con){
    echo "";
}

else{
    echo "Connection to server is error";
}
