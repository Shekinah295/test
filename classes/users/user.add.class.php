<?php
namespace UserAccountsManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class UserAddManager extends DBConnection{
        public function add($fullname,$username,$password,$email,$gender,$nickname,$wardname){
            $sql = "INSERT INTO `users`(`fullname`,`username`,`password`,`email`,`gender`,`nickname`,`wardname`) 
                    VALUES ('$fullname','$username','$password','$email','$gender','$nickname','$wardname');";
                        $q = $this->connect()->query($sql);
                        if ($q) {
                           echo "User Registered";
                           return true;
                        } else {
                            echo "User Not Registered";
                            return false;
                        }
        }
    }
?>