<?php
namespace ProblemManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ProblemAddManager extends DBConnection{
        public function add($problem_name){
            $sql = "INSERT INTO `problem_category`(`problem_name`)
                    VALUES ('$problem_name');";
                    $q = $this->connect()->query($sql);
                    if($q){
                       echo "added";
                       return true;
                    }else{
                      echo "not added";
                      return false;
                    }
        }
    }
    
?>