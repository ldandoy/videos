<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/background-slide.png" alt="video PHP 1" />
            <div class="container">
                <div class="carousel-caption text-left">
                    <div class="row">
                        <div class="col-md-8">
                            <h1>Nouvelle Formation</h1>
                            <h5>PHP</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p><a href="formation.html" class="btn btn-php btn-sm">Suivre la formation</a></p>
                        </div>
                        <div class="col-md-4">
                            <a href="video.html"><img src="img/image-video-php.png" alt="video PHP 1" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/background-slide.png" alt="video PHP 1" />
            <div class="container">
                <div class="carousel-caption text-left">
                    <div class="row">
                        <div class="col-md-8">
                            <h1>Nouvelle Article</h1>
                            <h5>Titre de l'article</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <p><a href="article.html" class="btn btn-warning btn-sm">Lire la suite</a></p>
                        </div>
                        <div class="col-md-4">
                            <img src="img/image-article.png" alt="video PHP 1" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/background-slide.png" alt="video PHP 1" />
            <div class="container">
                <div class="carousel-caption text-left">
                    <div class="row">
                        <div class="col-md-8">
                            <h1>Nouvelle vidéo</h1>
                            <h5>Les variables</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <p><a href="video.html" class="btn btn-php btn-sm">Lire la suite</a></p>
                        </div>
                        <div class="col-md-4">
                            <img src="img/image-video-php.png" alt="video PHP 1" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="float-left">Les dernières formations</h2>
            <div class="float-right">
                <a href="formations.php" class="btn btn-sm btn-light">Toutes les formations</a>
            </div>
            <div class="float-none"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-video-php.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Introduction</h5>
                    <div class="d-flex justify-content-between align-items-center">  
                        <div class="btn-group">
                            <a href="formation.php" class="btn btn-sm btn-warning">Suivre</a>
                        </div>
                        <small class="text-muted">10 vidéos</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-video-php.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Introduction</h5>
                    <div class="d-flex justify-content-between align-items-center">  
                        <div class="btn-group">
                            <a href="formation.php" class="btn btn-sm btn-warning">Suivre</a>
                        </div>
                        <small class="text-muted">10 vidéos</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-video-php.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Introduction</h5>
                    <div class="d-flex justify-content-between align-items-center">  
                        <div class="btn-group">
                            <a href="formation.php" class="btn btn-sm btn-warning">Suivre</a>
                        </div>
                        <small class="text-muted">10 vidéos</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <h2 class="float-left">Les dernières vidéos</h2>
            <div class="float-right">
                <a href="videos.php" class="btn btn-sm btn-light">Toutes les formations</a>
            </div>
            <div class="float-none"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-video-php.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Introduction</h5>
                    <div class="d-flex justify-content-between align-items-center">  
                        <div class="btn-group">
                            <a href="video.php" class="btn btn-sm btn-primary txt-white"><i class="fa fa-eye"></i></a>
                            <button type="button" class="btn btn-sm btn-success txt-white"><i class="fa fa-thumbs-up"></i></button>
                            <button type="button" class="btn btn-sm btn-warning txt-white"><i class="fa fa-star-o"></i></button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-video-php.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Introduction</h5>
                    <div class="d-flex justify-content-between align-items-center">  
                        <div class="btn-group">
                            <a href="video.php" class="btn btn-sm btn-primary txt-white"><i class="fa fa-eye"></i></a>
                            <button type="button" class="btn btn-sm btn-success txt-white"><i class="fa fa-thumbs-up"></i></button>
                            <button type="button" class="btn btn-sm btn-warning txt-white"><i class="fa fa-star-o"></i></button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-video-php.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Introduction</h5>
                    <div class="d-flex justify-content-between align-items-center">  
                        <div class="btn-group">
                            <a href="video.php" class="btn btn-sm btn-primary txt-white"><i class="fa fa-eye"></i></a>
                            <button type="button" class="btn btn-sm btn-success txt-white"><i class="fa fa-thumbs-up"></i></button>
                            <button type="button" class="btn btn-sm btn-warning txt-white"><i class="fa fa-star-o"></i></button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-video-php.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Introduction</h5>
                    <div class="d-flex justify-content-between align-items-center">  
                        <div class="btn-group">
                            <a href="video.php" class="btn btn-sm btn-primary txt-white"><i class="fa fa-eye"></i></a>
                            <button type="button" class="btn btn-sm btn-success txt-white"><i class="fa fa-thumbs-up"></i></button>
                            <button type="button" class="btn btn-sm btn-warning txt-white"><i class="fa fa-star-o"></i></button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-video-php.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Introduction</h5>
                    <div class="d-flex justify-content-between align-items-center">  
                        <div class="btn-group">
                            <a href="video.php" class="btn btn-sm btn-primary txt-white"><i class="fa fa-eye"></i></a>
                            <button type="button" class="btn btn-sm btn-success txt-white"><i class="fa fa-thumbs-up"></i></button>
                            <button type="button" class="btn btn-sm btn-warning txt-white"><i class="fa fa-star-o"></i></button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-video-php.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Introduction</h5>
                    <div class="d-flex justify-content-between align-items-center">  
                        <div class="btn-group">
                            <a href="video.php" class="btn btn-sm btn-primary txt-white"><i class="fa fa-eye"></i></a>
                            <button type="button" class="btn btn-sm btn-success txt-white"><i class="fa fa-thumbs-up"></i></button>
                            <button type="button" class="btn btn-sm btn-warning txt-white"><i class="fa fa-star-o"></i></button>
                        </div>
                        <small class="text-muted">9 mins</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-md-12">
            <h2 class="float-left">Les dernières articles</h2>
            <div class="float-right">
                <a href="blog.php" class="btn btn-sm btn-light">Tous les articles</a>
            </div>
            <div class="float-none"></div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-article.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Article 1</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="article.php" class="btn btn-sm btn-success txt-white"><i class="fa fa-eye"></i></a>
                            <button type="button" class="btn btn-sm btn-info txt-white"><i class="fa fa-thumbs-up"></i></button>
                        </div>
                        <small class="text-muted">2 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-article.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Article 1</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="article.php" class="btn btn-sm btn-success txt-white"><i class="fa fa-eye"></i></a>
                            <button type="button" class="btn btn-sm btn-info txt-white"><i class="fa fa-thumbs-up"></i></button>
                        </div>
                        <small class="text-muted">2 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm">
                <img src="img/image-article.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Article 1</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="article.php" class="btn btn-sm btn-success txt-white"><i class="fa fa-eye"></i></a>
                            <button type="button" class="btn btn-sm btn-info txt-white"><i class="fa fa-thumbs-up"></i></button>
                        </div>
                        <small class="text-muted">2 mins</small>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-4 shadow-sm txt-white">
                <img src="img/image-article.png" alt="video PHP 1" />
                <div class="card-body">
                    <h5 class="card-title text-center">Article 1</h5>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="article.php" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                            <button type="button" class="btn btn-sm btn-info"><i class="fa fa-thumbs-up"></i></button>
                        </div>
                        <small class="text-muted">2 mins</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>