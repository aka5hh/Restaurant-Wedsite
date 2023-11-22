<?php
require_once('functions/functions.php');

$id= $_GET['ba'];
$update="UPDATE banners SET ban_status = 1 WHERE ban_status = 0;
";
if(mysqli_query($con,$update)){
    header('location: all-banner.php');
}else{
    echo"Failded your tast";
}
