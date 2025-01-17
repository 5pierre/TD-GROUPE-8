<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/styles/stylevideo.css">
    <title>CatHub</title>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</head>
<body>
    <header x-data="{ showPopup: false }" class="header">
        <input type="text" placeholder="Rechercher" class="search-input">
    
        <button @click="showPopup = ! showPopup" class="upload-button">
        + Uploder
        </button>

        <div x-show="showPopup" @click.outside="showPopup = false" class="popup">
            <form action="" method="post" class="popup-form">
                <label>
                    Liens :
                    <input type="url" name="liens" required class="popup-input" placeholder="Metter ici le lien de votre video">
                </label>
                <label>
                    Description :
                    <input type="text" name="description" required class="popup-input" placeholder="Écrivez nous une petite description ">
                </label>
                <label>
                    Title :
                    <input type="text" name="title" required class="popup-input" placeholder="Choisissez un bon titre">
                </label>
                <div class="buttoncontainer">
                    <button type="submit" class="submit-button">
                        Envoyer
                    </button>
                    <button @click="showPopup = false" class="close-button">
                        Fermer
                    </button>
                </div>
            </form>
        </div>
    </header>

    <main>
     <?php foreach ($videos as $video) { ?>
    <div class="cat-card">
        <?php 
        if ($videoId = preg_replace('/.*v=/', '', $video['liens'])){
       $imagesurl = "https://img.youtube.com/vi/$videoId/0.jpg";
        }else{$imagesurl = "view/images/cat2.png";
        }?>

   
        <a href="?page=video&id=<?= htmlspecialchars($video['id_video']) ?>"><img src="<?= $imagesurl ?>" alt="Image de <?= htmlspecialchars($video['description']) ?>" class="cat-image"> </a>
        
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
    </div>
<?php } ?>
    </main>
</body>
</html>
