<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bienvenue sur le réseau social de Vanestar" />

    <link href="styles/common.css" rel="stylesheet"/>
    <link href="styles/accueil.css" rel="stylesheet"/>
    <link href="styles/header-home.css"  rel="stylesheet"/>
    <link href="styles/main.css"  rel="stylesheet"/>
    <link href="styles/menu-phone.css"  rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <title>Accueil : Vanestarre</title>
    <link rel="icon" href="pictures/Icon_Vanestar.png">   
</head>

<body>
    <div id="page">
        <div id="header">
            <div id="navbar">
                    <a href="accueil.php" ><img id="logo-header" src="pictures/Icon_Vanestar.png" alt="logo"></a>
                    <a href="accueil.php" class="active"><i class="fas fa-home"></i> <span id="home"> Accueil</span></a>
                    <a href="search.php"><i id="search-icon" class="fas fa-search"></i></a>
                    <a href="login.php"><i class="fas fa-sign-in-alt"></i> <span id="sign-in"> Se connecter</span></a>
                    <a href="register.php"><i class="fas fa-user-plus"></i> <span id="sign-out"> S'inscrire </span></a>
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
                        <article id="post1">
                            <div id="message-content">
                                <div id="author-informations">
                                    <img id="profile-picture" src="https://t4.ftcdn.net/jpg/00/02/57/81/360_F_2578168_DeOXCijtQ4S6zdeAUz9fgCNWBCMWfC.jpg" alt="profile picture">
                                    <h2> Vanessa Star</h2>
                                </div>
                                <h3> Levi est vraiment trop beau, je veux l'épouser</h3>
                                <img id="img-post1" src="pictures/Bloody-Levi.jpg" alt="Bloody-Levi">
                                <div id="post-reaction">
                                    <button><img id="love" onclick="reaction(this)" src="pictures/love.png" alt="love"></button>
                                    <span class="emojiCount">3</span>
                                    <button><img id="swag" onclick="reaction(this)" src="pictures/swag.png" alt="swag"></button>
                                    <span class="emojiCount">2</span>
                                    <button><img id="tropstylé" onclick="reaction(this)" src="pictures/tropstylé.png" alt="tropstylé"></button>
                                    <span class="emojiCount">1</span>
                                    <button><img id="cute" onclick="reaction(this)" src="pictures/cute.png" alt="cute"></button>
                                    <span class="emojiCount">6</span>
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
                        <img id="logo-footer" src="./pictures/Logo_Vanestar.png" alt="Logo Vanestarre">
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