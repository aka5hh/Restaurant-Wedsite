<?php
require_once('functions/functions.php');

$id= $_GET['md'];
$del="DELETE FROM reviews WHERE reviewer_id='$id'";
if(mysqli_query($con,$del)){
    header('location: all-message.php');
}else{
    echo"Failded your tast";
}
