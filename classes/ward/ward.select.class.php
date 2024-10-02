<?php
namespace wardManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class WardSelectManager extends DBConnection{
        public function select_all(){
            $sql = "SELECT * FROM `ward`;";
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
        public function select_wname($w_name){
            $sql = "SELECT * FROM `ward`
                    WHERE `ward`.`w_name` = '$w_name';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Selected";
                        return true;
                    }else{
                        echo "Not selected";
                        return false;
                    }
        }
        public function select_wid($w_id){
            $sql = "SELECT * FROM `ward`
                    WHERE `ward`.`w_id` = '$w_id';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Selected";
                        return true;
                    }else{
                        echo "Not selected";
                        return false;
                    }
        }
    }
?>