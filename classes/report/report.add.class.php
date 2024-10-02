<?php
namespace ReportManager;
    require_once("../../config/config.class.php");
    use servers\DBConnection;
    class ReportAddManager extends DBConnection{
        public function add($pro_id,$problem_description,$image1,$image2,$image3,$status){
            $sql = "INSERT INTO `report_problem`(`pro_id`,`problem_description`,`image1`,`image2`,`image3`,`status`)
                    VALUES ('$pro_id','$problem_description','$image1','$image2','$image3','$status');";
                    $q = $this->connect()->query($sql);
                    if ($q){
                       echo "Added";
                       return true;
                    }else{
                       echo "Not Added";
                       return false;
                    }
        }   
}
?>