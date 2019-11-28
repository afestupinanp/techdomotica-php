<?
require_once "../model/Dispositivo.php";
class DeviceController {

    public function __construct() {
        if(isset($_SESSION["user"])) {
            if(isset($_GET["methodname"])) {
                $funcname = $_GET["methodname"];
                if(method_exists($this, $funcname)) {
                    $this->$funcname();
                }
            }
            else {
                $this->render("devices", "index.php");   
            }
        }
        else {
            require_once "UsuarioController.php";
            $dong = new UsuarioController();
            $dong->login();
        }
    }


    public function gestionDevices($resp = false) {
        if($resp) {
            $_GET["message"] = 1;
            $this->render("devices", "index.php");
        }
        else $this->render("devices", "index.php");
    }

    public function render($folder, $view) {
        require_once "../views/$folder/$view";
    }

    public function deleto() {
        if($_SESSION["user"]) {
            if($_GET) {
                $response = Componente::erase($_GET["id"]);
                $this->gestionDevices($response);
            }
        }
    }

}
if(session_status() == PHP_SESSION_NONE) session_start();
new DeviceController();