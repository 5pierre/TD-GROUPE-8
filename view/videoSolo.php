<link rel="stylesheet" href="./view/styles/stylevideosolo.css">

<div class="cat-card">
    <h2 class="cat-name"><?= htmlspecialchars($video['title']) ?></h2>
    <!-- Affichage de la vidéo -->

    <?php 
        $videoUrl = htmlspecialchars($video['liens']);
        
        // Vérifie si le lien est une vidéo YouTube
        if (strpos($videoUrl, 'youtube.com') !== false || strpos($videoUrl, 'youtu.be') !== false) {
            // Convertit les liens en URL d'intégration YouTube
            $embedUrl = preg_replace(
                '/(youtu\.be\/|youtube\.com\/watch\?v=)([a-zA-Z0-9_-]+)/',
                'https://www.youtube.com/embed/$2',
                $videoUrl
            );
            echo '<iframe width="560" height="315" src="' . $embedUrl . '" frameborder="0" allowfullscreen></iframe>';
        } else {
            // Affiche la vidéo pour les liens Firebase ou autres formats MP4
            echo '<video width="560" height="315" controls>
                    <source src="' . $videoUrl . '" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture vidéo.
                  </video>';
        }
        ?>

    <!-- <video 
    width="560" 
    height="315" 
    controls>
    <source src="https://cdn.discordapp.com/attachments/591380645050318868/1241065004057235537/annonce.mp4?ex=678933da&is=6787e25a&hm=b6e205c5ce72fd8220c23d3319a993e342adc9051bbe452a89f1432326d44a9f&" type="video/mp4">
    Votre navigateur ne supporte pas la lecture de vidéos.
    </video> -->

    <?php $videoId = preg_replace('/.*v=/', '', $video['liens']);
$thumbnailUrl = "https://img.youtube.com/vi/$videoId/0.jpg";?>
    <img src="<?= $thumbnailUrl ?>" alt="Miniature de la vidéo" width="560" height="315">


    <p class="cat-description">
        <?= nl2br(htmlspecialchars($video['user_name'])) ?>
    </p>
    <p class="cat-description">
        <?= nl2br(htmlspecialchars($video['description'])) ?>
    </p>
    <p class="cat-timestamp">
        Ajouté le : <?= htmlspecialchars($video['created_at']) ?>
    </p>
</div>
