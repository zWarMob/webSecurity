<?php

include('../templates/mStart.php');
include('../templates/header.php');

// error_reporting(E_ALL);
// ini_set('display_errors', 1);

//GET THE DB CONNECTION DETAILS
require_once 'db_connect.php';

<<<<<<< HEAD

$user = $_SESSION['userIdSession'];

//$result = $con->prepare("SELECT * FROM websecreviews WHERE user LIKE :user");
$result = $con->prepare("SELECT * FROM websecuserinfo JOIN websecreviews ON websecuserinfo.userId WHERE user LIKE :user");
$result->bindParam(':user', $user);
$result->execute();
$resultCheckCount = $result->rowCount();
$result = $result->fetchAll();
=======
$result = $con->prepare("SELECT * FROM websecreviews WHERE user LIKE :user ORDER BY reviewTime DESC");
$result->bindParam(':user', $user);
$result->execute();
$result = $result->fetchAll();
$resultCount = count($result);
// print_r($result);
// echo '<br>';
//                         foreach ($result as $key => $value) {
// print_r($key);
// echo '<br>';
// print_r($value);
// echo '<br>';
// }
 /*
$result->bind_result($id,$user,$reviewer,$comment, $rating, $rDate);
$resultCheckCount = $result->num_rows;*/

/*$result->get_result();
var_dump($result);*/


/* fetch associative array */
/*while ($row = $result->fetch_array()) {
    //printf ("%s (%s)\n", $row["Name"], $row["CountryCode"]);
}*/

        





/*
foreach($sqlResult as $test){
            echo $rating;
            echo $comment;
}*/

>>>>>>> origin/master
    
?>

<div class="h-70">
    <div class="f-c m-20">
            <div class="f-sa w-250">
                        <div class="f-w-600">
                                    <p class="">Name</p>
                                    <p class="">City</p>
                                    <p class="">Age</p>
                                    <p class="">Avg rating</p>
                        </div>
                        <div>
<<<<<<< HEAD
                                    <p class=""><?php echo $result[0]['firstname']?></p>
                                    <p class=""><?php if($result[0]['adress'] != ""){
                                                         echo $result[0]['adress'];
                                                         }else{
                                                            echo '...';
                                                }?></p>
                                    <p class=""><?php if($result[0]['age'] != ""){
                                                            echo $result[0]['age'];
                                                }else{
                                                            echo '...';
                                                }?></p>
                                    <p class=""><?php $finalRating = 0;
                                    foreach($result as $eachRating){
                                          $finalRating += $eachRating['rating'];      
                                    }
                                    echo $finalRating/$resultCheckCount;?></p>
=======
                                    <p class="">Thao</p>
                                    <p class="">Copenhagen</p>
                                    <p class="">24</p>
                                    <p class="" style="font-weight: 600;"><?php
                                    $avg = 0;
                                    foreach ($result as $key => $value) {
                                                $avg += $value['rating'];
                                    }
                                    $final = $avg / $resultCount;
                                    echo (round($final,1));
                                    ?> <i class='fa fa-star fa-1x aria-hidden='true'></i></p>
>>>>>>> origin/master
                        </div>
            </div>
            <div class="img-s-150 m-l-r-50">
                        <img src="../images/anonymousProfile.png" class="img-100" alt="Profile">      
            </div>
    </div>
    <hr class="hr-90">
    <div class="f-cl-c m-20">
            
            <h4 style="text-align: center;">IF YOU ARE LOGGED IN YOU WILL SEE THE ADD OPTION</h4>
            
            <div class="f-cl-c m-20">
                      <h2 class="h2-c">ADD ITEM <i class="fa fa-plus-circle" aria-hidden="true"></i></h2>  
            </div>
            
            
            <h1 class="h1-c">CURRENT RENTALS</h1>
            <!-- TEMPLATE !!! -->
            <div class="h-200 f-c m-20">
                        <div class="img-s-150 m-l-r-50">
                                    <img src="../images/genericItem.png" class="img-100" alt="Profile">
                                    
                        </div>
                        <p class="w-300"> <?php $replace = "{{cCONTENT}}"; ?> </p>
            </div>
            <!-- TEMPLATE END !!! -->
    </div>
    
    <hr class="hr-90">
    
            <div class="f-cl-c m-20">
                <h1 class="h1-c">HISTORY</h1>
                <!-- TEMPLATE !!! -->
                <?php
<<<<<<< HEAD
                                        if ($resultCheckCount == 0){
                                  echo "<h1>No reviews have been made yet</h1>";
                                        }
                /*while($result->fetch()) {*/
                foreach($result as $each){
                
                                    switch ($each['rating']){
=======


                    if ($resultCount == 0){
                        echo "<h1>No reviews have been made yet</h1>";
                    }else{
                        foreach ($result as $key => $value) {
                            echo "
                                <div class='b-2 m-30'>
                                    <div class='f-c m-20'>"
                                        .str_repeat("<i class='fa fa-star fa-2x' aria-hidden='true'></i>",$value['rating'])
                                        .str_repeat("<i class='fa fa-star-o fa-2x' aria-hidden='true'></i>",(5-$value['rating']))
                                    ."</div>
                                    <div class='h-100 f-c m-20'>
                                        <div class='img-s-150 m-l-r-50'>
                                            <img src='../images/genericItem.png' class='img-100' alt='item'>
                                        </div>
                                        <div class='f-sp'>
                                            <p class='w-300 f-grow'>".$value['comment']."</p>
                                            <p class='w-300 f-08-ir'>User: ".$value['reviewer']."</p>
                                            <p class='w-300 f-08-ir'>Date: ".$value['reviewTime']."</p>
                                        </div>
                                    </div>
                                </div>";
                        }
                    }
               /* while($result->fetch()) {*/
            /*            foreach($rows as $value){
               
                
                                    switch ($value){
>>>>>>> origin/master
                                                case "1":
                                                echo "
                                                <div class='b-2 m-30'>
                                                <div class='f-c m-20'>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>";
                                                break;
                                                case "2":
                                                echo "
                                                <div class='b-2 m-30'>
                                                <div class='f-c m-20'>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>";
                                                break;
                                                case "3":
                                                echo "
                                                <div class='b-2 m-30'>
                                                <div class='f-c m-20'>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>";
                                                break;
                                                case "4":
                                                echo "
                                                <div class='b-2 m-30'>
                                                <div class='f-c m-20'>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>";
                                                break;
                                                case "5":
                                                echo "
                                                <div class='b-2 m-30'>
                                                <div class='f-c m-20'>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star fa-2x' aria-hidden='true'></i>";
                                                break;
                                                default:
                                                echo "
                                                <div class='b-2 m-30'>
                                                <div class='f-c m-20'>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>
                                                <i class='fa fa-star-o fa-2x' aria-hidden='true'></i>";
                                                
                                    }

                                    echo "

                        </div>
                        <div class=\"h-100 f-c m-20\">
                                    <div class=\"img-s-150 m-l-r-50\">
                                                <img src=\"../images/genericItem.png\" class=\"img-100\" alt=\"item\">
                                                
                                    </div>
                                    <div class=\"f-sp\">
                                    <p class=\"w-300 f-grow\">".$each['comment']."</p>
                                    <p class=\"w-300 f-08-ir\">User:". $each['reviewer']."</p>
                                    <p class=\"w-300 f-08-ir\">Date:". $each['reviewTime']."</p>
                                    </div>
                        </div>
                </div>";}*/?>
            </div>
</div>

<?php
/*
echo str_replace("{{cCONTENT}}","hello",$replace);
*/

include('../templates/footer.php');
include('../templates/mEnd.php');

?>