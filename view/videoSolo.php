<link rel="stylesheet" href="./view/styles/stylevideosolo.css">


<div class="cat-card">
        <h2 class="cat-name"><?= htmlspecialchars($video['description']) ?></h2>
        <img src="view/images/cat2" alt="Image de <?= htmlspecialchars($video['description']) ?>" class="cat-image">
        <p class="cat-description">
            <?= nl2br(htmlspecialchars($video['user_name'])) ?>
        </p>
        <h2 class="cat-link">
        </h2>
        <p class="cat-timestamp">
            Ajouté le : <?= htmlspecialchars($video['created_at']) ?>
        </p>
    </div>
