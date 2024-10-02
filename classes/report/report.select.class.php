<?php
namespace ReportManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ReportSelectManager extends DBConnection{
        public function select_all(){
            $sql = "SELECT * FROM `report_problem`;";
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
        public function select_pd($problem_description){
            $sql = "SELECT * FROM `report_problem`
                    WHERE `report_problem`.`problem_description` = '$problem_description';";
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
        public function select_image1($image1){
            $sql = "SELECT * FROM `report_problem`
                    WHERE `report_problem`.`image1` = '$image1';";
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
        public function select_image2($image2){
            $sql = "SELECT * FROM `report_problem`
                    WHERE `report_problem`.`image2` = '$image2';";
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
        public function select_image3($image3){
            $sql = "SELECT * FROM `report_problem`
                    WHERE `report_problem`.`image3` =  '$image3';";
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
        public function select_status($status){
            $sql = "SELECT * FROM `report_problem`
                    WHERE `report_problem`.`status` =  '$status';";
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