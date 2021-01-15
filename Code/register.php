<?php
        session_start();
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





    <!--    Menu Principal du site  -->
    <nav id="menu_deroulant"> 
      <ul id="deroulant">
        <li>
          <a href="">accueil</a>
        <li>
          <a href="">login</a>
        <li>
            <a href="">sinscrire</a>
        <li>
            <a href="">a propos</a>   
        <li>
            <a href="">conditions</a></li>
      </ul>
    </nav>



















    <h1>fzfkkk</h1>


        <form action="data-processing.php" method="post">
            <input type="text" name="pseudo" placeholder="Pseudo"> <br>
            <input type="text" name="nom" placeholder="Nom"> <br>
            <input type="text" name="prenom" placeholder="Prénom"> <br>

            <input type="email" name="email" placeholder="Email"> <br>

            <input type="password" name="password" placeholder="Mot de passe">
            <input type="password" name="password2" placeholder="Répetez votre mot de passe"> <br>

            <button type="submit" name="action" value="mailer">S'inscrire</button>
        

        </form>

    <?php
        if (isset($_SESSION["mailok"])){
            echo $_SESSION["mailok"];
            unset($_SESSION["mailok"]);
        }
    ?>
    
</body>
</html>
