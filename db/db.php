<?php
require_once "../config.php";

class DB {
    private $conx = null;
    public function __construct() {
        $this->conx = new mysqli(_HOST, _USER, _PSWD, _DB, _PORT);
        if($this->conx->errno == 0) {
            $this->conx->set_charset("utf8");
        }
    }
    public function select($query) {
        $rs = $this->conx->query($query);
        $this->conx->close();
        if(is_bool($rs)) {
            return null;
        }
        else {
            if($rs->num_rows > 0) {
                return $rs;
            }
            else return null;
        }
    }
    
    public function execute($query) {
        $value = $this->conx->query($query);
        $this->conx->close();
        return $value;
    }
    public function deletee($field, $table, $value) {
        $this->conx->query("UPDATE $table SET habilitado = 0 WHERE $field = $value;");
        //echo "UPDATE $table habilitado = 0 WHERE $field = $value;";
        $affected = $this->conx->affected_rows;
        $this->conx->close();        
        return $affected;
    }
}