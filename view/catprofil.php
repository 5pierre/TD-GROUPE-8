<link rel="stylesheet" href="./view/styles/stylecatprofil.css">


<h1 class="cat-title"><?= htmlspecialchars($cat['name']) ?></h1>

<div class="cat-details">
    <img src="<?= htmlspecialchars($cat['image']) ?>" alt="Image de <?= htmlspecialchars($cat['name']) ?>" class="cat-image">
    
    <div class="cat-info">
        <p class="cat-description">
            <?= nl2br(htmlspecialchars($cat['contenu'])) ?>
        </p>
        <small class="cat-born">Date de naissance : <?= htmlspecialchars($cat['born_at']) ?></small>
        <p class="cat-extra-info">
            Ce chat est disponible pour location. Un coup de cœur ? 
            <a href="?page=contact" class="contact-link">Contactez-nous</a>.
        </p>
    </div>
</div>
