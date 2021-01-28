<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Inscrivez-vous pour bénéficier de toutes les fonctionnalités Vanestar !" />

        <title>S'inscrire</title>
        <link rel="icon" href="../Public/pictures/Icon_Vanestar.png">   

        <link href="../Public/CSS/common.css"  rel="stylesheet" />
        <link href="../Public/CSS/register.css" rel="stylesheet">
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

            <div class="form-inscript"> 

                <form method="POST" action="">
                    <h2 id="title-login">Inscription</h2>

                    <div class="form-prenom">
                        <input type="text" id="prenom" placeholder="Votre prénom" name="prenom" value="<?php if(isset($prenom)) {echo $prenom;} ?>"/>
                    </div>
                
                    <div class="form-nom">
                        <input type="text" id="nom" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)) {echo $nom;} ?>"/>
                    </div>
                
                    <div class="form-pseudo">
                        <input type="text" id="pseudo" placeholder="Votre pseudo" name="pseudo" value="<?php if(isset($pseudo)) {echo $pseudo;} ?>"/>
                    </div>
                
                    <div class="form-email">
                        <input type="email" id="email" placeholder="Votre email" name="mail" value="<?php if(isset($email)) {echo $email;} ?>"/>
                    </div>

                    <div class="form-password">
                        <input type="password" id="password" placeholder="Votre mot de passe " name="password" minlength="6"/>
                    </div>

                    <div class="form-button">
                        <input type="submit" name='form-submit' value="Je m'inscris !">
                    </div>

                    <a href="../Controller/connexion.php" id="to-login">J'ai déjà un compte</a>
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