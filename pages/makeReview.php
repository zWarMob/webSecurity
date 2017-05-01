<?php

include('../templates/mStart.php');
include('../templates/header.php');
/*
error_reporting(E_ALL);
ini_set('display_errors', 1);
*/
//GET THE DB CONNECTION DETAILS
/*
require_once 'db_connect.php';
$user = "0001";
$reviewer = "0666";

*/


    
?>

    
<div class="f-cl-c m-20">
    <h1 class="h1-c">NEW REVIEW</h1>
            <div class="f-c m-20">
                        <i class="p-4 fa fa-star-o fa-3x ratings_stars" aria-hidden="true"></i>
                        <i class="p-4 fa fa-star-o fa-3x ratings_stars" aria-hidden="true"></i>
                        <i class="p-4 fa fa-star-o fa-3x ratings_stars" aria-hidden="true"></i>
                        <i class="p-4 fa fa-star-o fa-3x ratings_stars" aria-hidden="true"></i>
                        <i class="p-4 fa fa-star-o fa-3x ratings_stars" aria-hidden="true"></i>
            </div>
            <div class="/*w-250 h-200*/">
                        <textarea id="commentField" class="w-250 h-200" style="resize: none;"></textarea>
            </div>
            <p id="test" style="border: 2px solid red; width: 20px; height: 20px;"></p>
            <button id="postR" class="btn btn-warning">Post</button>
</div>

<script>
         $('.ratings_stars').hover(
            // Handles the mouseover
            function() {
                        if (!$(this).hasClass("fa-star")) {
                                   $(this).prevAll().addBack().addClass('fa-star-selected');
                        }
            },
            // Handles the mouseout
            function() {
                        if (!$(this).hasClass("fa-star")) {
                                    //$(this).prevAll().addBack().addClass('fa-star-o');
                                    $(this).nextAll().addBack().removeClass('fa-star-selected');
                                    $(this).prevAll().addBack().removeClass('fa-star-selected');
                        }else{
                                    
             
                $(this).prevAll().addBack().removeClass('fa-star-selected');
                }
            }
        );
         
            $('.ratings_stars').click(function(){
                        $(this).prevAll().addBack().addClass('fa-star');
                        $(this).prevAll().addBack().removeClass('fa-star-o');
                        $(this).nextAll().removeClass('fa-star');
                        $(this).nextAll().removeClass('fa-star-selected');
                        $(this).nextAll().addClass('fa-star-o');  

                        var t = $('.fa-star').length;
                        $('#test').html(t);
                        console.log(t);
            });
            
            /*
            var t = $('.fa-star').length;
            $('#test').html(t);
            */
            
$("#postR").click(function(){
            var comment = $("#commentField").val();
            var rating = $('.fa-star').length;

            var sLink = "makeReview2.php?comment=" + comment + "&rating=" + rating;
            
            $.ajax({
                        "url":sLink,
                        "dataType":"text",
                        "method":"post",
                        "cache": false
                    }).done( function(Data){
                        console.log(Data);
                        
                        if (Data == "yes") {
                                    //code
                        }else{
                                    swal({
                                    title: "Error!",
                                    text: "Here's my error message!",
                                    type: "error",
                                    confirmButtonText: "Cool"
                                  });
                        }
            });
});
            
         
</script>

<?php


/*
$result = $con->prepare("INSERT INTO websecreviews (user,reviewer,comment,rating) VALUES (?,?,?,?)");
$result->bind_param('ssss', $user,$reviewer,$getComment,$getRating);
$result->execute();
*/


include('../templates/footer.php');
include('../templates/mEnd.php');

?>