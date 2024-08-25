<?php

namespace App\Controllers;

class HomeController extends Controller{

    public function index(){
        $overview   = 'Home';
        $filepath   = 'home.json';
        $storage    = require dirname(__DIR__,2).'/config/filesystems.php';
        if (file_exists($storage['disks']['custom']['root'].'/'.$filepath)) {
            $jsonData   = file_get_contents($storage['disks']['custom']['root'].'/'.$filepath);
        }else {
            $jsonData   = null;
        }
        return view("home",[
            'overview'  => $overview,
            'jsonData'  => $jsonData
        ]);
    }
}