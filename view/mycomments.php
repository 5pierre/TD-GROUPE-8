<link rel="stylesheet" href="view/styles/mycomments.css">

<body>
    <main>
        <?php foreach ($coms as $com) { ?> 
            <div class="cat-card">
                <h2 class="cat-name">Utilisateur : <?= htmlspecialchars($com['user_name']) ?></h2>
                <p class="cat-description"><strong>contenue :</strong> <?= htmlspecialchars($com['contenue']) ?></p>


                <form action="" method="post" class="supp-form">
                    <button type="submit" name="comid" value="<?= htmlspecialchars($com['id_comm']) ?>">Supprimer le commentaire ?</button>
                </form>
            </div>
        <?php } ?>
    </main>
</body>
</html>
