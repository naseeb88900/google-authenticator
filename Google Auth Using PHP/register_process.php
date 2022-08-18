<?php

include "database/config.php";
include "googleAuth/GoogleAuthenticator.php";

$object = new GoogleAuthenticator();
$secret = $object->createSecret();

if(isset($_POST["submit"]))
{
    $f_name = $_POST["fname"];
    $l_name= $_POST["lname"];
    $user_email= $_POST["email"];
    $user_name= $_POST["username"];
    $user_pass= $_POST["password"];
}

$google_code =  $object->createSecret();
$sql = "INSERT INTO google_auth(user_fname, user_lname, user_email, username, password, googlecode) VALUES ('$f_name', '$l_name', '$user_email', '$user_name',md5('$user_pass'), '$google_code')";
mysqli_query($conn, $sql);


mysqli_close($conn);

header("Location: index.php");

?>
