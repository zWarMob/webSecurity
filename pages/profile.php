<?php

include('../templates/mStart.php');
include('../templates/header.php');

//GET THE DB CONNECTION DETAILS
require_once 'db_connect.php';
$user = "0001";

$result = $con->prepare("SELECT * FROM websecreviews WHERE user LIKE ?");
$result->bind_param('s', $user);
$result->execute();
$result->store_result();
$result->bind_result($id,$user,$reviewer,$comment, $rating);
$$resultCheckResult = $result->fetch();
$$resultCheckCount = $result->num_rows;

//IF A RESULT IS FOUND THEN ASSIGN 1 TO THE SITEBAN VARIABLE FOR USE FURTHER DOWN THIS CODE
if($result >= 1){
            str_replace("{{CONTENT}},$comment,{{CONTENT}}");
}
    
?>

<div class="h-70">
    <div class="f-c m-20">
            <div class="f-sa w-250">
                        <div class="f-w-600">
                                    <p class="">Name</p>
                                    <p class="">City</p>
                                    <p class="">Age</p>
                                    <p class="">...</p>
                                    <p class="">...</p>
                        </div>
                        <div>
                                    <p class="">Thao</p>
                                    <p class="">Copenhagen</p>
                                    <p class="">24</p>
                                    <p class="">...</p>
                                    <p class="">...</p>
                        </div>
            </div>
            <div class="img-s-150 m-l-r-50">
                        <img src="../images/anonymousProfile.png" class="img-100" alt="Profile">      
            </div>
    </div>
    <hr class="hr-90">
    <div class="f-cl-c m-20">
            <h1 class="h1-c">CURRENT RENTALS</h1>
            <div class="h-200 f-c m-20">
                        <div class="img-s-150 m-l-r-50">
                                    <img src="../images/genericItem.png" class="img-100" alt="Profile">
                                    
                        </div>
                        <p class="w-300">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris maximus faucibus purus vel tempor. Nam mollis ipsum risus, eget rhoncus justo euismod et. Ut ut enim nisi. Aenean in pretium turpis, non maximus orci.</p>
            </div>
    </div>
    
    <hr class="hr-90">
    
            <div class="f-cl-c m-20">
                <h1 class="h1-c">HISTORY</h1>
                <!-- TEMPLATE !!! -->
                <?php
                
                ?>
                <div class="b-2 m-30">
                        <div class="f-c m-20">
                        <i class="fa fa-star fa-2" aria-hidden="true"></i>
                        <i class="fa fa-star fa-4" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star-o" aria-hidden="true"></i>
                        </div>
                        <div class="h-200 f-c m-20">
                                    <div class="img-s-150 m-l-r-50">
                                                <img src="../images/genericItem.png" class="img-100" alt="Profile">
                                                
                                    </div>
                                    <p class="w-300">{{CONTENT}}</p>
                        </div>
                    </div>
                <!-- TEMPLATE END !!! -->
            </div>
    
    
</div>

<?php
include('../templates/footer.php');
include('../templates/mEnd.php');

?>