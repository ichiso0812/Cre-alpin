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
        <div class="header">
            <svg id="favourite" data-name="favourite" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 22">
                <title>ajouter_favoris</title>
                <path d="M15.65,19.41C14.49,20.56,13.26,21.75,12,23,5.57,16.62,0,11.85,0,7.19A6,6,0,0,1,6.28,1,6.51,6.51,0,0,1,12,4.25,6.53,6.53,0,0,1,17.73,1,6,6,0,0,1,24,7.19a8,8,0,0,1-1.15,3.86L21.36,9.57A5.49,5.49,0,0,0,22,7.19,4.06,4.06,0,0,0,17.73,3c-3.26,0-5,3.47-5.73,5-.75-1.54-2.48-5-5.72-5A4.05,4.05,0,0,0,2,7.19c0,3.44,4.74,7.85,10,13L14.24,18ZM23,14H20V11H18v3H15v2h3v3h2V16h3Z" transform="translate(0 -1)"/>
            </svg>
            <svg id="share" data-name="share" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <title>partager</title>
                <path d="M5,9a3,3,0,1,1-3,3A3,3,0,0,1,5,9ZM5,7a5,5,0,1,0,5,5A5,5,0,0,0,5,7Zm15,9a4,4,0,0,0-2.93,1.3l-5.49-2.93a6.86,6.86,0,0,1-.95,1.77l5.49,2.92A4.25,4.25,0,0,0,16,20a4,4,0,1,0,4-4Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,20,22ZM20,0a4,4,0,0,0-4,4,4.08,4.08,0,0,0,.12.93L10.63,7.86a6.86,6.86,0,0,1,.95,1.77L17.07,6.7A4,4,0,1,0,20,0Zm0,6a2,2,0,1,1,2-2A2,2,0,0,1,20,6Z" transform="translate(0 0)"/>
            </svg>
        </div>
        <h1>Planpraz<h1>
        <ul class="list-group list-group-horizontal">
            <li class="list-group-item">Temps</li>
            <li class="list-group-item">Humidité</li>
            <li class="list-group-item">Température</li>
        </ul>
        <div class="menu">
            <ul class="nav ">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Histoire</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" aria-disabled="true">Photos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Vidéos</a>
                </li>
            </ul>
        </div>
        <div class="card-deck mb-3 shadow p-8 mb-5 bg-white rounded">
            <div class="media">
                <img src="..." class="mr-3" alt="...">
                <div class="media-body">
                    <h5 class="mt-0">Le geste malin</h5>
                    <p>Attention de ne pas abîmer le sol et la végétation qui bordent les sentiers avec vos bâtons.</p>
                </div>
            </div>
        </div>







        

        <?php include $_SERVER["DOCUMENT_ROOT"] .'/Cre-alpin/includes/footer.php';?>
        <?php include $_SERVER["DOCUMENT_ROOT"] .'/Cre-alpin/includes/scripts.php';?>
    </body>
</html>