<?php
    require_once __DIR__.'/../Model/User.php';
    require_once __DIR__.'/../Model/Recuperation.php';
    session_start();

    if(isset($_POST['submit'],$_POST['mail'])){
        if(!empty ($_POST['mail'])){
            $mail = htmlspecialchars($_POST['mail']);
            if(filter_var($mail,FILTER_VALIDATE_EMAIL)){
                if(User::checkMail($_POST['mail'])){
                    $_SESSION['mail'] =$mail;
                    $code = "";
                    for( $i=0 ; $i < 8 ; ++$i){
                        $code .= mt_rand(0,9);
                    }
                    Recuperation::mailRecup($mail,$code);
                    $header="MIME-Version: 1.0\r\n";
                    $header.='From:"[VOUS]"<vanesstare@mail.com>'."\n";
                    $header.='Content-Type:text/html; charset="utf-8"'."\n";
                    $header.='Content-Transfer-Encoding: 8bit';
                    $message = '
                    <html>
                    <head>
                     <title>Récupération de mot de passe - Votresite</title>
                     <meta charset="utf-8" />
                    </head>
                    <body>
                     <font color="#303030";>
                         <div align="center">
                        <table width="600px">
                             <tr>
                             <td>
                                
                                <div align="center">Bonjour <b>'.User::getNamePseudo($mail).'</b>,</div>
                                Voici votre code de récupération: <b>'.$code.'</b>
                                A bientôt sur <a href="#">Votre site</a> !
                                
                             </td>
                             </tr>
                             <tr>
                             <td align="center">
                                <font size="2">
                                 Ceci est un email automatique, merci de ne pas y répondre
                                </font>
                             </td>
                             </tr>
                        </table>
                         </div>
                     </font>
                    </body>
                    </html>
                    ';
                    mail($mail,"Récupération de mot de passe - Vanesstarre",$message,$header);
                    header("Location:/recuperation.php?section=code");
                }
                else{$erreur = "Cette adresse mail n'est pas enregistrer";}
            }
            else{$erreur = "Adresse mail non valide";}
        }
        else{$erreur = "Veuillez entrer votre adresse mail";}
    }

    if(isset($_POST['verif_submit'],$_POST['verif_code'])){
        if(!empty($_POST['verif_code'])){
            $verif_code = htmlspecialchars($_POST['verif_code']);
            if(Recuperation::verifCode($_SESSION['mail'],$code) == 1){
                Recuperation::upDbWithRecup($_SESSION['mail']);
                header("Location:/recuperation.php?section=changepassword");
            }else{
                $erreur = "Code invalide";
            }
        } else{
            $erreur = "Veuillez entrer votre code de confirmation ";
        }
    }

    if(isset($_POST['change_submit'])){
        if(isset($_POST['change_mdp'],$_POST['change_mdpc'])){
            
            if(Recuperation::verifConfirm($_SESSION['mail']) == 1){
                $mdp = htmlspecialchars($_POST['change_mdp']);
                $mdpc = htmlspecialchars($_POST['change_mdpc']);
                if(!empty($mdp) AND !empty($mdpc)){
                    if($mdp == $mdpc){
                        $mdp = password_hash($mdp, PASSWORD_BCRYPT);
                        User::changePassword($mdp,$_SESSION['mail']);
                        Recuperation::delMail($_SESSION['mail']);
                        header("Location:/connexion.php/");
                    } else {
                        $erreur = "Vos mots de passe ne correspondent pas";
                    }
                }else{
                    $erreur = "Veuillez remplir les deux champs";
                }
            
            }else{
                $erreur = "Veuillez valider le mail hrâce au code de récupérations";
            }
        }else{
           $erreur = "Veuillez remplir les deux champs";
        }
    }



    if(isset($erreur)){echo $erreur;}