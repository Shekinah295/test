<?php
namespace WardManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class WardDeleteManager extends DBConnection{
        public function delete_all(){
            $sql = "DELETE FROM `ward`;";
                    $q = $this->connect()->query($sql);
                    if ($q){
                       echo "Deleted";
                       return true;
                    }else{
                       echo "Not Deleted";
                      return false;
                    }
        }
        public function delete_wid($w_id){
            $sql = "DELETE FROM `ward`
                    WHERE `ward`.`w_id` = '$w_id';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                      echo "Deleted";
                      return true;
                    }else{
                       echo "Not Deleted";
                       return false;
                    }
       }
       public function delete_wname($w_name){
            $sql = "DELETE FROM `ward` 
                    WHERE `ward`.`w_name` = '$w_name';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                      echo "Deleted";
                      return true;
                    }else{
                      echo "Not Deleted";
                      return false;
                   }
       }
           
    }     
?>