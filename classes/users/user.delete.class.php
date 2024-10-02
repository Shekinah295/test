<?php
namespace UserAccountsManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class UserDeleteManager extends DBConnection{
        public function delete_email($email){
             $sql = "DELETE FROM `users`
                    WHERE `users`.`email` = '$email';";
                        $q = $this->connect()->query($sql);
                        if ($q){
                           echo "Deleted";
                           return true;
                        }else{
                           echo "Failed Delete";
                           return false;
                        }
        }
        public function delete_userid($u_id){
             $sql = "DELETE FROM `users`
                    WHERE  `users`.`u_id` = '$u_id';";
                        $q = $this->connect()->query($sql);
                        if ($q){
                           echo "Deleted";
                           return true;
                        }else{
                           echo "Failed To Delete";
                           return false;
                        }
        }
        public function delete_all(){
            $sql = "DELETE FROM `users`;";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Deleted";
                        return true;
                    }else{
                        echo "Failed To Delete";
                        return false;
                    }
        }
    }       

?>