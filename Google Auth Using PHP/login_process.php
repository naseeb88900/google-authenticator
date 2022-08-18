<?php

session_start();
include "database/config.php";

if(isset($_POST["username"]) && isset($_POST["password"]))
{
    $user_name	= $_POST['username'];
    $user_password	= $_POST['password'];
}


$sql = "SELECT * FROM google_auth WHERE username = '$user_name' AND password = md5('$user_password')";

$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result) == 1)
{
    $row = mysqli_fetch_assoc($result);
    if($row["username"] == $user_name && $row["password"] == md5($user_password))
    {
        $_SESSION["user_fname"] = $row["user_fname"];
        $_SESSION["user_lname"] =  $row["user_lname"];
        $_SESSION["user_email"] =  $row["user_email"];
        $_SESSION["username"] =  $row["username"];
        $_SESSION["password"] =  $row["password"];
        $_SESSION["googlecode"] =  $row["googlecode"];
        header("Location: google_Barcode.php");
    }
    else{
        header("Location: index.php?error=Incorrect Email or Password");
    }
}
else{
    header("Location: index.php");
}
exit();
?>