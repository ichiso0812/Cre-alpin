<!DOCTYPE html>
<html lang="fr">

<head>
    <meta desc="">
    <title>Cre'alpin</title>
    <link href="/Cre-alpin/assets/css/main.css" rel="stylesheet">
    <!--META, CSS AND DATABASE CON-->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/head.php'; ?>
</head>

<body>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/header.php'; ?>
    <svg id="arrow_left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 15">
        <title>arrow_left</title>
        <path d="M2.12,12l7.52,6.23L9,19,0,11.48,9,4l.65.76L2.12,11H24v1Z" transform="translate(0 -4)" style="fill-rule: evenodd" />
    </svg>
    <h1>Participer</h1>
    <p class="text-xl-left">Soumettez vos observations sur la faune et la flore afin d'alimenter la base de Atlas.<br> Vos données géograhiques et temporelles ainsi que les données métérologiques seront automatiquement envoyées avec le formulaire.</p>
    <h2>Vous vous trouvez à PLANPRAZ</h2>
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item text-center">Temps</li>
        <li class="list-group-item text-center"><b>35%</b><br>humidité</li>
        <li class="list-group-item text-center"><b>12°c</b><br>Température</li>
    </ul>
    <ul>
        <li><b>Altitude :</b> 2000 m</li>
        <li><b>Proéminence :</b> 40 m</li>
        <li><b>Dénivelé :</b> 1000 m</li>
        <li><b>Massif :</b> Aiguille rouges (Alpes)</li>
        <li><b>Département :</b> Haute-Savoie</li>
        <li><b>Coordonnées :</b> N 45° 56' 08" E 006° 51' 18"</li>
        <li><b>Accès :</b> Télécabine</li>
    </ul>
    <form>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Sujet</label>
            <select class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="exampleFormControlSelect1">
                <option>Une observation sur la faune</option>
                <option>Une observation sur la flore</option>
                <option>Une observation sur le changement climatique</option>
                <option>Participer et apporter de nouvelles statistiques</option>
                <option>Autre</option>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control shadow-sm p-3 mb-5 bg-white rounded" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
        </div>
        <div class="form-group">
            <label for="exampleFormControlFile1">Example file input</label>
            <input type="file" class="form-control-file rounded" id="exampleFormControlFile1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">En soumettant ce formulaire, vous autorisez l'entreprise Créa Mont-Blanc à stocker et traiter les données personnelles soumises ci-dessus afin qu'elle vous fournisse le contenu demandé.</label>
        </div>
        <button type="submit" class="bouton">Soumettre</button>
    </form>

    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/footer.php'; ?>
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/scripts.php'; ?>
</body>

</html>