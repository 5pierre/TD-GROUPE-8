<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/styles/stylemyvideo.css">
    <title>CatHub</title>
</head>
<body>
    <header>
        <input type="text" placeholder="Rechercher">

 
    </header>

    <main>
     <?php foreach ($myvideos as $video) { ?>
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

        <form action="" method="post">
    <button type="submit" name="videoID" value="<?= htmlspecialchars($video['id_video']) ?>">Supprimer la vidéo ?</button>
</form>

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
