<style>

#unauthorized-page {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f3f3f3;
}

#unauthorized-page .unauthorized-container {
    text-align: center;
    background-color: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
}

#unauthorized-page h1 {
    color: #ff4b4b;
    margin-bottom: 20px;
}

#unauthorized-page p {
    color: #666;
}

#unauthorized-page .cta-button {
    text-decoration: none;
    color: white;
    background-color: #ff6b6b;
    padding: 10px 20px;
    border-radius: 5px;
}

#unauthorized-page .cta-button:hover {
    background-color: #ff4b4b;
}

</style>
<body>
    <main id="unauthorized-page">
        <div class="unauthorized-container">
            <h1>Vous n'êtes pas connecté</h1>
            <p>Veuillez vous connecter pour accéder à cette page.</p>
            <a href="?page=login" class="cta-button">Se connecter</a>
        </div>
    </main>
</body>
