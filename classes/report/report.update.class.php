<?php
namespace ReportManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ReportUpdateManager extends DBConnection{
        public function update_all($pro_id,$problem_description,$image1,$image2,$image3,$status){
            $sql = "UPDATE `report_problem`
                    SET `report_problem`.`problem_description` = '$problem_description',
                    `report_problem`.`image1` = '$image1',
                    `report_problem`.`image2` = '$image2',
                    `report_problem`.`image3` = '$image3',
                    `report_problem`.`status` = '$status';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Updated";
                        return true;
                    }else{
                        echo "Not Updated";
                        return false;
                    }
        } 
        public function update_pd($pro_id,$problem_description){
            $sql ="UPDATE `report_problem`
                    SET `report_problem`.`problem_description` = '$problem_description'
                    WHERE `report_problem`.`pro_id` = '$pro_id';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Updated";
                        return true;
                    }else{
                        echo "Not Updated";
                        return false;
                    }
        }
        public function update_image1($pro_id,$image1){
            $sql ="UPDATE `report_problem`
                    SET `report_problem`.`image1` = '$image1'
                    WHERE `report_problem`.`pro_id` = '$pro_id';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Updated";
                        return true;
                    }else{
                        echo "Not Updated";
                        return false;
                    }
        }
        public function update_image2($pro_id,$image2){
            $sql ="UPDATE `report_problem`
                    SET `report_problem`.`image2` = '$image2'
                    WHERE `report_problem`.`pro_id` = '$pro_id';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Updated";
                        return true;
                    }else{
                        echo "Not Updated";
                        return false;
                    }
        }
        public function update_image3($pro_id,$image3){
            $sql ="UPDATE `report_problem`
                    SET `report_problem`.`image3` = '$image3'
                    WHERE `report_problem`.`pro_id` = '$pro_id';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Updated";
                        return true;
                    }else{
                        echo "Not Updated";
                        return false;
                    }

        }
        public function update_status($pro_id,$status){
            $sql ="UPDATE `report_problem`
                    SET `report_problem`.`status` = '$status'
                    WHERE `report_problem`.`pro_id` = '$pro_id';";
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