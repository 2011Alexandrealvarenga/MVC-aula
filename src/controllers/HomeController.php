<?php
namespace src\controllers;

use \core\Controller;

class HomeController extends Controller {

    public function index() {
        $nome = 'ale';
        $post = [
            ['pagina' => 'conteudo da pagina 1'],
            ['pagina' => 'conteudo da pagina 2'],
            ['pagina' => 'conteudo da pagina 3'],
            ['pagina' => 'conteudo da pagina 4'],
            ['pagina' => 'conteudo da pagina 5']

        ];
        $this->render('home', [
            'nome' => $nome,
            'post' => $post
        ]
    );

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