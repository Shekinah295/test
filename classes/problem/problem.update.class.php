<?php
namespace ProblemManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ProblemUpdateManager extends DBConnection{
        public function update_proname($pro_id,$problem_name){
            $sql ="UPDATE `problem_category`
                    SET `problem_category`.`problem_name` = '$problem_name'
                    WHERE `problem_category`.`pro_id` = '$pro_id';";
                        $q = $this->connect()->query($sql);
                        if($q){
                            echo "Updated";
                            return true;
                        }else{
                            echo "Not Updated";
                            return false;
                        }
        }
        public function update_all($problem_name){
            $sql ="UPDATE `problem_category`
                    SET `problem_category`.`problem_name` = '$problem_name';";
                        $q = $this->connect()->query($sql);
                        if($q){
                           echo "Updated";
                           return true;
                        }else{
                           echo "Not Updated";
                           return false;
                        }
        } 
    }
    
?>