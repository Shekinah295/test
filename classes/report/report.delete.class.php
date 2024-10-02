<?php
namespace ReportManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ReportDeleteManager extends DBConnection{
        public function delete_all(){
            $sql = "DELETE FROM `report_problem`;";
                   $q = $this->connect()->query($sql);
                   if ($q){
                       echo "Deleted";
                       return true;
                    }else{
                       echo "Not Deleted";
                       return false;
                    }
        }
        public function delete_pd($problem_description){
            $sql = "DELETE FROM `report_problem`
                    WHERE `report_problem`.`problem_description`='$problem_description';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Deleted";
                        return true;
                    }else{
                        echo "Not Deleted";
                        return false;
                    }
        }
        public function delete_image1($image1){
            $sql = "DELETE FROM `report_problem`
                    WHERE `report_problem`.`image1`='$image1';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Deleted";
                        return true;
                    }else{
                        echo "Not Deleted";
                        return false;
                    }
        }
        public function delete_image2($image2){
            $sql = "DELETE FROM `report_problem`
                    WHERE `report_problem`.`image2`='$image2';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                       echo "Deleted";
                       return true;
                    }else{
                       echo "Not Deleted";
                       return false;
                    }
        }          
        public function delete_image3($image3){
                $sql = "DELETE FROM `report_problem`
                        WHERE `report_problem`.`image3`='$image3';";
                        $q = $this->connect()->query($sql);
                        if ($q){
                            echo "Deleted";
                            return true;
                        }else{
                            echo "Not Deleted";
                            return false;
                        }
        } 
        public function delete_status($status){
            $sql = "DELETE FROM `report_problem`
                    WHERE `report_problem`.`status`='$status';";
                    $q = $this->connect()->query($sql);
                    if ($q){
                        echo "Deleted";
                        return true;
                    }else{
                        echo "Not Deleted";
                        return false;
                    }
        }   
    }

?>