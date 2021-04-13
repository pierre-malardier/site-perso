<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Pierre Malardier, La plateforme_, dév, web,">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Pierre Malardier Dév en devenir à la Plateforme_ à la Coding School, l’école de code, ce sont 2 années dédiées à la formation aux métiers du web et du mobile, deux titres reconnus par l’état et un modèle pédagogique unique qui s’adapte aux besoins de chacun." />
    <title>Pierre Malardier</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
    <link rel="icon" type="image" href="./ressource/img/icon.png" alt="icon pm" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarSupportedContent">
                        <span class="sr-only"><img src="./ressource/img/menu.png" alt="burger menu"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a href="#" class="navbar-brand"><img src="./ressource/img/logo_pierre.png" alt="logo Pierre Malardier"></a>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a href="#myModal" role="button" data-toggle="modal" class="nav-link">Mes Compétences</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#projets">Mes projets</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./ressource/pierre-malardier-cv.pdf">CV</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item-right">
                            <a href="https://www.linkedin.com/in/pierre-malardier-8a4b10124/"><img class="logo-social" src="./ressource/img/linkedin.png" alt="logo linkedin"></a>
                        </li>
                        <li class="nav-item">
                            <a href="https://github.com/pierre-malardier"><img class="logo-social" src="./ressource/img/GitHub.png" alt="logo github"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <main>
        <div class="description">
            <div class="col">
                <p class="col justify-content-center"><img class="img-fluid" src="./ressource/img/moi.png" alt="photo portrait"></p>
                <h1 class="row justify-content-center m-2">Développeur Web Full Stack en devenir !!!</h1>
                <p class="row justify-content-center m-3"><strong>Actuellement en formation à la PLateforme_, je suis à la recherche d'une alternance pour septembre 2021 pour
                        continuer ma deuxième année à la PLateforme_.</strong>
                </p>
            </div>

        </div>

    </main>
    <div class="bs-example">
        <div id="myModal" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Mes Compétences</h5>
                        <a type="button" class="close text-dark" data-dismiss="modal"><i class="bi bi-x-circle-fill"></i></a>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <p class="col"><img src="./ressource/img/html.png" alt="logo hmtl"></p>
                            <p class="col"><img src="./ressource/img/css.png" alt="logo css"></p>
                            <p class="col"><img src="./ressource/img/js.png" alt="logo js"></p>
                        </div>
                        <div class="row">
                            <p class="col"><img src="./ressource/img/php.png" alt="logo php"></p>
                            <p class="col"><img src="./ressource/img/github2.png" alt="logo github"></p>
                            <p class="col"><img src="./ressource/img/bootstrap.png" alt="logo bootstrap"></p>
                        </div>
                        <div class="row">
                            <p class="col"><img src="./ressource/img/materialize.png" alt="logo materialize"></p>
                            <p class="col"><img src="./ressource/img/figma.png" alt="logo figma"></p>
                            <p class="col"><img src="./ressource/img/adobexd.png" alt="logo adobe xd"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <h2 class="d-flex justify-content-center" id="projets">Mes projets</h2>
    <section class="row justify-content-around">
        <div class="col-sm-3  mb-5 card  bg-dark text-light justify-content-center" style="width: 25rem;">
            <img class="rounded" src="./ressource/img/discussion.PNG" alt="projet discussion">
            <div class="card-body">
                <h5 class="card-title">Discussion</h5>
                <p class="card-text">Ce projet est un site sur lequel j'ai crée un module de discussion.</p>
                <a class="btn btn-success text-light" href="./projets/discussion/index.php">Voir le projet</a>
            </div>
        </div>
        <div class="col-sm-3  mb-5 card bg-dark text-light" style="width: 25rem;">
            <img class="rounded" src="./ressource/img/blog.PNG" alt="projet blog">
            <div class="card-body">
                <h5 class="card-title">Blog</h5>
                <p class="card-text">Réalisation d'un blog avec page admin et possibilité d'ajouter effacer ou modifier des articles.</p>
                <a class="btn btn-success text-light" href="./projets/blog/index.php">Voir le projet</a>
            </div>
        </div>
        <div class="col-sm-3  mb-5 card bg-dark text-light" style="width: 25rem;">
            <img class="rounded" src="./ressource/img/memory.PNG" alt="projet memory">
            <div class="card-body ">
                <h5 class="card-title">Memory</h5>
                <p class="card-text">Réalisation du jeu Memory.</p>
                <a class="btn btn-success text-light" href="./projets/memory/index.php">Voir le projet</a>
            </div>
        </div>
    </section>
    <footer class="bg-dark fixed-bottom">
        <p class=" d-flex text-light justify-content-center">© 2021 Copyright : Pierre Malardier </p>
    </footer>
</body>

</html>