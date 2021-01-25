<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inscrivez-vous pour bénéficier de toutes les fonctionnalités Vanestar !" />

    <title>Se Connecter</title>
    <link rel="icon" href="pictures/Icon_Vanestar.png">   



    <link href="styles/common.css"  rel="stylesheet" />
    <link href="styles/login.css" rel="stylesheet">
    <link href="styles/header.css"  rel="stylesheet" />
    <link href="styles/footer.css"  rel="stylesheet" />
    <link href="styles/menu-phone.css"  rel="stylesheet"/>
    
    <script type="text/javascript" src="monscript.js"></script>

</head>
<body>



<div id="page">
    <div id="main">
      <nav>
        <div class="header">
          <a href="./accueil.php">Vanestarre</a>
          <a>
            <input class="tagsearch" type="text" placeholder="Rechercher">
          </a>
          <a href="./login.php">Se connecter</a>
        </div>
      </nav>
</div>


<div id="contenu">
    <div id="posts">
        <h2>Connexion</h2>
    </div>
</div><!-- contenu -->


<main>
    <div class="form-login">
        <form method="POST" action="">
            <div class="form-email">
                <input type="email" id="email" placeholder="Votre email" name="email" value="<?php if(isset($email)) {echo $email;} ?>"/>
            </div>

            <div class="form-password">
                <input type="password" id="password" placeholder="Votre mot de passe " name="password"/>
            </div>

            <div class="form-button">
                <input type="submit" name='form-submit' value="Je me connecte !">
            </div>
        </form>
    </div>



</main>

<footer>
    <div class="footer">
        <img id="logo" src="./pictures/Logo_Vanestar.png" alt="">
        <p id="copyright">
            © 2021 Vanestarre | Tous droits réservés
        </p>
    </div>
</footer>


</body>
</html>