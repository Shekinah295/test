<?php
namespace DistrictManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class DistrictUpdateManager extends DBConnection{
        public function update_dname($p_id,$d_name){
            $sql = "UPDATE `district` 
                    SET `district`.`d_name` = '$d_name'
                    WHERE `district`.`p_id` = '$p_id';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                       echo "Updated";
                       return true;
                    }else{
                       echo "Not Updated";
                       return false;
                    }
        }
        public function update_dnames($d_id,$d_name){
            $sql = "UPDATE `district`
                    SET `district`.`d_name` = '$d_name'
                    WHERE `district`.`d_id` = '$d_id';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                      echo "Updated";
                      return true;
                    }else{
                      echo "Not Updated";
                      return false;
                    }
        }
        public function update_all($d_name){
            $sql = "UPDATE `district`
                    SET `district`.`d_name` = '$d_name';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                       echo "Updated";
                       return true;
                    }else{
                       echo "Not Updated";
                       return false;
                    }
        }  
    }
    
?>