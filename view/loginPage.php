<link rel="stylesheet" href="./view/styles/styles.css">
<script>
    function toggleForm() {
        const loginForm = document.getElementById('login-form');
        const signupForm = document.getElementById('signup-form');
        loginForm.style.display = loginForm.style.display === 'none' ? 'block' : 'none';
        signupForm.style.display = signupForm.style.display === 'none' ? 'block' : 'none';
    }
</script>

<body>
    <main>
        <div id="login-form" class="form" style="display: block;">
            <h1>Connexion</h1>
            <form action="" method="post">
                <input type="hidden" name="action" value="connexion">
                email : <input type="email" name="email" required> <br>
                Mot de passe  : <input type="password" name ="password" required> <br>
                <button type="submit">Se connecter</button>
            </form>

            <div class="form-toggle">
                <button onclick="toggleForm()">Pas encore inscrit ? Inscrivez-vous</button>
            </div>
        </div>

        <div id="signup-form" class="form" style="display: none;">
            <h1>Inscription</h1>
            <form action="" method="post">
                <input type="hidden" name="action" value="inscription">
                email : <input type="email" name="email" required> <br>
                Nom : <input type="text" name="nom"required> <br>
                Mot de passe  : <input type="password" name ="password" required> <br>
                <button type="submit">S'inscrire</button>
            </form>
            <div class="form-toggle">
                <button onclick="toggleForm()">Déjà inscrit ? Connectez-vous</button>
            </div>
        </div>
    </main>
</body>

</html>







