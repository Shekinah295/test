<?php
namespace servers;
class DBConnection {
    private $_server = "127.0.0.1";
    private $_administrator_name = "shekinah";
    private $_administrator_password = "";
    private $_db_name = "fixmystreet";
    public function connect(){
        $mysql = new \mysqli($this->_server,$this->_administrator_name,$this->_administrator_password,$this->_db_name);
        if ($mysql){
            echo "Connected To The Database";
            return $mysql;
        }else {
            echo "Database Connection Failed";
            return false;
        }
    }
}
// $connection = new DBConnection();
// $con = $connection->connect();

?>