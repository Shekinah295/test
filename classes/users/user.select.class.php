<?php
namespace UserAccountsManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class UserSelectManager extends DBConnection{
        public function select_all(){
            $sql = "SELECT * FROM `users`;";
                    $q = $this->connect()->query($sql);
                    $result = $q->fetch_all();
                    if (is_array($result)){
                        echo "Selected";
                        return $result;
                    }else{
                        echo "Not Selected";
                        return false;
                    }
        } 
        public function select_fullname($fullname){
            $sql = "SELECT * FROM `users`
                    WHERE `users`.`fullname` = '$fullname';";
                    $q = $this->connect()->query($sql);
                    $result = $q->fetch_all();
                    if (is_array($result)){
                        echo "Selected";
                        return $result;
                    }else{
                        echo "Not selected";
                        return false;
                    }    
        }
        public function select_username($username){
            $sql = "SELECT * FROM `users`
                    WHERE `users`.`username` = '$username';";
                    $q = $this->connect()->query($sql);
                    $result = $q->fetch_all();
                    if (is_array($result)){
                        echo "Selected";
                        return $result;
                    }else{
                        echo "Not selected";
                        return false;
                    }    
        }
        public function select_email($email){
            $sql = "SELECT * FROM `users`
                    WHERE `users`.`email` = '$email';";
                    $q = $this->connect()->query($sql);
                    $result = $q->fetch_all();
                    if (is_array($result)){
                        echo "Selected";
                        return $result;
                    }else{
                        echo "Not selected";
                        return false;
                    }    
        }
        public function select_nickname($nickname){
            $sql = "SELECT * FROM `users`
                    WHERE `users`.`nickname` = '$nickname';";
                        $q = $this->connect()->query($sql);
                        $result = $q->fetch_all();
                        if (is_array($result)){
                            echo "Selected";
                            return $result;
                        }else{
                            echo "Not selected";
                            return false;
                        }    
        }
        public function select_wardname($wardname){
            $sql = "SELECT * FROM `users`
                    WHERE `users`.`wardname` = '$wardname';";
                        $q = $this->connect()->query($sql);
                        $result = $q->fetch_all();
                        if (is_array($result)){
                            echo "Selected";
                            return $result;
                        }else{
                            echo "Not selected";
                            return false;
                        }    
        }
        public function get_email_exist($email){
            $sql = "SELECT * FROM `users`
                    WHERE `users`.`email` = '$email';";
                    $q = $this->connect()->query($sql);
                    $result = $q->fetch_all();
                    if (is_array($result) && !empty($result))
                        return true; 
                    else return false;   
        }
    }

?> 