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
            <!-- Encart à météo à définir ici -->
            <!-- Fin Encart météo -->
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
                <ul class="nav nav-fill">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Histoire</a>
                        <!--Dégradé-->
                        <div class="bandeau">
                            <div class="bandeau_bleu"></div>
                            <div class="bandeau_turquoise"></div>
                            <div class="bandeau_jaune"></div>
                            <div class="bandeau_vert"></div>
                        </div>
                        <!--Fin du dégradé-->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Photos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Vidéos</a>
                    </li>
                </ul>
            </div>
            <!--Contenu--> 
            <!--Gestes malin-->
            <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
                <div class="col-md-4">
                    <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 22">
                        <title>geste_malin</title>
                        <path d="M12,5.18,20.63,21H3.37ZM12,1,0,23H24Zm-1,9h2v6H11Zm1,9.75a1.25,1.25,0,1,1,1.25-1.25A1.25,1.25,0,0,1,12,19.75Z" transform="translate(0 -1)"/>
                    </svg>

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Le geste malin</h5>
                        <p class="card-text">Attention de ne pas abîmer le sol et la végétation qui bordent les sentiers avec vos bâtons.</p>
                    </div> 
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
                    <img src="\Cre-alpin\assets\imgs\pages\planpraz\planpraz.jpg" style="bg-white rounded" alt="Image du plateau de Planpraz">
                </div>
            </div>
            <!--Description-->
            <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
                <div class="card-body">
                    <h3 class="card-title">Description</h3>
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
            <!--Flore-->
            <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
                <div class="card-body">
                    <h3 class="card-title">Faune et Flore</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <img src="\Cre-alpin\assets\imgs\pages\planpraz\chamois.jpg" class="img-fluid card-img" alt="Image d'un chamois sur assis sur un rocher">
                        </div>
                        <div class="col-6">
                            <div class="card-body">
                            <h6 class="card-title">Le Brévent</h6>
                            <span class="card-text-mueted">Chamonix-Mont-Blanc</span>
                            <a class="" href="#">En savoir plus</a>
                        </div>
                    </div>
                </div>
                <!--Faune-->
                <div class="row">
                    <div class="col-6">
                        <img src="\Cre-alpin\assets\imgs\pages\planpraz\chamois.jpg" class="img-fluid card-img" alt="Image d'un chamois sur assis sur un rocher">
                    </div>
                    <div class="col-6">
                        <div class="card-body">
                        <h6 class="card-title">Le Brévent</h6>
                        <span class="card-text-mueted">Chamonix-Mont-Blanc</span>
                        <a class="" href="#">En savoir plus</a>
                    </div>
                </div>
            </div>
            
            <!-- A proximité -->
            <h3 class="card-title">Faune et Flore</h3>
            <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
                <div class="card-body">
                    <img src="\Cre-alpin\assets\imgs\pages\planpraz\planpraz.jpg" style="bg-white rounded" alt="Image du plateau de Planpraz">
                </div>
            </div>

        
            

            

        

        <?php include $_SERVER["DOCUMENT_ROOT"] .'/Cre-alpin/includes/footer.php';?>
        <?php include $_SERVER["DOCUMENT_ROOT"] .'/Cre-alpin/includes/scripts.php';?>
    </body>
</html>