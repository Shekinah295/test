<?php
namespace ProvinceManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ProvinceDeleteManager extends DBConnection{
        public function delete_all(){
            $sql = "DELETE * FROM `province`;";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Deleted";
                        return true;
                    }else{
                        echo "Not Deleted";
                        return false;
                    }
        }
        public function delete_pid($p_id){
            $sql = "DELETE FROM `province`
                    WHERE  `province`.`p_id` = 'p_id';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Deleted";
                        return true;
                    }else{
                        echo "Not Delete";
                        return false;
                    }
       }
       public function delete_pname($p_name){
            $sql = "DELETE FROM `province`
                    WHERE `province`.`pname` = '$p_name';";
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