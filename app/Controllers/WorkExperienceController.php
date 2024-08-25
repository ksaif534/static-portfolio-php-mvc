<?php

namespace App\Controllers;

class WorkExperienceController extends Controller{

    public function index(){
        $overview   = 'Work Experiences';
        $filepath   = 'work-experience.json';
        $storage    = require dirname(__DIR__,2).'/config/filesystems.php';
        if (file_exists($storage['disks']['custom']['root'].'/'.$filepath)) {
            $jsonData   = file_get_contents($storage['disks']['custom']['root'].'/'.$filepath);
        }else {
            $jsonData   = null;
        }
        return view("work-experience",[
            'overview'  => $overview,
            'jsonData'  => $jsonData
        ]);
    }
}

?>