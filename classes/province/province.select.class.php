<?php
namespace ProvinceManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ProvinceSelectManager extends DBConnection{
        public function select_all(){
            $sql = "SELECT * FROM `province`;";
                $q = $this->connect()->query($sql);
                $result = $q->fetch_all();
                if(is_array($result)){
                    echo "Selected";
                    return $result;
                }else{
                    echo "Not Selected";
                    return false;
                }
        }
        public function select_pid($p_id){
            $sql = "SELECT * FROM `province`
                    WHERE `province`.`p_id` = '$p_id';";
                    $q = $this->connect()->query($sql);
                    $result = $q->fetch_all();
                    if(is_array($result)){
                       echo "Selected";
                       return $result;
                    }else{
                       echo "Not Selected";
                       return false;
                    }
        }
        public function select_pname($p_name){
            $sql = "SELECT * FROM `province`
                    WHERE `province`.`p_id` = '$p_name';";
                    $q = $this->connect()->query($sql);
                    $result = $q->fetch_all();
                    if(is_array($result)){
                       echo "Selected";
                       return $result;
                    }else{
                       echo "Not Selected";
                       return false;
                    }
        }
    }

?>