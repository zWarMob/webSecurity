<?php

require_once 'db_connect.php';
$user = "0001";
$reviewer = "0666";

$getComment = $_GET['comment'];
$getRating = $_GET['rating'];


$result = $con->prepare("INSERT INTO websecreviews (user,reviewer,comment,rating) VALUES (?,?,?,?)");
$result->bind_param('ssss', $user,$reviewer,$getComment,$getRating);
$result->execute();


mysqli_close($con);

?>