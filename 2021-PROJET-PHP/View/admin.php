<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration</title>

    <link rel="icon" href="../Public/pictures/Icon_Vanestar.png">   

    <link href="../Public/CSS/common.css"  rel="stylesheet" />
    <link href="../Public/CSS/recuperation.css" rel="stylesheet">
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

            <div class="form-admin">
            
                <h2 id="title-admin">Administration</h2>

                <?php for($i = 0; $i < sizeof($listUsers); ++$i) {?>

                    <div class="line">
                        <p>
                            Pseudo <?= $listUsers[$i]->getPseudo(); ?> <br>
                            Email <?= $listUsers[$i]->getMail(); ?>
                        </p>

                        <div>
                            <form action="" method="post">
                                <input type="hidden" name="userId" value="<?=$listUsers[$i]->getId();?>">

                                <button type="submit" name="submit">Supprimer l'utilisateur</button>
                            </form>
                        </div>
                    </div>

                <?php } ?>
                
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