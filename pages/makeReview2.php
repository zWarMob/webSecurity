<?php

require_once 'db_connect.php';
$user = "0001";
$reviewer = "0666";

$getComment = 
$getRating =


$result = $con->prepare("INSERT INTO websecreviews (user,reviewer,comment,rating) VALUES (?,?,?,?)");
$result->bind_param('ssss', $user,$reviewer,$getComment,$getRating);
$result->execute();

/*
echo str_replace("{{cCONTENT}}","hello",$replace);
*/

include('../templates/footer.php');
include('../templates/mEnd.php');

?>