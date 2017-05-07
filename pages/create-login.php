<?php
    //SET A SESSION AND GET THE FORM PARAMETERS
    session_start();
    $sUser = $_GET['user'];
    $sPass = $_GET['pass'];
    $sPassRepeat = $_GET['passRepeat'];
    $nameSession = $sUser;
    
    
    //GET THE DB CONNECTION DETAILS
    require_once 'db_connect.php';
    
    
    //ERROR ARRAY
    $msg = array();
    
    
    //PASSWORD HASH
    $passwordHash = password_hash($sPass, PASSWORD_DEFAULT);
    
    
    //CHECK THE FORM INPUT
    if(strlen($sUser) < 8){
        $msg['user'] = 'Username has to be at least 8 characters long';
    }
    
    if(strlen($sPass) < 8){
        $msg['pass'] = 'Password has to be at least 8 characters long';
    }
    
    if(strlen($sPass) > 7 && $sPass != $sPassRepeat){
        $msg['passRepeat'] = "Passwords don't match";
    }
    
    
    //CHECK IF THE GIVEN USERNAME EXISTS
    $sql = $con->prepare("SELECT * FROM websecusers WHERE User=:sUser");
    $sql->bindParam(':sUser', $sUser);
    $sql->execute();
    $result = $sql->fetchAll();
    $resultC = $sql->rowCount();
    
    //IF THE USERNAME IS FOUND IN THE DB
    if($resultC == 1){
        $msg['creation'] = 'Username not available';
    }
    
    
    //CREATE USER IF EVERTHING IS OK
    //MAKE IT A LOT SIMPLER = CHECK MSG ARRAY INSTEAD!
    if(strlen($sUser) >= 8 && strlen($sPass) >= 8 && $sPass == $sPassRepeat && $result == false){
        $createSql = $con ->prepare ("INSERT INTO websecusers (User,Pass,LoggedTime) VALUES (:sUser,:Pass,CURRENT_TIMESTAMP)");
        $createSql ->bindParam(':sUser', $sUser);
        $createSql ->bindParam(':Pass', $passwordHash);
        $createSql ->execute();
        $msg['creationOk'] = 'Profile has successfully been created';
    }
    
    
    //IF THE ERROR ARRAY CONTAINS ANYTHING ECHO IT
    if (!empty($msg))
    {
        echo json_encode($msg);
    }
    
    
    //CLOSE THE CONNECTION
    $con = null;
?>