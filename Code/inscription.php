<?php
    $BD = new PDO('mysql:host=127.0.0.1;dbname=projet-php', 'root', '');

    if(isset($_POST['form-submit']))
    {
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $email = htmlspecialchars($_POST['email']);
        $email2 = htmlspecialchars($_POST['email2']);
        $password = sha1($_POST['password']);
        $password2 = sha1($_POST['password2']);
        

        
        if(!empty($_POST['prenom']) AND !empty($_POST['nom']) AND !empty($_POST['pseudo']) AND !empty($_POST['email']) AND !empty($_POST['email2']) AND !empty($_POST['password']) AND !empty($_POST['password2']))
        {
            

            $nomlength = strlen($nom && $prenom && $pseudo);
            if($nomlength <= 255)
            {
                $reqpseudo = $BD->prepare("SELECT * FROM user WHERE pseudo = ?");
                $repseudo-> execute(array($pseudo));
                $pseudoexist = $reqpseudo->rowCount();
                if($pseudoexist == 0)
                {
                    if($email == $email2)
                    {
                        if(filter_var($email, FILTER_VALIDATE_EMAIL))
                        {
                            $reqmail = $BD->prepare("SELECT * FROM user WHERE email = ?");
                            $reqmail-> execute(array($email));
                            $emailexist = $reqmail->rowCount();
                            if($emailexist == 0)
                            {
                                if($password == $password2)
                                {
                                    $insertuser = $BD->prepare("INSERT INTO user(nom, prenom, pseudo, email, motdepasse, role) VALUES(?,?,?,?,?,?)");
                                    $insertuser->execute(array($nom, $prenom, $pseudo, $email, $password,1));
                                    $erreur = "Votre compte a été créé!";
                                }
                                else{
                                    $erreur = "Les mots de passe ne correspondent pas!";
                                }
                            }
                            else{
                                $erreur = "Adresse email dékà existante!";
                            }
                        }
                        else{
                            $erreur = "Votre adresse email n'est pas valide! ";
                        }
                    }
                    else{
                        $erreur = "Les emails ne correspondent pas!";
                    }
                }
                else{
                    $erreur = "Pseudo déjà existant!";
                }
            }

            else{
                $erreur = "Votre nom ne doit pas dépasser 255 caractères!";
            }
        }
        else
        {
            $erreur = "Tous les champs n'ont pas été complété!";
        }
    }


?>






<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>


    <link href="./styles/register.css" rel="stylesheet">
    <script type="text/javascript" src="monscript.js"></script>

</head>
<body>
    <div class="form-inscript">
        <div class="form-title"><h2>Inscription</h2></div>
        <form method="POST" action="">

            <div class="form-prenom">
                <label for="prenom">Prénom :</label>
                <input type="text" id="prenom" placeholder="Votre prénom" name="prenom" value="<?php if(isset($prenom)) {echo $prenom;} ?>"/>
            </div>
        
            <div class="form-nom">
                <label for="nom">Nom :</label>
                <input type="text" id="nom" placeholder="Votre nom" name="nom" value="<?php if(isset($nom)) {echo $nom;} ?>"/>
            </div>
        
            <div class="form-pseudo">
                <label for="pseudo">Pseudo :</label>
                <input type="text" id="pseudo" placeholder="Votre pseudo" name="pseudo" value="<?php if(isset($pseudo)) {echo $pseudo;} ?>"/>
            </div>
        
            <div class="form-email">
                <label for="email">Email :</label>
                <input type="email" id="email" placeholder="Votre email" name="email" value="<?php if(isset($email)) {echo $email;} ?>"/>
                <label for="email2">Confirmation de votre email :</label>
                <input type="email" id="email2" placeholder="Confirmation email" name="email2" value="<?php if(isset($email2)) {echo $email2;} ?>"/>
            </div>

            <div class="form-password">
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" placeholder="Votre mot de passe " name="password"/>
                <label for="password2">Confirmation Mot de passe :</label>
                <input type="password" id="password2" placeholder="Confirmation mot de passe " name="password2"/>
            </div>

            <div class="form-button">
                <input type="submit" name='form-submit' value="Je m'inscris"/>
            </div>
        </form>

        <?php
            if(isset($erreur))
            {
                echo $erreur;
            }
        ?>

    
    </div>






</body>
</html>