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
?>

<?php include('inc/header.php') ?>
<?php include('inc/nav.php') ?>



<?php include('inc/footer.php') ?>