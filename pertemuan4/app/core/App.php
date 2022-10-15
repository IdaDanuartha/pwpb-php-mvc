<?php

class App 
{   
    protected $controller = "Home";
    protected $method = "index";
    protected $params = [];

    public function __construct()
    {
        $url = $this->parseUrl();
        $path = realpath($_SERVER["DOCUMENT_ROOT"]) . "/pwpb-project/pertemuan4/app/controller/$url[0].php";
        // $path = "../controller/$url[0]";

        if(isset($url[0])) {
            if(file_exists($path)) {
                $this->controller = $url[0];
                require_once($path);
                unset($url[0]);
            } else {
                require_once($_SERVER["DOCUMENT_ROOT"]) . "/pwpb-project/pertemuan4/app/controller/Home.php";
            }

            $this->controller = new $this->controller;  

            if(method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }

            if(!empty($url)) {
                $this->params = array_values($url);
                call_user_func_array([$this->controller, $this->method], $this->params);
            }
        }
    }

    public function parseUrl()
    {
        if(isset($_GET['url'])) {
            // return $_GET['url'];
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);

            return $url;
        } else {
            return 'home';
        }
    }
}