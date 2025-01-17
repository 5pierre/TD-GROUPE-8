<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat hub</title>
    <link rel="stylesheet" href="view/styles/stylesacceuil.css">
</head>
<body>
    <main>
        <div class="contain">
            <h1>Bienvenue sur cat hub !</h1>
            <h2>LA référence dans le milieux de la vidéo à la demande</h2>
        </div>
        <div class="containerrow">
            <div class="leftcontainer">
                <h2>Nos vidéos populaires :</h2>
                <?php 
                foreach ($videos as $video)
                    if ($videoId = preg_replace('/.*v=/', '', $video['liens'])){
                        $imagesurl = "https://img.youtube.com/vi/$videoId/0.jpg";
                    }else{$imagesurl = "view/images/cat2.png";
                }?>
            </div>
            <div class="rightcontainer">
                <div class="containimg">
                    <img src="view/images/Cat4.jpg" class="cat4">
                    <img src="view/images/XCat.png" class="xcat">
                </div>
            </div>
        </div>
    </main>
</body>
</html>

