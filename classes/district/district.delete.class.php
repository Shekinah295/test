<?php
namespace DistrictManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class DistrictDeleteManager extends DBConnection{
        public function delete_all(){
            $sql = "DELETE FROM `district`;";
                    $q = $this->connect()->query($sql);
                    if ($q){
                      echo "Deleted";
                      return true;
                    }else{
                      echo "Not Deleted";
                      return false;
                    }
        }
        public function delete_did($d_id){
        $sql = "DELETE FROM `district`
                WHERE  `district`.`d_id` = '$d_id';";
                $q = $this->connect()->query($sql);
                if ($q){
                  echo "Deleted";
                  return true;
                }else{
                   echo "Not Delete";
                   return false;
                }
        }
        public function delete_dname($d_name){
            $sql = "DELETE FROM `district` 
                    WHERE `district`.`d_name` = '$d_name';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                      echo "Deleted";
                      return true;
                    }else{
                      echo "Not Delete";
                      return false;
                    }
        }
    }
    
?>