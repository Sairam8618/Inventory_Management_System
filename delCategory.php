<?php
 session_start();
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "shoping_cart";

// Create connection
$conn = mysqli_connect($localhost, $username, $password , $dbname);
 if(!isset($_SESSION['email']) && empty($_SESSION['email']) ){
  header('location:login.php');
 }
 

if(isset($_GET['id'])){
    $catid = $_GET['id'];
   $sql = "DELETE FROM Category WHERE cat_id='$catid'";
   $result = mysqli_query($conn, $sql);
   header('location:categories.php');


}


?>