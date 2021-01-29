<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="../Public/CSS/common.css" rel="stylesheet"/>
    <link href="../Public/CSS/profil.css" rel="stylesheet"/>
    <link href="../Public/CSS/footer.css"  rel="stylesheet" />
    <link href="../Public/CSS/header.css"  rel="stylesheet" />
    <link rel="icon" href="../Public/pictures/Icon_Vanestar.png"> 
    
</head>
<body>
        <div id="menu">
            <div id="main">
                <nav>
                    <div class="header">
                        <a href="./accueil.php">Accueil</a>
                    </div>
                </nav>
            </div>
        </div>
        <main>
        <h2 id="title-profil">Profil</h2>
        <p>
            Bienvenue <?= $_SESSION['user']->getPseudo() ?>
        </p>

        <p>
            Modifier vos informations
        </p>
        <form action="" method="post">
            <input type="email" name="mail" value="<?=$_SESSION['user']->getMail()?>" >
            <button type="submit" name="submit" value="editMail">Modifier l'email</button>
        </form>

        <form action="" method="post">
            <input type="text" name="pseudo" value="<?=$_SESSION['user']->getPseudo()?>">
            <button type="submit" name="submit" value="editPseudo">Modifier le pseudo</button>
        </form>


        <form action="" method="post">
            <input type="password" name="pwd1">
            <input type="password" name="pwd2">

            <button type="submit" name="submit" value="editPwd">Modifier le mot de passe</button>
        </form>

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