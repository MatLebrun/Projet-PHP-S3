<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inscrivez-vous pour bénéficier de toutes les fonctionnalités Vanestar !" />

    <title>Se Connecter</title>
    <link rel="icon" href="../Public/pictures/Icon_Vanestar.png">   

    <link href="../Public/CSS/common.css"  rel="stylesheet" />
    <link href="../Public/CSS/login.css" rel="stylesheet">
    <link href="../Public/CSS/header.css"  rel="stylesheet" />
    <link href="../Public/CSS/footer.css"  rel="stylesheet" />
    
</head>
    <body>

        <div id="menu">
            <div id="main">
                <nav>
                    <div class="header">
                        <a href="./accueil.php">Vanestarre</a>
                    </div>
                </nav>
            </div>
        </div>

        <main>

            <div class="form-login">

                <form method="POST" action="">
                    <h2 id="title-login">Connexion</h2>
                    <div class="form-email">
                        <input type="email" id="email" placeholder="Votre email" name="email" value="<?php if(isset($email)) {echo $email;} ?>"/>
                    </div>

                    <div class="form-password">
                        <input type="password" id="password" placeholder="Votre mot de passe " name="password"/>
                    </div>

                    <div>
                        <a href="RecuperationV.php" id="forgot-password">Mot de passe oublié</a>
                    </div>

                    <div class="form-button">
                        <input type="submit" name='form-submit' value="Je me connecte !">
                    </div>

                    <a href="ViewInscription.php" id="to-register">Je n'ai pas de compte</a>
                </form>

            </div>

        </main>

        <footer>
            <div class="footer">
                <img id="logo" src="../Public/pictures/Logo_Vanestar.png" alt="">
                <p id="copyright">
                    © 2021 Vanestarre | Tous droits réservés
                </p>
            </div>
        </footer>

    </body>
</html>