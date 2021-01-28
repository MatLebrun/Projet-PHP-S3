<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Créer un post</title>
    <link rel="icon" href="../Public/pictures/Icon_Vanestar.png">
    
    <link href="../Public/CSS/common.css"  rel="stylesheet" />
    <link href="../Public/CSS/createpost.css" rel="stylesheet">
    <link href="../Public/CSS/header.css"  rel="stylesheet" />
    <link href="../Public/CSS/footer.css"  rel="stylesheet" />


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

        <div class="form-createpost">
        <?php if(!empty($_SESSION['erreur'])) {
                    echo $_SESSION['erreur'];
                    unset($_SESSION['erreur']);
                    }?>
            <form method="POST" action="" enctype="multipart/form-data">
                <h2 id="title-createpost">Créer un post</h2>

                <textarea type="text" id="message-post" placeholder="Ecrivez votre post" name="message"></textarea>
    
                <input type="file" name="photo">
            
    
                <input type="submit" value="Publier le post" name="mes_submit">
            
            </form>

        </div>

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