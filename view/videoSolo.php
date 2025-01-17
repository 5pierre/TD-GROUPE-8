<link rel="stylesheet" href="view/styles/stylevideosolo.css">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<header x-data="{ showPopup: false }" class="header">
        <!--<input type="text" placeholder="Rechercher" class="search-input">-->
    
        <button @click="showPopup = ! showPopup" class="upload-button">
        + Commenter
        </button>

        <div x-show="showPopup" @click.outside="showPopup = false" class="popup">
            <form action="" method="post" class="popup-form">
                <label>
                    Ajouter un commentaire :
                    <input type="texte" name="commentaire" required class="popup-input">
                </label>
                <button type="submit" class="submit-button">
                    Envoyer
                </button>
            </form>
            <button @click="showPopup = false" class="close-button">
                Fermer
            </button>
        </div>
    </header>

<div class="cat-card">
    <div class="cat-image">
        <?php 
            $videoUrl = htmlspecialchars($video['liens']);
        
            // Vérifie si le lien est une vidéo YouTube 
            if (strpos($videoUrl, 'youtube.com') !== false || strpos($videoUrl, 'youtu.be') !== false || strpos($videoUrl, 'dailymotion.com') !== false)  {
                echo '<iframe width="666" height="333" src="' . $videoUrl . '" frameborder="0" allowfullscreen></iframe>';
            } else {
                echo '<video width="666" height="333" controls>
                    <source src="' . $videoUrl . '" type="video/mp4">
                    Votre navigateur ne supporte pas la lecture vidéo.
                  </video>';
            }
        ?>
    </div>
    <div class="cat-content">
        <h2 class="cat-link">
            <?= htmlspecialchars($video['title']) ?>
        </h2>
        <p class="cat-name">
            Chaîne : <?= htmlspecialchars($video['user_name']) ?> Date : <?= htmlspecialchars($video['created_at']) ?>
        </p>
        <p class="cat-description">
            <?= nl2br(htmlspecialchars($video['description'])) ?>
        </p>
        <!--Modifie le code ici afin d'ajouter la logique de la classe commentaire-->
        <p class="Commentaire">
        </p>
    </div>

    <div class="comments-section">
            <h3>Commentaires :</h3>
            <?php foreach ($comments as $comment) { ?>
                <div class="comment">
                    <p class="comment-user"><?= htmlspecialchars($comment['user_name']) ?> a écrit :</p>
                    <p class="comment-text"><?= nl2br(htmlspecialchars($comment['contenue'])) ?></p>
                </div>
            <?php } ?>

            <form action="" method="post" class="popup-form">
                <label for="comment">Ajouter un commentaire :</label>
                <textarea id="comment" name="commentaire" rows="3" placeholder="Écrivez votre commentaire..." required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
</div>

