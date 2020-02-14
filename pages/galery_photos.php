<!DOCTYPE html>
<html lang="fr">

<head>
    <meta desc="">
    <title>Cre'alpin</title>
    <link href="/Cre-alpin/assets/css/galery_faune_flore.css" rel="stylesheet">
    <!--META, CSS AND DATABASE CON-->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/head.php'; ?>

</head>

<body>
    <//?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/header.php'; ?>
    <!--Début grille-->
    <div class="container"> 

        <!-- HEADER -->

        <div class="row">
            <!--Première ligne-->
            <div class="col-8" style="padding: 0;">
                <a href="images/image1.jpg" class="d-block mb-1 h-100">
                    <img src="\Cre-alpin\assets\imgs\pages\planpraz\planpraz_0033.jpg" alt="Image 1" />
                </a>
            </div>
            <!--Grille à Droite-->
            <div class="col-4" style="padding: 0;">
                <a href="images/image2.jpg" class="d-block mb-1 h-100">
                    <img src="\Cre-alpin\assets\imgs\pages\planpraz\chalet.jpg" alt="Image 2" />
                    <img src="\Cre-alpin\assets\imgs\pages\planpraz\planpraz_0003.jpg" alt="Image 2" />
                </a>
            </div>
        </div>
            <!-- Deuxième ligne-->
        <div class="row">
            <!--Grille à gauche-->
            <div class="col-4" style="padding: 0;">
                <a href="images/image2.jpg" class="d-block mb-1 h-100">
                    <img src="\Cre-alpin\assets\imgs\pages\planpraz\aiguille_rouge.jpg" alt="Image 2" />
                    <img src="\Cre-alpin\assets\imgs\pages\planpraz\aiguille_rouge_02.jpg" alt="Image 2" />
                </a>
            </div>
            <div class="col-8" style="padding: 0;">
                <a href="images/image1.jpg" class="d-block mb-1 h-100">
                    <img src="\Cre-alpin\assets\imgs\pages\planpraz\telecabine.jpg" alt="Image 1" />
                </a>
            </div>
        </div>
    </div>
    
    <!--Fin grille-->

    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/footer.php'; ?>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/scripts.php'; ?>
</body>

</html>