<?php

class App 
{    
    public function __construct()
    {
        $url = $this->parseUrl();
        var_dump($url);
    }

    public function parseUrl()
    {
        if($_GET['url']) {
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