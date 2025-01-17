<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails Vidéo</title>
    <link rel="stylesheet" href="./view/styles/stylevideosolo.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
            line-height: 1.6;
        }

        .cat-card {
            max-width: 700px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .cat-name {
            font-size: 2em;
            color: #444;
            margin-bottom: 15px;
            text-align: center;
        }

        .cat-description, .cat-timestamp {
            font-size: 1.2em;
            margin: 10px 0;
            color: #555;
        }

        iframe, video {
            width: 100%;
            height: 315px;
            border-radius: 8px;
            margin: 10px 0;
        }

        .comments-section {
            margin-top: 30px;
            padding: 20px;
            background-color: #fafafa;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .comments-section h3 {
            font-size: 1.5em;
            margin-bottom: 15px;
            color: #444;
        }

        .comment {
            margin-bottom: 15px;
            padding: 10px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .comment-user {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .comment-text {
            font-size: 1em;
            color: #555;
        }

        .popup-form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333;
        }

        .popup-form input, .popup-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1em;
        }

        .popup-form button {
            padding: 10px 15px;
            background-color: #ff6b6b;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }

        .popup-form button:hover {
            background-color: #ff4b4b;
        }
    </style>
</head>
<body>
    <div class="cat-card">
        <h2 class="cat-name"><?= htmlspecialchars($video['title']) ?></h2>

        <!-- Affichage de la vidéo -->
        <?php 
            $videoUrl = htmlspecialchars($video['liens']);
            if (strpos($videoUrl, 'youtube.com') !== false || strpos($videoUrl, 'youtu.be') !== false || strpos($videoUrl, 'dailymotion.com') !== false) {
                echo '<iframe src="' . $videoUrl . '" frameborder="0" allowfullscreen></iframe>';
            } else {
                echo '<video controls>
                        <source src="' . $videoUrl . '" type="video/mp4">
                        Votre navigateur ne supporte pas la lecture vidéo.
                      </video>';
            }
        ?>

        <p class="cat-description"><?= nl2br(htmlspecialchars($video['description'])) ?></p>
        <p class="cat-description"><?= nl2br(htmlspecialchars($video['user_name'])) ?></p>
        <p class="cat-timestamp">Ajouté le : <?= htmlspecialchars($video['created_at']) ?></p>

        <div class="comments-section">
            <h3>Commentaires :</h3>
            <?php foreach ($comments as $comment) { ?>
                <div class="comment">
                    <p class="comment-user"><?= htmlspecialchars($comment['user_name']) ?> a écrit :</p>
                    <p class="comment-text"><?= nl2br(htmlspecialchars($comment['content'])) ?></p>
                </div>
            <?php } ?>

            <form action="" method="post" class="popup-form">
                <label for="comment">Ajouter un commentaire :</label>
                <textarea id="comment" name="content" rows="3" placeholder="Écrivez votre commentaire..." required></textarea>
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </div>
</body>
</html>
