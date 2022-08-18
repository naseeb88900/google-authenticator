<?php
session_start();
include "database/config.php";
include "googleAuth/GoogleAuthenticator.php";

$checkResult="";
if($_POST['code']){
    $code= $_POST['code'];
    $secret = $_SESSION['googlecode'];

    $ga = new GoogleAuthenticator();
    $checkResult = $ga->verifyCode($secret, $code, 2);

    if ($checkResult){
        $_SESSION['googleCode']	= $code;
        header("location:profile.php");

    }
    else{
        header("location:google_Barcode.php");
    }
    exit;

}

?>
