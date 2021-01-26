<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bienvenue sur le réseau social de Vanestar" />

    <link href="styles/common.css" rel="stylesheet"/>
    <link href="styles/accueil.css" rel="stylesheet"/>
    <link href="styles/header.css"  rel="stylesheet" />
    <link href="styles/main.css"  rel="stylesheet"/>
    <link href="styles/menu-phone.css"  rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css" />
    <title>Accueil : Vanestarre</title>
    <link rel="icon" href="">   
</head>

<body>
    <div id="page">
        <div class="header">
            <div class="navbar">
                    <a href="accueil.php"><img id="logo" src="pictures/Icon_Vanestar.png" alt="logo"></a>
                    <a href="accueil.php"><i class="fas fa-home"></i> <span id="home"> Accueil</span></a>
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
                    <div id="new-post">
                        <input id="add-post" type="text" placeholder="Quoi de neuf ?">
                    </div>
                    <div id="space"></div>
                    <div id="post-area">

                    </div>
                </div>
                <div id="sidebar-tag">
                    <div class="search-bar">
                        <div id="search-logo"><i class="fas fa-search"></i></div>
                        <input id="search-input" type="text" placeholder="Recherche Tag" name="search">
                    </div>
                    <div id="top-tag">

                    </div>
                </div>
            </div>
        </div><!-- fin main -->
    </div>
    <div class="menu-phone">
        <a href="#home"><i class="fas fa-home"></i></a>
        <a href="#search"><i class="fas fa-search"></i></a>
        <a href="#notififications"><i class="far fa-bell"></i></a>
    </div>
</body>
</html>