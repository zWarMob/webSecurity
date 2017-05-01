<?php

require_once 'db_connect.php';
$user = "0001";
$reviewer = "0666";

$getComment = $_GET['comment'];
$getRating = $_GET['rating'];

if($getComment != "" && $getRating != ""){
$result = $con->prepare("INSERT INTO websecreviews (user,reviewer,comment,rating) VALUES (?,?,?,?)");
$result->bind_param('ssss', $user,$reviewer,$getComment,$getRating);
$result->execute();

echo ("yes");
}
            else
{
            echo ("no");
}


mysqli_close($con);

?>