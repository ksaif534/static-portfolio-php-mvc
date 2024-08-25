<?php

use App\Controllers\{ProfileController,HomeController,WorkExperienceController,ProjectController};

return [
    "/"                         => [HomeController::class,"index"],
    "/work-experiences"         => [WorkExperienceController::class,"index"],
    "/projects"                 => [ProjectController::class,"index"],
    "/projects/(\d+)"           => [ProjectController::class,"show"],
    "/users/profile"            => [ProfileController::class,"index"],
    "/route1"                   => [ProfileController::class,"to_another_route"],
    "/route2"                   => [ProfileController::class,"another_method"]
];

?>