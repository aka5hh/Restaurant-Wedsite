<?php //session_start();
  require_once('config.php');
  
  function get_header() {
     require_once('includes\header.php');
 }
  function get_slider() {
     require_once('includes\slider.php');
 }
  function get_review(){
     require_once('includes\review.php');
 }
  function get_footer(){
     require_once('includes\footer.php');
 }
//  function LoggedID(){
//     return $_SESSION['id'] ? true:false;
// }
//  function needLogged(){
//     $check=LoggedID();
//     if(!$check){
  //         header('Location: login.php');
  //     }
//  }
?>