<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Récupération</title>
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

                <div class="form-recup">
    
                    <h2 id="title-recup">Récupération de mot de passe</h2>
    
                    <?php if($section == 'code') { ?>Un code de vérification vous a été envoyé par mail: <?= $_SESSION['mail'] ?>
                    <br/>
    
                    <form method="post">
                        <input type="text" placeholder="Code de vérification" name="verif_code"/><br/>
                        <input type="submit" value="Valider" name="verif_submit"/>
                    </form>
    
                    <?php } elseif($section == "changepassword") { ?>Nouveau mot de passe pour <?= $_SESSION['mail'] ?>
    
                    <form method="post">
                        <input type="password" placeholder="Nouveau mot de passe" name="change_mdp"/><br/>
                        <input type="password" placeholder="Confirmation du mot de passe" name="change_mdpc"/><br/>
                        <input type="submit" value="Valider" name="change_submit"/>
                    </form>
    
                    <?php } else { ?>
    
                    <form method="post">
                        <input type="email" placeholder="Votre adresse mail" name="mail"/><br/>
                        <input type="submit" value="Valider" name="recup_submit"/>
                    </form>
    
                    <?php } ?>
                    <?php if(isset($erreur)) { echo '<span style="color:red">'.$erreur.'</span>'; } else { echo ""; } ?>
                
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