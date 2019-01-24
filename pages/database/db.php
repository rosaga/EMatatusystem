<?php
$localhost="localhost";
$user="root";
$password="@Microsoft2010";
$db_name="ematatu";

//create connecting to the server and database

$con=mysqli_connect($localhost,$user,$password,$db_name);

if($con){
    echo "";
}

else{
    echo "Connection to server is error";
}



?>