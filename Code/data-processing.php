<?php
session_start();

    $pseudo = $_POST["pseudo"];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $action = $_POST['action'];





    if($action == 'mailer'){

        $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
        $message .= 'Email : ' . $email . PHP_EOL;
        $message .= 'Mot de passe : ' . PHP_EOL . $password;

        if(mail($email, "confirmation", $message)){
            echo "Votre mail a bien été envoyé.";

            
            $_SESSION["mailok"] = "Mail envoyé.";
            header("location: /Projet-PHP-S2/Code/accueil.php");  
        }
    }
    else{
    echo '<br/><strong>Bouton non géré !</strong><br/>';
    }
?>

















<!-- <?php

require __DIR__.'/base.php';

date_default_timezone_set('UTC');

print_r($_POST);

if (isset($_POST['submit'])) {
    
    $stmt = $database->prepare('INSERT INTO `user` (`pseudo`, `nom`, `prenom`, `email`, `password`, `inscription_date`) VALUES (NULL, ?, ?, ?, ?, NOw())');
    $result = $stmt->execute(array(
        $_POST['pseudo'],
        $_POST['nom'],
        $_POST['prenom'],
        $_POST['email'],
        password_hash($_POST['password'], PASSWORD_DEFAULT),
    ));


    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'Email : ' . $_POST['email'] . PHP_EOL;
    mail($_POST['email'], 'Inscription', $message);


    echo 'Bonjour <u>'.$_POST['identifiant'].'</u><br>
          Vous êtes désormais inscrit.';

} else {

    header('location:/Projet-PHP-S2/Code');

}

?> -->