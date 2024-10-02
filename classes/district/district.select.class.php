<?php
namespace DistrictManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class DistrictSelectManager extends DBConnection{
        public function select_all(){
            $sql = "SELECT * FROM `district`;";
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
        public function select_dname($d_name){
            $sql = "SELECT * FROM `district`
                    WHERE `district`.`d_name` = '$d_name';";
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
        public function select_did($d_id){
            $sql = "SELECT * FROM `district`
                    WHERE `district`.`d_id` =  '$d_id';";
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
    }
    
?>