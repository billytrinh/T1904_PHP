<?php


class Controller
{
    public function invoke(){
        if($_GET['route']== ""){
            $this->home();
        }elseif($_GET['route']== 'listing'){
            $this->listing();
        }elseif($_GET['route']== 'login'){
            $this->login();
        }else{
            echo "404 Not Found";
        }
    }

    public function home(){
        include_once("views/home.php");
    }

    public function listing(){
        include_once ("views/demo_database.php");
    }

    public function login(){
        include_once("views/login.php");
    }
}

$controller = new Controller();
$controller->invoke();