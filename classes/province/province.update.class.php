<?php
namespace ProvinceManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ProvinceUpdateManager extends DBConnection{
        public function update_pname($p_id,$p_name){
            $sql = "UPDATE `province`
                    SET `province`.`p_name` = '$p_name'
                    WHERE `province`.`p_id` = '$p_id';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                       echo "Updated";
                       return true;
                    }else{
                       echo "Not Updated";
                       return false;
                    }
        }
        public function update_all($p_name){
            $sql = "UPDATE `province`
                    SET `province`.`p_name` = '$p_name';";
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