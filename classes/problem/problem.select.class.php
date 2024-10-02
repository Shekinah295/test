<?php
namespace ProblemManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ProblemSelectManager extends DBConnection {
        public function select_all(){
            $sql = "SELECT * FROM `problem_category`;";
                    $q = $this->connect()->query($sql);
                    $result = $q->fetch_all();
                    if (is_array($result)){
                        echo "selected";
                        return $result;
                    }else{
                        echo "not selected";
                        return false;
                    }
        }
        public function select_proid($pro_id){
            $sql = "SELECT * FROM `problem_category`
                    WHERE `problem_category`.`pro_id` = '$pro_id';";
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
        public function select_proname($problem_name){
            $sql = "SELECT * FROM `problem_category`
                    WHERE `problem_category`.`problem_name` = '$problem_name';";
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