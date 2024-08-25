<?php

namespace App\Traits;

trait GetProjects{
    public function projects($filepath) : string 
    {
        $storage = require dirname(__DIR__,2).'/config/filesystems.php';
        if (file_exists($storage['disks']['custom']['root'].'/'.$filepath)) {
            $jsonData   = file_get_contents($storage['disks']['custom']['root'].'/'.$filepath);
        }else {
            $jsonData   = null;
        }
        return $jsonData;
    }

    public function getOverview() : string
    {
        return 'Projects';
    }

    public function getFilePath() : string
    {
        return 'projects.json';
    }
}

?>