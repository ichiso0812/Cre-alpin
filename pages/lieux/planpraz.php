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
            <div class="card-deck mb-3 shadow bg-white rounded">
                <div class="container">
                    <div class="row">
                        <div class="col-2">
                        <svg id="danger" data-name="danger" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 22">
                            <title>geste_malin</title>
                            <path d="M12,5.18,20.63,21H3.37ZM12,1,0,23H24Zm-1,9h2v6H11Zm1,9.75a1.25,1.25,0,1,1,1.25-1.25A1.25,1.25,0,0,1,12,19.75Z" transform="translate(0 -1)"/>
                        </svg>
                        </div>
                        <div class="col-10">
                            <div class="card-body">
                                <h3>Le geste malin</h3>
                                <p class="card-text">Attention de ne pas abîmer le sol et la végétation qui bordent les sentiers avec vos bâtons.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Bouton gestes suivant-->
            
            <!--Introduction-->
            <div class="card-deck mb-3 shadow bg-white rounded">
                <div class="card-body">
                    <h3>Introduction</h3>
                    <p class="card-text">Planpraz est un plateau situé à environ 2 000 m d'altitude sur un replat des aiguilles Rouges qui constituent le versant ouest de la vallée de Chamonix.
                    Il est relié à Chamonix par l'intermédiaire d'une télécabine.</p>
                    <ul class="liste-date">
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
            <div class="card-deck mb-3 shadow bg-white rounded">
                <div class="card-body">
                    <img src="\Cre-alpin\assets\imgs\pages\planpraz\planpraz.jpg" style="bg-white rounded" class="img-fluid card-img" alt="Image du plateau de Planpraz">
                </div>
            </div>
            <!--Description-->
            <div class="card-deck mb-3 shadow bg-white rounded">
                <div class="card-body">
                    <h3>Description</h3>
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
            <div class="card-deck mb-3 shadow bg-white rounded">
                <div class="card-body">
                    <h3>Faune et Flore</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6">
                            <img src="\Cre-alpin\assets\imgs\pages\planpraz\gentiane_01.jpg" class="img-fluid card-img" alt="Image d'un chamois sur assis sur un rocher">
                        </div>
                        <div class="col-6">
                            <div class="card-body" style="padding: 0;">
                            <h6 class="card-title"><b>Gentiane</b></h6>
                            <p class="card-text-mueted">Genre : Tulipe</br>Famille : Gentian<br>
                            <a class="" href="#">En savoir plus</a></p>
                        </div>
                    </div>
                </div>
                <!--Faune-->
                <div class="row">
                    <div class="col-6">
                        <img src="\Cre-alpin\assets\imgs\pages\planpraz\chamois.jpg" class="img-fluid card-img" alt="Image d'un chamois sur assis sur un rocher">
                    </div>
                    <div class="col-6">
                        <div class="card-body" style="padding: 0;">
                        <h6 class="card-title"><b>Chamois</b></h6>
                        <p class="card-text-mueted">Genre : Rupicapra<br>Famille : Bovidae<br>
                        <a class="" href="#" class="link_card">En savoir plus</a></p>
                    </div>
                </div>
            </div>
            <!--Fin de l'encart faune et flore-->
            <hr>
            <!-- A proximité -->
            <div class="card-deck mb-3 shadow bg-white rounded">
                <div class="card-body ">
                    <h3 class="card-title">A proximité</h3>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-6" >
                            <img src="\Cre-alpin\assets\imgs\pages\planpraz\brevent.jpg" class="img-fluid card-img" alt="Image d'un chamois sur assis sur un rocher">
                        </div>
                        <div class="col-6">
                            <div class="card-body" style="padding: 0;">
                            <h6 class="card-title"><b>Le Brévent</b></h6>
                            <p class="card-text-mueted">Chamonix-Mont-Blanc</p>
                            <div class="star">
                                <svg id="Calque_1" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 94.4 22.83">
                                    <title>4star</title>
                                    <g>
                                        <path d="M562.78,1206.68l2.83,8.72h9.17l-7.42,5.38,2.83,8.72-7.41-5.39-7.42,5.39,2.83-8.72-7.41-5.38h9.16Z" transform="translate(-550.78 -1206.68)" style="fill: #ff0"/>
                                        <path d="M587.18,1206.68l2.83,8.72h9.17l-7.42,5.38,2.83,8.72-7.41-5.39-7.42,5.39,2.83-8.72-7.41-5.38h9.16Z" transform="translate(-550.78 -1206.68)" style="fill: #ff0"/>
                                        <path d="M611.18,1206.68l2.83,8.72h9.17l-7.42,5.38,2.83,8.72-7.41-5.39-7.42,5.39,2.83-8.72-7.41-5.38h9.16Z" transform="translate(-550.78 -1206.68)" style="fill: #ff0"/>
                                        <path d="M633.18,1206.68l2.83,8.72h9.17l-7.42,5.38,2.83,8.72-7.41-5.39-7.42,5.39,2.83-8.72-7.41-5.38h9.16Z" transform="translate(-550.78 -1206.68)" style="fill: #ff0"/>
                                    </g>
                                </svg>
                            </div>
                            <div>
                                <p><img src="\Cre-alpin\assets\pictos\1x\time.png" alt="Pitco d'un chronomètre">      2h de visite</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!--Fin de l'encart à proximité-->
  
        <?php include $_SERVER["DOCUMENT_ROOT"] .'/Cre-alpin/includes/footer.php';?>
        <?php include $_SERVER["DOCUMENT_ROOT"] .'/Cre-alpin/includes/scripts.php';?>
    </body>
</html>