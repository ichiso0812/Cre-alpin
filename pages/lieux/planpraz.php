<!DOCTYPE html>
<html lang="fr">
<head>
    <meta desc="">
    <title>Cre'alpin</title>
    <!--META, CSS AND DATABASE CON-->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/head.php';?>
    <link rel="stylesheet" href="\Cre-alpin\assets\css\main.css">
    <link rel="stylesheet" href="\Cre-alpin\assets\css\lieux.css">
</head>
    <body>
        <?php include $_SERVER["DOCUMENT_ROOT"] .'/Cre-alpin/includes/header.php';?>
        <header>
            pictos svg
        </header>
        <div class="container-fluid">
            <h1>Planpraz</h1>
            <!--Encart météo-->
            <div class="meteo">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item">Temps</li>
                    <li class="list-group-item">Humidité</li>
                    <li class="list-group-item">Température</li>
                </ul>
            </div>
            <!-- MENU-->
            <div class="menu">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Active</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
            <!--Contenu--> 
            <!--Gestes malin-->
            <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title">Le geste mallin</h5>
                    <p class="card-text">Attention de ne pas abîmer le sol et la végétation qui bordent les sentiers avec vos bâtons.</p>
                </div> 
            </div>
            <!--Introduction-->
            <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title">Introduction</h5>
                    <p class="card-text">Planpraz est un plateau situé à environ 2 000 m d'altitude sur un replat des aiguilles Rouges qui constituent le versant ouest de la vallée de Chamonix.
                    Il est relié à Chamonix par l'intermédiaire d'une télécabine.</p>
                    <ul>
                        <li><b>Altitude :</b> 2 000 m</li>
                        <li><b>Proéminence :</b> 40 m</li>
                        <li><b>Dénivelé :</b> 1 000 m</li>
                        <li><b>Massif :</b> Aiguilles rouges (Alpes)</li>
                        <li><b>Départmeent :</b> Haute-Savoie</li>
                        <li><b>Coordonnées :</b> 2 000 m</li>
                        <li><b>Accès :</b> Télécabine</li>
                    </ul>
                </div> 
            </div>
            <!--Image-->
            <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
                <div class="card-body">
                    <img src="" alt="">
                </div>
            </div>
            <!--Description-->
            <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
                <div class="card-body">
                    <h5 class="card-title">Description</h5>
                    <p class="card-text">Planpraz est relié à Chamonix par l'intermédiaire d'une télécabine.</p>
                    <ul>
                        <li><b>1920 :</b> Ouverture de la télécabine, porté par des pylônes en béton.</li>
                        <li><b>197 :</b> Reconversion en télécabine en conservant les pylônes d'origine.</li>
                        <li><b>2008 :</b> Installation renouvelée. Le tronçon Chamonix-Planpraz est rouvert le 20 décembre 2008. Un second tronçon, toujours équipé d'un 
                        téléphérique, relie Planpraz au sommet du Brévent et constitue le téléphérique du Brévent.</li>
                        <li><b>2012 :</b> Les anciens pylones en béton armé du téléphérique d'origine de Planpraz ont été démontés.</li>
                    </ul>
                </div> 
            </div>
            <!-- Faune et flore -->
            <!-- Flore// gentiane -->
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="\Cre-alpin\assets\imgs\pages\planpraz\gentiane.jpg" class="card-img" alt="Image d'une fleur bleu qui s'appelle Gentiane">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Gentiane</h5>
                            <p class="card-text">Genre : Tulipe</p>
                            <p class="card-text">Famille : Gentianaceae</p>
                            <a class="" href="#" style="bg-white rounded">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Faune// chamoix -->
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="\Cre-alpin\assets\imgs\pages\planpraz\chamois.jpg" class="card-img" alt="Image d'un chamois sur assis sur un rocher">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Chamois</h5>
                            <p class="card-text">Genre : Rupicapra</p>
                            <p class="card-text">Famille : Bovidae</p>
                            <a class="" href="#" style="bg-white rounded">En savoir plus</a>
                        </div>
                    </div>
                </div>
            </div>








            <!-- A proximité -->







        

        <?php include $_SERVER["DOCUMENT_ROOT"] .'/Cre-alpin/includes/footer.php';?>
        <?php include $_SERVER["DOCUMENT_ROOT"] .'/Cre-alpin/includes/scripts.php';?>
    </body>
</html>