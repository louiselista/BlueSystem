<?php
class View {
    public $model, $title, $body, $view, $lang, $session, $active, 
            $section_title, $routing, $collapsed, $header, $controller, $root;
    private $errors;
    function __construct() {
        $this->root = "";
        $this->model = new stdClass();
        $this->title = "";
        $this->lang = "";
        $this->session = decbin($_SESSION["permisos"]);
        $this->active = str_repeat("0", strlen($this->session));
        $this->section_title = "";
        $this->routing = null;
        $this->collapsed = false;
        $this->header = "";
        $this->controller = "";
        $this->errors = array(405,500);
    }
    function set_view($obj, $view = null, $model = null){
        $this->view = $view;
        if (isset($model)){
            $this->model->$obj = $model;            
        }
        $this->body = new stdClass();
    }
    function set_model($obj, $model = null){
        if (isset($model)){
            $this->model->$obj = $model;
            $this->controller = $obj;
        }
    }
    function load_elements($uri){
        $flag   = true;
        
        $slashes = explode('/', Settings::WEB_HOST_URL);
        if ($slashes[0] == "http:" || $slashes[0] == "https:"){
            $slashes = count($slashes) - 3;
        }
        else {
            $slashes = count($slashes);
        }
        if(count($uri)>$slashes+3) $flag = false;  
        else {            
            $lang = isset($uri[$slashes]) && $uri[$slashes] == "en" ? "en" : "";
            $slashes += isset($uri[$slashes]) && $uri[$slashes] == "en" ? 1 : 0;      
            $this->root = Settings::WEB_HOST_URL.($lang != "" ? $lang."/" : "");
            $this->lang = $lang == "" ? "es" : $lang;
            require('./resources/dictionaries/lang.php'); 
            
            $controller = isset($uri[$slashes]) ? $uri[$slashes] : "";
            if ($controller == "") $controller = "principal";
            if (!file_exists("./controllers/$controller.php")) { 
                return  (in_array($controller, $this->errors)) ? $controller : false;
            }
            else {
                include_once("./controllers/$controller.php");
                $controller = ucfirst($controller);
                $controller_class = new $controller();
                $action = isset($uri[$slashes+1]) ? $uri[$slashes+1] : false;
                
                $explode = explode('?', $action);
                $action = $explode[0];
                
                
                
                $id = null;
                 
                if ($action == false ){
                    $action = Settings::MAIN_ACTION;
                }
                else {                   
                    if (method_exists($controller_class, $action)){
                        $id = isset($uri[$slashes+2]) ? $uri[$slashes+2] : false;
                        
                        if ($id != false) {
                            $explode = explode("?", $id);
                            if (isset($explode)){
                                if (isset($explode[1]))
                                    parse_str ($explode[1], $query); 
                                $id = isset($query)? array_merge(array("action" => $explode[0]), $query): $explode[0];
                                
                            }
                        }
                    }
                    else {                        
                        $id = $action;
                        $action = Settings::MAIN_ACTION;
                    }            
                }  
                if (!method_exists($controller_class, $action)){
                    return false;
                }                
                $response = $controller_class->$action($id);
                if (is_a($response, "View")){
                    $this->set_model($controller, $response->model);
                    $include = $response->view == null ? "./views/$action.php": "./views/$response->view.php";  

                    include($include);
                    $layout = null;
                    while(isset($this->layout) && $this->layout != $layout) {
                        $layout = $this->layout;
                        if(isset($this->layout)){
                            include($this->layout);
                        }                    
                    } 
                    return true;
                }
                else {
                    return $response;
                }
            }
        }  
    }
    function load_section($path){
        $path = Settings::HOST_URL.$path;
        $uri  = explode('/', $path);
        $this->load_elements($uri);
    }
}
function View($view = null, $model = null){
    $obj = debug_backtrace();
    $obj = $obj[1]["class"];
    $aux = new View(null);
    $aux->set_view($obj, $view, $model);
    return $aux;
}
