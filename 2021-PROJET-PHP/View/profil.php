<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main>
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


    
</body>
</html>