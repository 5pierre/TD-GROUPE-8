<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        <button>+ Uploader</button>
        <div class="button-upload">
            <button>Supprimer</button>
        </div>
    </header>

    <main>
        <div class="video-list">
            <div class="video-item">
                <img src="view/images/cat2.jpg" alt="Thumbnail">
                <div class="video-details">
                    <h3>This is a story based on true events</h3>
                    <p>Victor_movies • 2,2 M de vues • il y a 3 semaines</p>
                </div>
                <div class="video-actions">
                    <button>Supprimer</button>
                </div>
            </div>

            <div class="video-item">
                <img src="view/images/cat1.jpg" alt="Thumbnail">
                <div class="video-details">
                    <h3>Pierre Chabrier vous a menti. (et bonne année)</h3>
                    <p>Sylvain Lye • 9,3 M de vues • il y a 4 jours</p>
                </div>
                <div class="video-actions">
                    <button>Supprimer</button>
                </div>
            </div>

            <div class="video-item">
                <img src="view/images/cat3.jpg" alt="Thumbnail">
                <div class="video-details">
                    <h3>🐱 Le secret de Mats</h3>
                    <p>Fitness-Muscu • 1,8 M de vues • il y a 11 jours</p>
                </div>
                <div class="video-actions">
                    <button>Supprimer</button>
                </div>
            </div>

            <div class="video-item">
                <img src="view/images/cat3.jpg" alt="Thumbnail">
                <div class="video-details">
                    <h3>🐱 Le secret de Mats</h3>
                    <p>Fitness-Muscu • 1,8 M de vues • il y a 11 jours</p>
                </div>
                <div class="video-actions">
                    <button>Supprimer</button>
                </div>
            </div>

            <div class="video-item">
                <img src="view/images/cat3.jpg" alt="Thumbnail">
                <div class="video-details">
                    <h3>🐱 Le secret de Mats</h3>
                    <p>Fitness-Muscu • 1,8 M de vues • il y a 11 jours</p>
                </div>
                <div class="video-actions">
                    <button>Supprimer</button>
                </div>
            </div>

            <div class="video-item">
                <img src="view/images/cat3.jpg" alt="Thumbnail">
                <div class="video-details">
                    <h3>🐱 Le secret de Mats</h3>
                    <p>Fitness-Muscu • 1,8 M de vues • il y a 11 jours</p>
                </div>
                <div class="video-actions">
                    <button>Supprimer</button>
                </div>
            </div>
            <div class="video-item">
                <img src="view/images/cat3.jpg" alt="Thumbnail">
                <div class="video-details">
                    <h3>🐱 Le secret de Mats</h3>
                    <p>Fitness-Muscu • 1,8 M de vues • il y a 11 jours</p>
                </div>
                <div class="video-actions">
                    <button>Supprimer</button>
                </div>
            </div>
            <div class="video-item">
                <img src="view/images/cat3.jpg" alt="Thumbnail">
                <div class="video-details">
                    <h3>🐱 Le secret de Mats</h3>
                    <p>Fitness-Muscu • 1,8 M de vues • il y a 11 jours</p>
                </div>
                <div class="video-actions">
                    <button>Supprimer</button>
                </div>
            </div>

            <!-- Add more video items as needed -->
        </div>
    </main>

    <aside>
        <ul>
            <li><a href="#">Vidéos "J'aime"</a></li>
            <li><a href="#">Vos vidéos</a></li>
            <li><a href="#">Se déconnecter</a></li>
        </ul>
    </aside>
</body>
</html>
