<?php
namespace DistrictManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class DistrictAddManager extends DBConnection{
        public function add($p_id,$d_name){
            $sql ="INSERT INTO `district`(`p_id`,`d_name`) VALUES ('$p_id','$d_name');";
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