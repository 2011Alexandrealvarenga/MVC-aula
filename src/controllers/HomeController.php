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

    public function sobreP($args) {
        print_r($args);
    }

}