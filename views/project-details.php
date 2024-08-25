<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Portfolio Site With PHP MVC</title>
    <!-- Fonts and icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- CSS Files -->
    <link rel="stylesheet" href="<?php echo asset('/assets/distribution/css/tabler.css'); ?>">
    <!-- Core JS Jquery File -->
    <script src="<?php echo asset('/assets/jquery/jquery-3.6.0.min.js'); ?>"></script>
</head>
<body>
    <!-- Navbar -->
    <header class="navbar navbar-expand-md navbar-light d-print-none">
        <div class="container-xl">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                <a href="." class="nav-link">
                    <img src="<?php echo asset('/assets/distribution/static/brand-bitbucket.svg') ?>" width="110" height="32" alt="Tabler" class="navbar-brand-image">
                    PortfolioSite
                </a>
            </h1>
            <div class="navbar-nav flex-row order-md-last">
                <div class="nav-item d-none d-md-flex me-3">

                </div>
                <div class="d-none d-md-flex">

                </div>
                <div class="nav-item dropdown">
                    <a href="" class="nav-link d-flex lh-1 text-reset p-0" data-bs-toggle="dropdown" aria-label="Open user menu">
                        <span class="avatar avatar-sm" style="background-image: url(<?php echo asset('/assets/distribution/img/eid-sk.jpeg'); ?>)"></span>
                        <div class="d-none d-xl-block ps-2">
                            <div></div>
                            <div class="mt-1 small text-muted">kamal.saifkamal534@gmail.com</div>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <a href="" title="Profile" class="dropdown-item">Profile</a>
                        <a href="" title="Logout from the account" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="navbar-expand-md">
        <div class="collapse navbar-collapse" id="navbar-menu">
            <div class="navbar navbar-light">
                <div class="container-xl">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <img src="<?php echo asset('/assets/distribution/tabler-icons/home.svg') ?>" alt="Home(User)">
                                </span>
                                <span class="nav-link-title">
                                    Home
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/work-experiences">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <img src="<?php echo asset('/assets/distribution/tabler-icons/briefcase.svg') ?>" alt="Work Experiences">
                                </span>
                                <span class="nav-link-title">
                                    Work Experiences
                                </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/projects">
                                <span class="nav-link-icon d-md-none d-lg-inline-block">
                                    <img src="<?php echo asset('/assets/distribution/tabler-icons/file-analytics.svg') ?>" alt="Projects">
                                </span>
                                <span class="nav-link-title">
                                    Projects
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Body -->
    <div class="page">
        <div class="page-wrapper">
            <!-- Page header -->
            <div class="page-header d-print-none">
				<div class="container-xl">
					<div class="row g-2 align-items-center">
						<div class="col">
							<!-- Page pre-title -->
							<div class="page-pretitle">
								Overview
							</div>
							<h2 class="page-title">
								<?php echo $overview; ?>
							</h2>
						</div>
					</div>
				</div>
			</div>
            <div class="page-body">
                <div class="container-xl mt-4">
                    <div class="row row-cards">
                        <div class="card">
                            <div class="card-header" style="background-image: url(<?php echo asset("/".$projectDetails['image_path']); ?>);background-size: cover; background-position: center;width: 100%;height: 400px">

                            </div>
                            <div class="card-body text-center">
                                <h3 class="card-title"><strong><?php echo $projectDetails['name']; ?></strong></h3>
                                <p><?php echo $projectDetails['description']; ?></p>
                                <?php 
                                    $techSpecs = explode(',',$projectDetails['tech_specs']);
                                ?>
                                <p>
                                    <h3>Technology Specifications:</h3>
                                    <?php 
                                        foreach ($techSpecs as $item) {
                                            ?>
                                            <li class="nav-link"><strong><?php echo $item; ?></strong></li>
                                            <?php
                                        }
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="<?php echo asset('/assets/distribution/js/tabler.js') ?>"></script>
    <script src="<?php echo asset('/assets/distribution/js/demo-theme.js') ?>"></script>
</body>
</html>