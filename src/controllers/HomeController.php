<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $this->render('home', ['nome' => 'Bonieky']);
    }

    public function nova() {
        $this->render('nova');
    }
    public function f(){
        $this->render('fotos');
    }
    public function fotos($parametro){
        echo 'unica foto<br>';
        print_r($parametro);
    }

    public function sobreP($args) {
        print_r($args);
    }

}