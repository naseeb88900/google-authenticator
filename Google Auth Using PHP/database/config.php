<?php

$Server = "localhost";
$User = "root";
$Password = "";
$DB_Name = "googleAuth";

$conn = mysqli_connect($Server,$User,$Password,$DB_Name);

if($conn)
{
    echo "Connection Successful!!!";
}
else{
    echo "Connection Failed!!";
}
?>