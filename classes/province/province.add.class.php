<?php
namespace ProvinceManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ProvinceAddManager extends DBConnection{
        public function add($p_name){
            $sql = "INSERT INTO `province` (`p_name`)
                    VALUES ('$p_name');";
                        $q = $this->connect()->query($sql);
                        if ($q){
                           echo "Added";
                           return true;
                        }else{
                           echo "Not Added";
                           return false;
                        }
        }  
    }  

?>