<!DOCTYPE html>
<html lang="fr">

<head>
    <meta desc="">
    <title>accueil_faune_flore</title>
    <link href="/Cre-alpin/assets/css/main.css" rel="stylesheet">
    <!--META, CSS AND DATABASE CON-->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/head.php'; ?>
</head>

<body>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/header.php'; ?>
    <div class="container-fluid">
        <!--Flèche vers la gauche-->
        <svg id="arrow_left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 15">
            <title>arrow_left</title>
            <path d="M2.12,12l7.52,6.23L9,19,0,11.48,9,4l.65.76L2.12,11H24v1Z" transform="translate(0 -4)" style="fill-rule: evenodd" />
        </svg>
        <!--Titre-->
        <h1>Faune et Flore</h1>
        <!--Titre-->
        <h4><span style="color: #454f63;"><b>Parce que vous vous trouvez à</b></span> PLANPRAZ</h4>
        <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img class="chamois" src="/Cre-alpin/assets/imgs/pages/planpraz/chamois.jpg" alt="chamois" />
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Chamois</h5>
                        <p class="card-text"><b>Genre : </b> Rupicapra</p>
                        <p class="card-text"><b>Famille : </b> Bovidae</p>
                        <a href="#" class="card-link">En savoir plus</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/footer.php'; ?>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/scripts.php'; ?>
</body>

</html>