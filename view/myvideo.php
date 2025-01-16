<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>CatHub</title>
</head>
<body>
    <header>
        <input type="text" placeholder="Rechercher">

 
    </header>

    <main>
     <?php foreach ($myvideos as $video) { ?>
    <div class="cat-card">
    <?=$video['title'] ?></h2>

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
