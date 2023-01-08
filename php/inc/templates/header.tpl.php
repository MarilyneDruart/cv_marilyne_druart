<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Reset CSS -->
        <link rel="stylesheet" href="php/public/css/reset.css">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


        <!-- Bootstrap icons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

        <!-- My CSS -->
        <link rel="stylesheet" href="php/public/css/style.css">

        <!-- favicon -->
        <link rel="shortcut icon" href="php/public/img/favicon.ico" type="image/x-icon">

		<title>CV Marilyne Druart - <?= $pageToDisplay ?></title>
    </head>

    <body>
        <div class="wrapper" id="top">
            <header>
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#top">Marilyne Druart</a>

                             <!-- nav dropdown burger -->
                            <div class="nav-dropdown-burger">
                                <button class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-target="#navbarNav"
                                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="bi bi-list"></i>
                                </button>
                                <ul class="navbar-nav">
                                    <ul class="dropdown-menu dropdown-menu">
                                        <li><a class="dropdown-item" href="#about">A propos de moi</a></li>
                                        <li><a class="dropdown-item" href="#formation">Formation</a></li>
                                        <li><a class="dropdown-item" href="#experience">Experience</a></li>
                                        <li><a class="dropdown-item" href="#realisations">Réalisations</a></li>
                                        <li><a class="dropdown-item" href="#contact">Me contacter</a></li>
                                    </ul>
                                </ul>
                            </div>

                            <!-- large-nav -->
                            <div class="large-nav">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="bi bi-list"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav">
                                        <li class="nav-item">
                                        <a class="nav-link" href="#about">A propos de moi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#formation">Formation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#experience">Experience</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#realisations">Réalisations</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#contact">Me contacter</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                    </div>
                </nav>
            </header>