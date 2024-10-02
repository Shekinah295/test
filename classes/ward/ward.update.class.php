<?php
namespace WardManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class WardUpdateManager extends DBConnection{
        public function update_wname($w_name,$d_id){
            $sql = "UPDATE `ward`
                    SET `ward`.`w_name` = '$w_name'
                    WHERE `ward`.`d_id` = '$d_id';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Updated";
                        return true;
                    }else{
                       echo "Not Updated";
                       return false;
                    }
        }
        public function update_all($w_name){
            $sql = "UPDATE `ward`
                    SET `ward`.`w_name` = '$w_name';";
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