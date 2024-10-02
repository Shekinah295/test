<?php 
require_once('../../headers.php');
/**
 *  This Handler registers user details into `db` usertable
 *  24th September 2024
 *  @Author: Cornelius Kasokola - omaesoftware@gmail.com
 ***/

//STEP 1: Collect User Information From $_POST or $_GET
$fullname = 0;
$username = 0;
$nickname = 0;
$password = 0;
$email = 0;
$gender = 0;
$wardname = 0;
// $Utils->pretty_print($_POST);

//STEP 2: Validation And Sanitization
if(isset($_POST["fullname"]) && !empty($_POST["fullname"])){
    $fullname = $_POST["fullname"];
}else {
    header("location:../../signup.php?err_fullname");
}

if(isset($_POST["username"]) && !empty($_POST["username"])){
    $username = $_POST["username"];
}else {
    header("location:../../signup.php?err_username");
}

if(isset($_POST["nickname"]) && !empty($_POST["nickname"])){
    $nickname = $_POST["nickname"];
}else {
    header("location:../../signup.php?err_nickname");
}

if(isset($_POST["password"]) && !empty($_POST["password"])){
    $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
}else {
    header("location:../../signup.php?err_password");
}

if(isset($_POST["email"]) && !empty($_POST["email"])){
    $email = $_POST["email"];
}else {
    header("location:../../signup.php?err_email");
}

if(isset($_POST["gender"]) && !empty($_POST["gender"])){
    $gender = $_POST["gender"];
}else {
    header("location:../../signup.php?err_gender");
}

if(isset($_POST["wardname"]) && !empty($_POST["wardname"])){
    $wardname = $_POST["wardname"];
}else {
    header("location:../../signup.php?err_wardname");
}

//STEP 3: Add Information To Database And Give User Feedback
if($UserAddManager->add($fullname,$username,$password,$email,$gender,$nickname,$wardname)){
    header("location:../../signup.php?successful");
}else{
    header("location:../../signup.php?failed");
}





?>