<?php
namespace UserAccountsManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class UserUpdateManager extends DBConnection{
        public function update_fullname($fullname,$u_id){
            $sql = "UPDATE `users`
                    SET `users`.`fullname` = '$fullname'
                    WHERE `users`.`u_id` = '$u_id';";
                        $q = $this->connect()->query($sql);
                        if ($q){
                           echo "Updated";
                           return true;
                        }else{
                            echo "Not Updated";
                            return false;
                        }
        }
        public function update_username($username,$u_id){
            $sql = "UPDATE `users`
                    SET `users`.`username` = '$username'
                    WHERE `users`.`u_id` = '$u_id';";
                        $q = $this->connect()->query($sql);
                        if ($q){
                           echo "Updated";
                           return true;
                        }else{
                           echo "Not Updated";
                           return false;
                        }
        }
        public function update_password($password,$u_id){
            $sql = "UPDATE `users`
                    SET `users`.`password` = '$password'
                    WHERE `users`.`u_id` = '$u_id';";
                        $q = $this->connect()->query($sql);
                        if ($q){
                           echo "Updated";
                           return true;
                        }else{
                           echo "Not Updated";
                           return false;
                        }
        }
        public function update_email($email,$u_id){
            $sql = "UPDATE `users`
                    SET `users`.`email` = '$email'
                    WHERE `users`.`u_id` = '$u_id';";
                        $q = $this->connect()->query($sql);
                        if ($q){
                           echo "Updated";
                           return true;
                        }else{
                           echo "Not Updated";
                           return false;
                        }
        }
        public function update_gender($gender,$u_id){
            $sql = "UPDATE `users`
                    SET `users`.`gender` = '$gender'
                    WHERE `users`.`u_id` = '$u_id';";
                        $q = $this->connect()->query($sql);
                        if ($q){
                           echo "Updated";
                           return true;
                        }else{
                           echo "Not Updated";
                           return false;
                        }
        }
        public function update_nickname($nickname,$u_id){
            $sql = "UPDATE `users`
                    SET `users`.`nickname` = '$nickname'
                    WHERE `users`.`u_id` = '$u_id';";
                        $q = $this->connect()->query($sql);
                        if ($q){
                           echo "Updated";
                           return true;
                        }else{
                           echo "Not Updated";
                           return false;
                        }
        }
        public function update_wardname($wardname,$u_id){
            $sql = "UPDATE `users`
                    SET `users`.`wardname` = '$wardname'
                    WHERE `users`.`u_id` = '$u_id';";
                        $q = $this->connect()->query($sql);
                        if ($q){
                           echo "Updated";
                           return true;
                        }else{
                           echo "Not Updated";
                           return false;
                        }
        }
        public function update_all($fullname,$username,$password,$email,$gender,$nickname,$wardname){
            $sql = "UPDATE `users`
                    SET `users`.`fullname` = '$fullname',
                    `users`.`username` = '$username',
                    `users`.`password` = '$password',
                    `users`.`email` = '$email',
                    `users`.`gender` = '$gender', 
                    `users`.`nickname` = '$nickname',
                    `users`.`wardname` = '$wardname';";
                   $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Updated";
                        return true;
                    }else{
                        echo "Not updated";
                        return false;
                    }               
        }
    }  
     
?>