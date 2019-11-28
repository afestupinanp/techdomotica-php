<?php
require_once "../db/db.php";
class Componente {
    
    private $deviceID = 0;
    
    private $nombreComponente = "";
    private $marcaComponente = "";
    
    private $usoComponente = 100.0;
    private $gastoEnergetico = 0.0;
    
    private $componenteEncendido = false;
    
    public function __construct($nombre, $marca, $uso) {
        $this->nombreComponente = $nombre;
        $this->marcaComponente = $marca;
        $this->usoComponente = $uso;
    }
    
    public function getNombreComponente() {
        return $this->nombreComponente;
    }

    public function setNombreComponente($nombreComponente) {
        $this->nombreComponente = $nombreComponente;
    }

    public function getMarcaComponente() {
        return $this->marcaComponente;
    }

    public function setMarcaComponente($marcaComponente) {
        $this->marcaComponente = $marcaComponente;
    }

    public function getUsoComponente() {
        return $this->usoComponente;
    }

    public function setUsoComponente($usoComponente) {
        $this->usoComponente = $usoComponente;
    }
    
    public function decrementarUsoComponente() {
        if($this->usoComponente > 0) $this->usoComponente--;
    }
    
    public function setGastoEnergetico($gastoEnergetico) {
        $this->gastoEnergetico = gastoEnergetico;
    }
    
    public function getGastoEnergetico() {
        return $this->gastoEnergetico;
    }

    public function getComponenteFullName() {
        return $this->marcaComponente + " " + $this->nombreComponente;
    }
    
    public function toggleComponenteEncendido($comp = false) {
        $this->componenteEncendido = $comp;
    }
    
    public function getComponenteEncendidoState() {
        return $this->componenteEncendido;
    }
    
    public function setDeviceID($id) {
        $this->deviceID = $id;
    }
    
    public function getDeviceID() {
        return $this->deviceID;
    }


    public static function getAll($all) {
        $conx = new DB();
        $resultset = null;
        if($all) {
            $resultset = $conx->select("SELECT * FROM componente;");
        }
        else $resultset = $conx->select("SELECT * FROM componente WHERE habilitado = 1;");
        return $resultset;
    }
    public static function getFromID($id) {
        $conx = new DB();
        $resultset = $conx->select("SELECT * FROM componente id_componente = $id AND habilitado = 1;");
        return $resultset;
    }
    public function insert() {
        $conx = new DB();
        //INSERT INTO `componente`(`id_componente`, `id_usuario`, `nom_componente`, `marca`, `uso`, `gasto_energetico`, `componente_on`, `habilitado`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8])
        $return = $conx->execute("INSERT INTO componente VALUES(null, 1, '{$this->nombreComponente}', '{$this->marcaComponente}', '{$this->usoComponente}', '{$this->gastoEnergetico}', '{$this->componenteEncendido}', 1;");
        return $return;
    }
    public function edit() {
        $conx = new DB();
        $return = $conx->execute("UPDATE componente SET nom_componente = '{$this->nombreComponente}', marca = '{$this->marcaComponente}', uso = {$this->usoComponente}, gasto_energetico = '{$this->gastoEnergetico}', componente_on = {$this->componenteEncendido} WHERE id_componente = {$this->deviceID};");
        return $return;
    }
    
    public static function erase($id) {
        $conx = new DB();
        $response = $conx->deletee("id_componente", "componente", $id);
        return $response;
    }
}