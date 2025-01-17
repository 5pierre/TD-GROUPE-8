<link rel="stylesheet" href="view/styles/styledeconnexion">
<body>
    <main id="unauthorized-page">
        <div class="unauthorized-container">
            <h1>Vous venez de vous déconnecter</h1>
            <p>Merci d'avoir visité notre site et au plaisir de vous revoir</p>
            <a href="?page=acceuil" class="cta-button">Quitter</a>
        </div>
    </main>
</body>

<?php
session_destroy();
exit;
?>