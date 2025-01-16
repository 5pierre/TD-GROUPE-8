<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/styles/stylevideo.css">
    <title>CatHub</title>
</head>
<body>
    <header>
        <input type="text" placeholder="Rechercher">

        <button onclick="document.getElementById('popup').style.display='block'">+ Uploader</button>
        <div id="popup" style="display:none;">
            <form action="" method="post">
                 <!-- <textarea name="liens" placeholder="liens de la video" required></textarea><br> -->
                liens : <input type="url" name="liens" required> <br>
                description : <input type="text" name="description" required> <br>
                title : <input type="text" name="title" required> <br>

                <button type="submit">Envoyer</button>
            </form>
            <button onclick="document.getElementById('popup').style.display='none'">Fermer</button>
        </div>
    </header>

    <main>
     <?php foreach ($videos as $video) { ?>
    <div class="cat-card">
        <h2 class="cat-name"><?= htmlspecialchars($video['title']) ?></h2>
        <?php 
        if ($videoId = preg_replace('/.*v=/', '', $video['liens'])){
       $imagesurl = "https://img.youtube.com/vi/$videoId/0.jpg";
        }else{$imagesurl = "view/images/cat2.png";
        }?>

   
        <img src="<?= $imagesurl ?>" alt="Image de <?= htmlspecialchars($video['description']) ?>" class="cat-image">
        <p class="cat-title">
            <?= nl2br(htmlspecialchars($video['user_name'])) ?>
        </p>
        <p class="cat-description">
            <?= nl2br(htmlspecialchars($video['description'])) ?>
        </p>
        <h2 class="cat-link">
            <a href="?page=video&id=<?= htmlspecialchars($video['id_video']) ?>">Plus d'infos sur <?= htmlspecialchars($video['title']) ?> ?</a>
        </h2>
        <p class="cat-timestamp">
            Ajouté le : <?= htmlspecialchars($video['created_at']) ?>
        </p>
    </div>
<?php } ?>
    </main>

    <!-- <aside>
        <ul>
            <li><a href="#">Vidéos "J'aime"</a></li>
            <li><a href="#">Vos vidéos</a></li>
            <li><a href="#">Se déconnecter</a></li>
        </ul>
    </aside> -->
</body>
</html>
