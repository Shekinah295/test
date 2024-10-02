<?php
namespace WardManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class WardAddManager extends DBConnection{
        public function add($d_id,$w_name){
            $sql = "INSERT INTO `ward` (`d_id`,`w_name`)
                    VALUES ('$d_id','$w_name');";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Added";
                        return true;
                    }else{
                        echo "Not added";
                        return false;
                    }
        }

    }
?>