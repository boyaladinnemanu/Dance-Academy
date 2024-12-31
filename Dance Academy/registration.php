<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "wt";

$conn = mysqli_connect($server,$username,$password,$dbname);

if(isset($_POST['submit'])){

    $username = $_POST['newUsername'];
    $email = $_POST['email'];
    $password = $_POST['newPassword'];
    $selector = $_POST['selector'];	

    $sql ="INSERT INTO `registercredentials` VALUES('$username','$email','$password','$selector');";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "Login Details Inserted Successfully :)";
    }
}
?>


