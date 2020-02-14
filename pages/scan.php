<!DOCTYPE html>
<html lang="fr">
<head>
    <meta desc="">
    <title>Cre'alpin</title>
    <!--META, CSS AND DATABASE CON-->
    <?php include $_SERVER["DOCUMENT_ROOT"] . '/Cre-alpin/includes/head.php';?>
</head>
    <body>
        
        <div id="camera"></div>



        <?php include $_SERVER["DOCUMENT_ROOT"] .'/Cre-alpin/includes/scripts.php';?>
        <script src="/Cre-alpin/libs/jsqr.js"></script>
        <script>
            function retourOK (code) {

                window.location = "/Cre-alpin/pages/lieux/" + code
            }
            var scanner = new jsQRScan({
                'id': 'camera',
                'width': $(window).width(),
                'height': $(window).height(),
                'callbackSuccess': retourOK,
                'scanMaxDuration': 200000,
                'scanInterval': 1500
            });
            

        </script>
    </body>
</html>