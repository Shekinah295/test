<?php
namespace ProblemManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ProblemDeleteManager extends DBConnection{
        public function delete_pname($problem_name){
            $sql = "DELETE FROM `problem_category`
                    WHERE  `problem_category`.`problem_name`='$problem_name';";
                    $q =$this->connect()->query($sql);
                    if($q){
                       echo "Deleted";
                       return true;
                    }else{
                      echo "Not Deleted";
                      return false;
                    }
        }
        public function delete_proid($pro_id){
            $sql = "DELETE FROM `problem_category`
                    WHERE `problem_category`.`pro_id` = '$pro_id';";
                    $q = $this->connect()->query($sql);
                    if($q){
                        echo "Deleted";
                        return true;            
                    }else{
                       echo "Not Deleted";
                       return false;
                    }
        }
        public function delete_all(){
            $sql = "DELETE FROM `problem_category`;";
                    $q = $this->connect()->query($sql);
                    if($q){
                      echo "Deleted";
                      return true;
                    }else{
                      echo "Not Deleted";
                      return false;
                   }
        }
    }
    
?>