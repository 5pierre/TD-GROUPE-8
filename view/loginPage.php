<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="view/styles/stylelogin.css">
<body>
    <div class="bc">
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="" method="post" id="connexionform">
                <h1>Connexion</h1>
                <input type="hidden" name="action" value="connexion">
                Email : <input type="email" name="email" required> <br>
                Mot de passe  : <input type="password" name ="password" required> <br>
                <button type="submit">Se connecter</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="" method="post" id="inscriptionform">
                <h1>Inscription</h1>
                <input type="hidden" name="action" value="inscription">
                Email : <input type="email" name="email" required> <br>
                Nom : <input type="text" name="nom"required> <br>
                Mot de passe  : <input type="password" name ="password" required> <br>
                <button type="submit">S'inscrire</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Hello Foes</h1>
                    <p>Bienvenue dans notre communauté</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Welcome Friends</h1>
                    <p>Bon retour Parmis nous</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    </div>
    <h1 id="errorMessage" style="color: white; display: none;"></h1>

    <script>
    const container = document.getElementById('container');
    const registerBtn = document.getElementById('register');
    const loginBtn = document.getElementById('login');

    registerBtn.addEventListener('click', () => {
        container.classList.add("active");
    });
   
    </script>
</body>

</html>
