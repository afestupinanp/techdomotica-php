<?
require_once "../model/Usuario.php";
class UsuarioController {

    public function __construct() {
        if(isset($_GET["methodname"])) {
            $funcname = $_GET["methodname"];
            if(method_exists($this, $funcname)) {
                $this->$funcname();
            }
        }
        else {
            $this->render("index", "index.php");   
        }
    }

    public function index() {
        $this->render("index", "index.php");
    }

    public function download() {
        $this->render("download", "index.php");
    }

    public function about() {
        $this->render("about", "index.php");
    }

    public function thanks() {
        $this->render("thanks", "index.php");
    }

    public function usermanual() {
        $this->render("manual", "index.php");
    }

    public function login($msgtype = 0) {
        $_GET["msgtype"] = $msgtype;
        $this->render("login", "index.php");
    }

    public function gestionUsers($resp = false) {
        if(isset($_SESSION["user"])) {
            if($resp) {
                $_GET["message"] = 1;
                $this->render("users", "index.php");
            }
            else $this->render("users", "index.php");
        }
        else {
            $this->login();
        }
    }

    public function render($folder, $view) {
        require_once "../views/$folder/$view";
    }

    public function validateMe() {
        if($_POST) {
            $retorno = Usuario::validate($_POST["user"], $_POST["pwd"]);
            if($retorno == null) {
                $this->login(1);
            }
            else {
                $this->index();
            }
        }
    }

    public function delog() {
        session_unset();
        $this->index();
    }

    public function deleto() {
        if($_SESSION["user"]) {
            if($_GET) {
                $response = Usuario::erase($_GET["id"]);
                $this->gestionUsers($response);
            }
        }
    }

}
if(session_status() == PHP_SESSION_NONE) session_start();
new UsuarioController();