<link rel="stylesheet" href="view/styles/styleFAQ.css">
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<body>
<header x-data="{ showPopup: false }" class="header">
        <!-- <input type="text" placeholder="Rechercher" class="search-input"> -->
    
        <button @click="showPopup = ! showPopup" class="upload-button">
        + Uploder
        </button>

        <div x-show="showPopup" @click.outside="showPopup = false" class="popup">
            <form action="" method="post" class="popup-form">
                <img src="view/images/Cathublogo.png" class="cathub">
                <h1>Ceci est site web destinée aux adultes</h1>
                <p>Ce site Web contient du matériel avec des restrictions d'âge, y compris de la nudité et des représentations explicites de l'activité sexuelle. En vous inscrivant, vous affirmez que vous avez au moins 18 ans ou l'âge de la majorité dans la juridiction à partir de laquelle vous accédez au site Web et que vous consentez à visionner du contenu sexuellement explicite.</p>
                <div class="buttoncontainer">
                    <button @click="showPopup = false" class="submit-button">
                        J'ai 18 ans ou plus - ENTRER
                    </button>
                    <button @click="showPopup = false" class="close-button">
                        J'ai moins de 18 ans - QUITTER
                    </button>
                </div>
                <p>Notre page sur le contrôle parental explique comment vous pouvez facilement
                bloquer l'accès à ce site.</p>
            </form>
        </div>
    </header>
    <main id="faq-page">
    </main>
</body>
