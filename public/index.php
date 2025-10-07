<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>República lanches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="./css/default.css" rel="stylesheet" />
    <style>
        /* Estilos do Carrossel e Miniaturas */
        .custom-carousel-thumbnails .col-4 { 
            padding: 5px;
            text-align: center; 
        }
        .thumbnail-btn {
            border: 3px solid transparent;
            padding: 0;
            background: none;
            cursor: pointer;
            width: 100%;
            display: block;
            opacity: 0.8;
            transition: all 0.2s ease-in-out;
            height: 100px !important; 
        }
        .thumbnail-btn.active,
        .thumbnail-btn:hover {
            border-color: #ffc107;
            opacity: 1;
        }
        .thumbnail-btn img {
            display: block;
            width: 100%;
            height: 100% !important; 
            object-fit: cover; 
            border-radius: 5px;
        }
        .thumbnail-caption {
            font-size: 0.9em;
            font-weight: bold;
            color: #333;
            margin-top: 5px;
        }
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
                        <a class="nav-link dropdown-toggle" href="#secao-hamburgueres" id="menuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">Cardápio</a>
                        <ul class="dropdown-menu" aria-labelledby="menuLink">
                            <li><a class="dropdown-item" href="#secao-hamburgueres">Hamburguer</a></li>
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
    
    <div class="container p-3">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="public/img/chesseburguer.jpg" class="d-block w-100" alt="Cheeseburguer">
                </div>
                <div class="carousel-item">
                    <img src="public/img/hamburguercomcerva.jpg" class="d-block w-100" alt="Hamburguer com cerveja">
                </div>
                <div class="carousel-item">
                    <img src="public/img/xsalada.jpg" class="d-block w-100" alt="X-Salada">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
        <hr class="mt-4 mb-4"> 

        <div class="row custom-carousel-thumbnails">
            <div class="col-4">
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="0" class="active thumbnail-btn" aria-current="true" aria-label="Slide 1">
                    <img class="img-fluid" src="public/img/xsalada.jpg" alt="Miniatura X-Salada">
                </button>
                <div class="thumbnail-caption">X-Salada Bacon</div>
            </div>
            <div class="col-4">
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="1" class="thumbnail-btn" aria-label="Slide 2">
                    <img class="img-fluid" src="public/img/cachorro quente.jpg" alt="Miniatura Hot Dog">
                </button>
                <div class="thumbnail-caption">Hot Dog Supremo</div>
            </div>
            <div class="col-4">
                <button type="button" data-bs-target="#carouselExampleControls" data-bs-slide-to="2" class="thumbnail-btn" aria-label="Slide 3">
                    <img class="img-fluid" src="public/img/batata frita.jpg" alt="Miniatura Batata Frita">
                </button>
                <div class="thumbnail-caption">Batata com Cheddar</div>
            </div>
        </div>
    </div>
    
    <div id="secao-hamburgueres" class="container mt-5">
        <h2 class="mb-4 text-center text-danger">🍔 Hamburgueres mais vendidos</h2>
        <div class="row">
            
            <div class="col-md-6 mb-4">
                <div class="card bg-light">
                    <div class="card-header bg-danger text-light">
                        X- Barbecue burguer
                    </div>
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-sm-4 text-center">
                                <img src="public/img/hamburguercomcerva.jpg" alt="Hamburger Especial" height="200px"> 
                            </div>
                            <div class="col-sm-8 card-text d-flex align-items-center">
                                2 hambúrgueres de carne bovina, salada fresca, molho barbecue, bacon e queijo muçarela.
                            </div>
                        </div>
                        <hr class="mt-3 mb-2">
                        <div class="text-end">
                            <a href="#" class="btn btn-danger">Comprar R$28,00</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6 mb-4">
                <div class="card bg-light">
                    <div class="card-header bg-danger text-light">
                        X- República
                    </div>
                    <div class="card-body">
                        <div class="row g-0">
                            <div class="col-sm-4 text-center">
                                <img src="public/img/chesseburguer.jpg" alt="Hamburger da Casa" height="200px">
                            </div>
                            <div class="col-sm-8 card-text d-flex align-items-center">
                                2 hambúrgueres, salada, molho barbecue, bacon,frango, queijo cheddar cremoso.
                            </div>
                        </div>
                        <hr class="mt-3 mb-2">
                        <div class="text-end">
                            <a href="#" class="btn btn-danger">Comprar R$32,50</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <footer class="text-warning bg-dark mt-5 p-3">
        <div class="container">
            <div class="row">
                <div class="col" style="text-align: center;">
                    <hr class="text-warning">
                    <img class="mb-2" src="public/img/download-removebg-preview (5).png" alt="Logo República" width="64" height="64">
                    <span class="display-5 d-block">República Lanches</span>
                    <small class="d-block mb-1">&copy; 2025</small>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>