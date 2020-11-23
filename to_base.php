<?php
// Enter your Host, username, password, database below.
$server = "ec2-54-228-250-82.eu-west-1.compute.amazonaws.com";
$base_login = "ksguijihqgxdaq";
$base_password = "4a8fa7e8c0560ef05e6d5f409302e02aa7bb2e129b2883e807d8c3b8cf90d405";
$base = "d6o80eb5v0jt2b";

$to_base = mysqli_connect($server,$base_login,$base_password,$base);
// Check connection
if(mysqli_connect_errno()){
    ("Error connecting with MySQL server:" . mysqli_connect_error());
} else{
    echo "Connected with database server. <br>";//TO DELETE
}