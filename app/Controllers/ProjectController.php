<?php
namespace App\Controllers;
use App\Traits\GetProjects;

class ProjectController extends Controller{
    use GetProjects;

    public function index(){
        $overview   = $this->getOverview();
        $filepath   = $this->getFilePath();
        $jsonData   = $this->projects($filepath);
        return view('projects',[
            'overview'  => $overview,
            'jsonData'  => $jsonData
        ]);
    }

    public function show($id){
        $overview       = $this->getOverview();
        $filepath       = $this->getFilePath();
        $jsonData       = $this->projects($filepath);
        $data           = json_decode($jsonData, true);
        $projectDetails = null;   
        foreach ($data['projects'] as $item) {
            if ($item['id'] == $id) {
                $projectDetails = $item;
            }
        }
        return view("project-details",[
            'overview'          => $overview,
            'projectDetails'    => $projectDetails
        ]);
    }
}

?>