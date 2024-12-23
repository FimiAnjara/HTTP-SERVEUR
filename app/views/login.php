<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Cadeaux de Noël</title>
    <link rel="stylesheet" href="http://localhost:8000/inc/css/login.css">
</head>

<body>
    <div class="login-container">
        <div class="logo">
            <!-- <img src="http://localhost:8000/Image/logo.jpeg" alt="Logo Cadeaux de Noël"> -->
            NoelGift
        </div>

        <h1>Connexion</h1>

       <form method="POST" action="/Accueil">
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Mot de passe" required>
            <?php if (isset($error)): ?>
                <div class="error"><?= $error ?></div>
            <?php endif; ?>
            <button type="submit">Log in</button>
        </form>

        <p>No account ? <a href="/register">Sign in here</a>.</p>
    </div>
</body>

</html>