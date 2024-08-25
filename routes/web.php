<?php

use App\Controllers\{ProfileController,HomeController,WorkExperienceController,ProjectController};

return [
    "/"                         => [HomeController::class,"index"],
    "/work-experiences"         => [WorkExperienceController::class,"index"],
    "/projects"                 => [ProjectController::class,"index"],
    "/projects/(\d+)"           => [ProjectController::class,"show"]
];

?>