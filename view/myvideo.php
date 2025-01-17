<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/styles/stylemyvideo.css">
    <title>CatHub</title>
</head>
<body>
    <main>
     <?php foreach ($myvideos as $video) { ?>
    <div class="cat-card">
            <?php 
                if ($videoId = preg_replace('/.*v=/', '', $video['liens'])){
                    $imagesurl = "https://img.youtube.com/vi/$videoId/0.jpg";
                }else{$imagesurl = "view/images/cat2.png";
                }?>

            <img src="<?= $imagesurl ?>" alt="Image de <?= htmlspecialchars($video['description']) ?>" class="cat-image">
        <div class="cat-content">
            <h2 class="cat-link">
                <?= htmlspecialchars($video['title']) ?>
            </h2>
            <p class="cat-name">
                Chaîne : <?= htmlspecialchars($video['user_name']) ?> Date : <?= htmlspecialchars($video['created_at']) ?>
                <div x-data="{ count: 0 }">
                    <button x-on:click="count++">Vues</button>
                    <span x-text="count"></span>
                </div>
            </p>
            <p class="cat-description">
                <?= nl2br(htmlspecialchars($video['description'])) ?>
            </p>
        </div>
        <form action="" method="post" class="supp-form">
            <button type="supp" name="videoID" value="<?= htmlspecialchars($video['id_video']) ?>">Supprimer la vidéo ?</button>
        </form>
    </div>
<?php } ?>
    </main>
</body>
</html>
