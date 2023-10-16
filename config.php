<?php
$db_name='restaurant_web';
$db_user='root';
$db_pass='';
$db_host='localhost';

$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if(!$con){
    echo "Database connection error ";
} 
// else{
//     echo "Connected to Database.";
// }
?>