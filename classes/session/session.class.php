<?php
namespace SessionManagement;
require_once("../../config/config.class.php");
    use servers\DBConnection;
    class SessionManager {
        public function initUser($container){
            session_start();
            $_SESSION["uSessn"] = [
                "uName"=>$container["fullname"],
                "uEmail"=>$container["email"],
                "uID"=>$container["uid"]
            ];
            if(isset($_SESSION["uSessn"]) && !empty($_SESSION["uSessn"]["uEmail"]))
                return true;
            else return false;
        }
        public function protectionUser(){
            session_start();
            echo session_id();
            if(isset($_SESSION["uSessn"]) && !empty($_SESSION["uSessn"]["uEmail"]))
                session_regenerate_id();
            else return false;
        }
        public function terminateUser(){
            unset($_SESSION["uSessn"]["uName"]);
            unset($_SESSION["uSessn"]["uEmail"]);
            unset($_SESSION["uSessn"]["uID"]);
            unset($_SESSION["uSessn"]);
            if(isset($_SESSION["uSessn"]) && !empty($_SESSION["uSessn"]["uEmail"]))
                return false;
            else return true;
        }

        //Counccil
        public function initCouncil($container){
            session_start();
            $_SESSION["cSessn"] = [
                "cName"=>$container["fullname"],
                "cEmail"=>$container["email"],
                "cID"=>$container["uid"]
            ];
            if(isset($_SESSION["cSessn"]) && !empty($_SESSION["cSessn"]["cEmail"]))
                return true;
            else return false;
        }
        public function protectionCouncil(){
            session_start();
            echo session_id();
            if(isset($_SESSION["cSessn"]) && !empty($_SESSION["cSessn"]["cEmail"]))
                session_regenerate_id();
            else return false;
        }
        public function terminateCouncil(){
            unset($_SESSION["cSessn"]["cName"]);
            unset($_SESSION["cSessn"]["cEmail"]);
            unset($_SESSION["cSessn"]["cID"]);
            unset($_SESSION["cSessn"]);
            if(isset($_SESSION["cSessn"]) && !empty($_SESSION["cSessn"]["cEmail"]))
                return false;
            else return true;
        }

        //Government
        public function initGovernment($container){
            session_start();
            $_SESSION["gSessn"] = [
                "gName"=>$container["fullname"],
                "gEmail"=>$container["email"],
                "gID"=>$container["uid"]
            ];
            if(isset($_SESSION["gSessn"]) && !empty($_SESSION["gSessn"]["gEmail"]))
                return true;
            else return false;
        }
        public function protection(){
            if(isset($_SESSION["gSessn"]) && !empty($_SESSION["gSessn"]["gEmail"]))
                session_regenerate_id();
            else return false;
        }
        public function terminateGovernment(){
            unset($_SESSION["gSessn"]["gName"]);
            unset($_SESSION["gSessn"]["gEmail"]);
            unset($_SESSION["gSessn"]["gID"]);
            unset($_SESSION["gSessn"]);
            if(isset($_SESSION["gSessn"]) && !empty($_SESSION["gSessn"]["gEmail"]))
                return false;
            else return true;
        }
}
?>