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


$result = $con->prepare("SELECT * FROM websecreviews WHERE user LIKE ?");
$result->bind_param('s', $user);
$result->execute();
$result->store_result();
$result->bind_result($id,$user,$reviewer,$comment, $rating, $rDate);

$resultCheckCount = $result->num_rows;
*/
/*
while($result->fetch()) {
    
    echo $id;
}*/

    
?>

    
<div class="f-cl-c m-20">
    <h1 class="h1-c">NEW REVIEW</h1>
            <div class="f-c m-20">
            <i class="fa fa-star-o ratings_stars" aria-hidden="true"></i>
            <i class="fa fa-star-o ratings_stars" aria-hidden="true"></i>
            <i class="fa fa-star-o ratings_stars" aria-hidden="true"></i>
            <i class="fa fa-star-o ratings_stars" aria-hidden="true"></i>
            <i class="fa fa-star-o ratings_stars" aria-hidden="true"></i>
            </div>
</div>

<script>
         $('.ratings_stars').hover(
            // Handles the mouseover
            function() {
                $(this).prevAll().addBack().addClass('fa-star');
                $(this).prevAll().addBack().removeClass('fa-star-o');
                //$(this).nextAll().removeClass('fa-star-o');
            },
            // Handles the mouseout
            function() {
                $(this).prevAll().addBack().addClass('fa-star-o');
                $(this).prevAll().addBack().removeClass('fa-star');
                //$(this).nextAll().addClass('fa-star-o');
                set_votes($(this).parent());
            }
        );   
            
</script>

<?php



/*
echo str_replace("{{cCONTENT}}","hello",$replace);
*/

include('../templates/footer.php');
include('../templates/mEnd.php');

?>