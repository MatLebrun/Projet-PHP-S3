<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bienvenue sur le réseau social de Vanestar" />
    <link href="../Public/CSS/common.css" rel="stylesheet"/>
    <link href="../Public/CSS/accueil.css" rel="stylesheet"/>
    <link href="../Public/CSS/header-home.css"  rel="stylesheet"/>
    <link href="../Public/CSS/main.css"  rel="stylesheet"/>
    <link href="../Public/CSS/menu-phone.css"  rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <title>Accueil : Vanestarre</title>
    <link rel="icon" href="pictures/Icon_Vanestar.png">   
</head>
<body>
    <div id="page">
        <div id="header">
            <div id="navbar">
                    <?php 
                        if(!empty($_SESSION['user'])){
                            if($_SESSION['user']->getRole()==0){
                                ?>
                                <a href="../Controller/accueil.php" ><img id="logo-header" src="../Public/pictures/Icon_Vanestar.png" alt="logo"></a>
                                <a href="../Controller/accueil.php" class="active"><i class="fas fa-home"></i> <span id="home"> Accueil</span></a>
                                <a href="../Controller/search.php"><i id="search-icon" class="fas fa-search"></i></a>
                                <a href="../Controller/prof.php"><i class="fas fa-sign-in-alt"></i> <span id="sign-in"> Profile</span></a>
                                <a href="../Controller/inscription.php"><i class="fas fa-user-plus"></i> <span id="sign-out"> S'inscrire </span></a>
                          <?php 
                            }
                        }
                         
                        if(!empty($_SESSION['user'])){
                            if($_SESSION['user']->getRole()==1){
                                ?>
                        <a href="../Controller/accueil.php" ><img id="logo-header" src="../Public/pictures/Icon_Vanestar.png" alt="logo"></a>
                        <a href="../Controller/accueil.php" class="active"><i class="fas fa-home"></i> <span id="home"> Accueil</span></a>
                        <a href="../Controller/search.php"><i id="search-icon" class="fas fa-search"></i></a>
                        <a href="../Controller/createPost.php"><i class="fas fa-sign-in-alt"></i> <span id="sign-in"> Créer un message</span></a>
                        <a href="../Controller/admin.php"><i class="fas fa-user-plus"></i> <span id="sign-out"> Administration </span></a>
                        <?php 
                            }
                        }
                    

                  
                        else{?>
                        <a href="../Controller/accueil.php" ><img id="logo-header" src="../Public/pictures/Icon_Vanestar.png" alt="logo"></a>
                        <a href="../Controller/accueil.php" class="active"><i class="fas fa-home"></i> <span id="home"> Accueil</span></a>
                        <a href="../Controller/search.php"><i id="search-icon" class="fas fa-search"></i></a>
                        <a href="../Controller/connexion.php"><i class="fas fa-sign-in-alt"></i> <span id="sign-in"> Se connecter</span></a>
                        <a href="../Controller/inscription.php"><i class="fas fa-user-plus"></i> <span id="sign-out"> S'inscrire </span></a>
                        <?php 
                       }?> 














            </div>
        </div>
        <div id="main">
            <div id="content-and-tag">
                <div id="middle-content">
                    <div id="top">
                        <h1>Accueil</h1>
                    </div>
                    <div id="space"></div>
                    <div id="post-area">
                        <article class="post">
                            <div class="message-content">
                                <div id="author-informations">
                                    <img id="profile-picture" src="https://t4.ftcdn.net/jpg/00/02/57/81/360_F_2578168_DeOXCijtQ4S6zdeAUz9fgCNWBCMWfC.jpg" alt="profile picture">
                                    <h2> Vanessa Star</h2>
                                </div>
                                <h3>Jpp, Erwin le goat me manque tellement, Sasageyo</h3>
                                <img class="img-post" src="pictures/Erwin-Beard.png" alt="Erwin-Beard">
                                <div id="post-reaction">
                                    <button id="lovebutton"><img id="love" src="../Public/pictures/love.png" alt="love"></button>
                                    <span class="emojiCount">0</span>
                                    <button id="swagbutton"><img id="swag" src="../Public/pictures/swag.png" alt="swag"></button>
                                    <span class="emojiCount">3</span>
                                    <button id="tropstylebutton"><img id="tropstyle" src="../Public/pictures/tropstyle.png" alt="tropstyle"></button>
                                    <span class="emojiCount">1</span>
                                    <button id="cutebutton"><img id="cute" src="../Public/pictures/cute.png" alt="cute"></button>
                                    <span class="emojiCount">0</span>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div id="sidebar-tag">
                    <div class="search-bar">
                        <div id="search-logo"><i class="fas fa-search"></i></div>
                        <input id="search-input" type="text" placeholder="Recherche Tag" name="search">
                    </div>
                    <div id="top-tag">
                    </div>
                    <div id="footer">
                        <img id="logo-footer" src="../Public/pictures/Logo_Vanestar.png" alt="Logo Vanestarre">
                        <p>
                        © 2021 Vanestarre | Tous droits réservés
                        <p>
                    </div>
                </div>
            </div>
        </div><!-- fin main -->
    </div>
    <div class="menu-phone">
        <a href="accueil.php"><i class="fas fa-home"></i></a>
        <a href="#search"><i class="fas fa-search"></i></a>
        <a href="register.php"><i class="fas fa-user-plus"></i></a>
        <a href="login.php"><i class="fas fa-sign-in-alt"></i></a>
    </div>
</body>
</html>