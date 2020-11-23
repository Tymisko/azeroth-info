<?php
// Enter your Host, username, password, database below.
$server = "remotemysql.com:3306";
$base_login = "95sEGQVbzi";
$base_password = "pbiOtTOm0V";
$base = "95sEGQVbzi";

$to_base = mysqli_connect($server,$base_login,$base_password,$base);
// Check connection
if(mysqli_connect_errno()){
    ("Error connecting with MySQL server:" . mysqli_connect_error());
} else{
    echo "Connected with database server. <br>";//TO DELETE
}