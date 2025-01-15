<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./view/styles/stylevideo.css">

    <title>CatHub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 20px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header h1 {
            margin: 0;
            font-size: 24px;
            color: #000;
        }



        .headervideo button button-upload{
            padding: 8px 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .video-list {
            display: flex;
            flex-direction: column;
            gap: 20px;
            padding: 20px;
        }

        .video-item {
            display: flex;
            gap: 15px;
            background-color: #fff;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            align-items: center;
        }

        .video-item img {
            width: 120px;
            height: 70px;
            object-fit: cover;
            border-radius: 8px;
        }

        .video-details {
            display: flex;
            flex-direction: column;
        }

        .video-details h3 {
            margin: 0;
            font-size: 16px;
        }

        .video-details p {
            margin: 0;
            font-size: 14px;
            color: gray;
        }

        .video-actions button {
            background-color: #dc3545;
            color: #fff;
            border: none;
            padding: 8px 12px;
            border-radius: 4px;
            cursor: pointer;
        }

        aside {
            position: fixed;
            top: 0;
            right: 0;
            width: 200px;
            height: 100%;
            background-color: #111;
            color: #fff;
            padding: 20px;
            box-shadow: -2px 0 5px rgba(0, 0, 0, 0.1);
        }

        aside ul {
            list-style: none;
            padding: 0;
        }

        aside ul li {
            margin: 15px 0;
        }

        aside ul li a {
            color: #fff;
            text-decoration: none;
        }

        /* Scrollable list */
        .video-list {
            max-height: calc(100vh - 60px);
            overflow-y: auto;
        }
    </style>
</head>
<body>
    <header class="headervideo">
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