<?php
require_once "../db/db.php";
class Usuario {
    
    private $nombre1 = "",
                   $nombre2 = "",
                   $apellido1 = "",
                   $apellido2 = "",
                   $correo = "",
                   $documento = "",
                   $Contraseña = "",
                   $id = "";
    
    public function __construct($id_usu, $name1, $name2, $ape1, $ape2, $corre, $doc, $contra) {
        $this->nombre1 = $name1;
        $this->nombre2 = $name2;
        $this->apellido1 = $ape1;
        $this->apellido2 = $ape2;
        $this->correo = $corre;
        $this->documento = $doc;
        $this->Contraseña = $contra;
        $this->id = $id_usu;
    }

    public function getNombre2() {
        return $this->nombre2;
    }

    public function setNombre2($nombre2) {
        $this->nombre2 = $nombre2;
    }

    public function getApellido1() {
        return $this->apellido1;
    }

    public function setApellido1($apellido1) {
        $this->apellido1 = $apellido1;
    }

    public function getApellido2() {
        return $this->apellido2;
    }

    public function setApellido2($apellido2) {
        $this->apellido2 = $apellido2;
    }

    public function getCorreo() {
        return $this->correo;
    }

    public function setCorreo($correo) {
        $this->correo = $correo;
    }
    
    public function getFullName() {
        return $this->nombre1 + " " +  $this->nombre2 + " " + $this->apellido1 + " " + $this->apellido2;
    }

    public function getDocumento() {
        return $this->documento;
    }

    public function setDocumento($documento) {
        $this->documento = $documento;
    }

    public function getNombre1() {
        return $this->nombre1;
    }

    public function setNombre1($nombre1) {
        $this->nombre1 = $nombre1;
    }

    public function getContraseña() {
        return $this->Contraseña;
    }

    public function setContraseña($Contraseña) {
        $this->Contraseña = $Contraseña;
    }
    
    public function getID() {
        return $this->id;
    }
    
    public static function validate($nom, $contra) {
        $conx = new DB();
        $contra = hash("sha256", $contra);
        $resultset = $conx->select("SELECT * FROM usuario INNER JOIN rol ON rol.id_rol = usuario.id_rol WHERE correo = '$nom' OR dni = $nom AND password = '$contra' LIMIT 1;");
        $usuario = null;
        if($resultset != null) {
            if($resultset->num_rows == 1) {
                while($result = $resultset->fetch_assoc()) {
                    $usuario = new Usuario($result["id_usuario"], $result["nom1"], $result["nom2"], $result["apellido1"], $result["apellido2"], $result["correo"], $result["dni"], $result["password"]);
                    $_SESSION["user"] = $usuario;
                }
            }
        }    
        return $usuario;    
    }

    public static function getAll($all) {
        $conx = new DB();
        $resultset = null;
        if($all) {
            $resultset = $conx->select("SELECT * FROM usuario INNER JOIN rol ON rol.id_rol = usuario.id_rol;");
        }
        else $resultset = $conx->select("SELECT * FROM usuario INNER JOIN rol ON rol.id_rol = usuario.id_rol WHERE habilitado = 1;");
        return $resultset;
    }
    public static function getFromID($id) {
        $conx = new DB();
        $resultset = $conx->select("SELECT * FROM usuario INNER JOIN rol ON rol.id_rol = usuario.id_rol WHERE id_usuario = $id AND habilitado = 1;");
        return $resultset;
    }
    public function insert() {
        $conx = new DB();
        $return = $conx->execute("INSERT INTO usuario VALUES(null, {$this->id_rol}, '{$this->correo}', '{$this->contra}', '{$this->nomb1}', '{$this->nomb2}', '{$this->apellido1}', '{$this->apellido2}', {$this->cedula});");
        return $return;
    }
    public function edit() {
        $conx = new DB();
        $return = $conx->execute("UPDATE usuario SET id_rol = {$this->id_rol}, correo = '{$this->correo}', password = '{$this->contra}', nom1 = '{$this->nomb1}', nom2 = '{$this->nomb2}', apellido1 = '{$this->apellido1}', apellido2 = '{$this->apellido2}', dni = {$this->cedula} WHERE id_usuario = {$this->id_usuario};");
        return $return;
    }
    
    public static function erase($id) {
        $conx = new DB();
        $response = $conx->deletee("id_usuario", "usuario", $id);
        return $response;
    }
    
    
}