<?php
require_once('functions/functions.php');

$id= $_GET['md'];
$del="DELETE FROM book_table WHERE bookt_id='$id'";
if(mysqli_query($con,$del)){
    header('location: book-table.php');
}else{
    echo"Failded your task";
}
