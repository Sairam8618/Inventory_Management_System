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
    $product_id = $_GET['id'];
   $sql = "DELETE FROM products WHERE product_id='$product_id'";
   $result = mysqli_query($conn, $sql);
   header('location:products.php');


}


?>