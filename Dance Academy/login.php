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

    $sql ="INSERT INTO `logincredentials` VALUES('$username','$email','$password');";
    $query = mysqli_query($conn,$sql);

    if($query){
        echo "Login Details Inserted Successfully :)";
    }
}
?>