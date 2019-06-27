<?php


namespace Controllers;
class PageController
{
    public function home() {
        require_once('view/home.php');
    }
    public function error() {
        require_once('view/404.php');
    }
}