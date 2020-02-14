<!DOCTYPE html>
<html lang="fr">

<head>
    <meta desc="">
    <title>Cre'alpin</title>
    <link href="/Cre-alpin/assets/css/main.css" rel="stylesheet">
    <link href="/Cre-alpin/assets/css/detail_flore_faune.css" rel="stylesheet">
    <!--META, CSS AND DATABASE CON-->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/head.php'; ?>
</head>

<body>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/header.php'; ?>


    <div class="container-fluid">
        <!--Titre-->
        <h1>Gentiane</h1>
        <!-- MENU-->
        <div class="menu">
            <ul class="nav nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Infos</a>
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
                    <a class="nav-link" href="#">Galerie</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <img class="gentiane" src="/Cre-alpin/assets/imgs/pages/planpraz/Gentiane-acaule_format_640x376.jpg" alt="gentiane" />
        </div>
        <!--Description-->
        <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
            <div class="card-body">
                <h3 class="card-title">Gentiane</h3>

                <ul>
                    <li><b>Genre :</b> Tulipe</li>
                    <li><b>Famille :</b> Gentianaceae</li>
                    <li><b>Type :</b>Plante vivace</li>
                    <li><b>Floraison :</b>été ou printemps</li>
                    <li><b>Hauteur :</b>5 cm à 1.50 m</li>
                    <li><b>Utilisation :</b>Industrie des arômes et cosmétique</li>
                </ul>
            </div>
        </div>
        <!--Caractéristiques-->
        <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
            <div class="card-body">
                <h3 class="card-title">Caractéristiques</h3>
                <p>Les gentianes appartiennent avant tout au monde sauvage, mais certaines espèces sont cultivées pour leurs fleurs en forme de trompette qui sont le plus souvent d'une couleur bleue inimitable. D'autres espèces de plus grande taille ont des fleurs de couleur jaune ou rouge. Beaucoup de gentianes sont protégées dans de nombreuses régions de France : leur cueillette et leur arrachage sont interdits.</p>
            </div>
        </div>
        <!--Emplacement-->
        <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
            <div class="card-body">
                <h3 class="card-title">Emplacement</h3>
                <p>La gentiane pousse idéalement dans les montagnes où la cueillette de cette plante est souvent interdite. A défaut, on la cultive dans un jardin rocailleux, pour les espèces tapissantes.</p>
            </div>
        </div>
        <!--Bouton-->
        <div class="row justify-content-center">
            <button type="submit" class="bouton">Je l'ai rencontré</button>
        </div>
        <!--Bouton-->
        <div class="row justify-content-center">
            <button type="submit" class="bouton">Capturer</button>
        </div>
    </div>

    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/footer.php'; ?>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/scripts.php'; ?>
</body>

</html>