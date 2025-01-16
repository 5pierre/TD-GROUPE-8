<link rel="stylesheet" href="view/styles/styleFAQ.css">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<body>
<header x-data="{ showPopup: false }" class="header">
        <input type="text" placeholder="Rechercher" class="search-input">
    
        <button @click="showPopup = ! showPopup" class="upload-button">
        + Uploder
        </button>

        <div x-show="showPopup" @click.outside="showPopup = false" class="popup">
            <form action="" method="post" class="popup-form">
                <label>
                    Liens :
                    <input type="url" name="liens" required class="popup-input">
                </label>
                <label>
                    Description :
                    <input type="text" name="description" required class="popup-input">
                </label>
                <label>
                    Title :
                    <input type="text" name="title" required class="popup-input">
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
    <div x-data="{ open: false }">
        <button @click="open = ! open">Toggle</button>
 
        <div x-show="open" @click.outside="open = false">Contents...</div>
    </div>
    <main id="faq-page">
        <!-- <h1>Questions Fréquemment Posées</h1>
        <section class="faq-section">
            <h2>1. Comment fonctionne Rent a Cat ?</h2>
            <p>C'est simple ! Vous choisissez un chat, vous planifiez une date, et un adorable félin vient chez vous pour illuminer votre journée. Pas besoin de nettoyer la litière après !</p>
        </section>
        <section class="faq-section">
            <h2>2. Les chats sont-ils bien traités ?</h2>
            <p>Évidemment ! Tous nos chats reçoivent les meilleurs soins, des câlins sur mesure, et des tonnes de friandises. Ils nous jugeraient trop si ce n’était pas le cas.</p>
        </section>
        <section class="faq-section">
            <h2>3. Puis-je adopter un chat après l'avoir loué ?</h2>
            <p>Absolument ! Si c'est un coup de foudre, nous vous aidons dans le processus d'adoption. Nos chats adorent trouver une famille permanente.</p>
        </section>
        <div class="cta">
            <a href="?page=cat" class="cta-button">Retourner à la sélection des chats</a>
        </div> -->
    </main>
</body>
