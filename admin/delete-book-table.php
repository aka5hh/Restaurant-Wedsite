<?php
require_once('functions/functions.php');

$id= $_GET['md'];
$del="DELETE FROM book_table WHERE book_id='$id'";
if(mysqli_query($con,$del)){
    header('location: all-message.php');
}else{
    echo"Failded your tast";
}
