<?php


namespace Controllers;


abstract class Controller
{


    public $post = [];
    public $get = [];

    public function get(string $param): string
    {
        return $this->get[$param];
    }

    public function post(string $param): string
    {
        return $this->post[$param];
    }

    public function __construct()
    {
        if (isset($_POST)) {
            $this->post = $_POST;
        }
        if (isset($_GET)) {
            $this->get = $_GET;
        }
    }

    public function view(string $path, array $params = null):void
    {
        if (isset($params)) {
            extract($params);
        }
        include $_SERVER['DOCUMENT_ROOT'] . $path;
    }

    public function redirect(string $url):void
    {
        header("Location: /".$url);
    }
    
    public function redirectLast():void
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


}