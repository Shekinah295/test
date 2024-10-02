<?php
namespace UtilityManager;
class Utils {
    public function pretty_print($arr){
        echo "<pre>";
            print_r($arr);
        echo "</pre>";
        exit;
    }
}

?>