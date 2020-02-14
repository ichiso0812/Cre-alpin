<!DOCTYPE html>
<html lang="fr">

<head>
    <meta desc="">
    <title>Projet Mont Blanc</title>
    <link href="/Cre-alpin/assets/css/main.css" rel="stylesheet">
    <link href="/Cre-alpin/assets/css/projet_mont_blanc.css" rel="stylesheet">
    <!--META, CSS AND DATABASE CON-->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/head.php'; ?>
</head>

<body>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/header.php'; ?>
    <div class="container-fluid">
        <!--Titre-->
        <h1>Projet Mont-Blanc</h1>
        <!--Menu déroulant-->
        <div class="form-group">
            <label for="exampleFormControlSelect1" placeholder="Menu_deroulant"></label>
            <select class="form-control shadow-sm bg-white rounded" id="exampleFormControlSelect1">
                <option>La recherche scientifique</option>
                <option>Le changement scientifique</option>
                <option>Un massif en évolution</option>
            </select>
        </div>
        <!--La recherche scientifique-->
        <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
            <div class="card-body">
                <p>Les travaux scientifiques du Projet Mont-Blanc se concentrent sur l'étude des écosystèmes, domaine encore peu représenté dans les études actuelles sur le Mont-Blanc. L'écologie, discipline centrale, est abordée de manière transdisciplinaire, mêlée à la climatologie et la glaciologie, pour créer un observatoire collaboratif de la biodiversité en milieu alpin.</p>
                <img src="\Cre-alpin\assets\imgs\pages\planpraz\placette_orchamp_1900_0.jpg" class="img-fluid card-img" alt="Image de deux personnes dans la montagne">
            </div>
        </div>
        <!--Zoom sur les milieux d'altitude-->
        <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
            <div class="card-body">
                <h3 class="card-title">
                    Zoom sur les milieux d’altitude</h3>
                <p>Les chercheurs mesurent les paramètres d'évolution environnementale du massif du Mont-Blanc en se concentrant sur les milieux les plus représentatifs et moins étudiés de la montagne : pelouses alpines, haute montagne, et limite supérieure de la forêt. Ces milieux d'altitude impactent fortement les milieux et services en aval. En étudiant leur fonctionnement et leur réaction aux changements en cours, en particulier aux changements climatiques, les chercheurs pourront modéliser l’évolution des services écosystémiques et l’impact sur nos sociétés.</p>
            </div>
        </div>
        <!--Les 5 axes de recherche du Projet Mont-Blanc-->
        <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
            <div class="card-body">
                <ul>
                    <li><b>Climat :</b> Suivi des températures, de l'enneigement, des dates de déneigement.</li>
                    <li><b>Dynamique :</b> Suivi de la productivité des populations, suucès de la reproduction et taux de survie.</li>
                    <li><b>Services écosystémiques :</b>Suivi de la limite de la forêt, de la progression de la lande, de l'abondance des espèces emblématiques et de l'attractivité des pelouses alpines.</li>
                    <li><b>Phenologie :</b>Suivi des sites de reproduction</li>
                    <li><b>Distribution :</b>Suivi des déplacements, des zones de présence et de l'abondance d'espèces.</li>
                    <li><img src="\Cre-alpin\assets\imgs\pages\planpraz\shema.png" class="img-fluid card-img" alt="shema_axes_de_recherche"></li>
                </ul>
            </div>
        </div>
        <!--titre-->
        <h3>Objectifs</h3>
        <!--Encart-->
        <div class="row justify-content-center">
            <p class="encart_1">Créer un observatoire de la biodiversité en milieu alpin </p>
        </div>
        <!--Encart-->
        <div class="row justify-content-center">
            <p class="encart_2">Mesurer l'évolution de l'environnement du massif</p>
        </div>
        <!--Encart-->
        <div class="row justify-content-center">
            <p class="encart_3">Évaluer les capacités d'adaptation des espèces alpines</p>
        </div>
    </div>



    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/footer.php'; ?>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/scripts.php'; ?>
</body>

</html>