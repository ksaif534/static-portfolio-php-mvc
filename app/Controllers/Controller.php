<?php

namespace App\Controllers;

class Controller{

    public function __construct() {
        
    }

    public function view(string $view, array $data = []) {
        extract($data);
        require dirname(__DIR__,2).'/views/'.$view.'.php';
    }
}

?>