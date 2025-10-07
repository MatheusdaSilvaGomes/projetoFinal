<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>República lanches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./css/default.css" rel="stylesheet" />
    <style>
        .custom-carousel-thumbnails .col-4 { padding: 5px; text-align: center; }
        .thumbnail-btn { border: 3px solid transparent; padding: 0; background: none; cursor: pointer; width: 100%; display: block; opacity: 0.8; transition: all 0.2s ease-in-out; height: 100px !important; }
        .thumbnail-btn.active, .thumbnail-btn:hover { border-color: #ffc107; opacity: 1; }
        .thumbnail-btn img { display: block; width: 100%; height: 100% !important; object-fit: cover; border-radius: 5px; }
        .thumbnail-caption { font-size: 0.9em; font-weight: bold; color: #333; margin-top: 5px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="public/img/download-removebg-preview (5).png" alt="Logo República Lanches" width="120" height="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain"
                aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarMain">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home Page</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="menuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Cardápio</a>
                        <ul class="dropdown-menu" aria-labelledby="menuLink">
                            <li><a class="dropdown-item" href="#">Hamburguer</a></li>
                            <li><a class="dropdown-item" href="#">Hot Dog</a></li>
                            <li><a class="dropdown-item" href="#">Batatas Recheadas</a></li>
                            <li><a class="dropdown-item" href="#">Petiscos</a></li>
                            <li><a class="dropdown-item" href="#">Bebidas</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>