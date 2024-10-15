<?php 
require_once('../../headers.php');

/**
 *  This Handler Enables The User To Login
 *  
 ***/

 //step 1: get user info using email
 $email = 0;
 $password = 0;

 if(isset($_POST["password"]) && !empty($_POST["password"])){
    $password = $_POST["password"];
}else {
    header("location:../../signup.php?err_password");
}

if(isset($_POST["email"]) && !empty($_POST["email"])){
    $email = $_POST["email"];
}else {
    header("location:../../signup.php?err_email");
}

 $container = $UserSelectManager->select_email($email);
 //step 2: compapare entered password and password in db
if(is_array($container) && !empty($container)){
    if(password_verify($password,$container["password"])){
        //Start Sessions
        switch($container["act_id"]){
            case 1:
                if($SessionManager->initUser($container)){
                    header("location:../../dashboards/user/home.php");
                }else header("location:../../login.php?err_sessn");
                break;
            case 2:
                if($SessionManager->initCouncil($container)){
                    header("location:../../dashboards/council/home.php");
                }else header("location:../../login.php?err_sessn");
                break;
            case 3:
                if($SessionManager->initGovernment($container)){
                    header("location:../../dashboards/system/home.php");
                }else header("location:../../login.php?err_sessn");
                break;

        }
        
    }else header("location:../../login.php?wrong_password");
}else header("location:../../login.php?unexist");







?>