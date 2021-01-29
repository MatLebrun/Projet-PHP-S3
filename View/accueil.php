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
                                <a href="../Controller/profil.php"><i class="fas fa-user"></i>  <span id="sign-in"> Profil</span></a>
                                <a href="../Controller/donation.php"><i class="fab fa-bitcoin"></i> <span id="sign-out"> Donation </span></a>
                                <a href="../Controller/deconnexion.php"><i class="fas fa-sign-out-alt"></i> <span id="sign-in"> Déconnexion</span></a>
                          <?php 
                            }
                        }
                         
                        if(!empty($_SESSION['user'])){
                            if($_SESSION['user']->getRole()==1){
                                ?>
                        <a href="../Controller/accueil.php" ><img id="logo-header" src="../Public/pictures/Icon_Vanestar.png" alt="logo"></a>
                        <a href="../Controller/accueil.php" class="active"><i class="fas fa-home"></i> <span id="home"> Accueil</span></a>
                        <a href="../Controller/search.php"><i id="search-icon" class="fas fa-search"></i></a>
                        <a href="../Controller/createPost.php"><i class="far fa-plus-square"></i> <span id="sign-in"> Créer un message</span></a>
                        <a href="../Controller/admin.php"><i class="fas fa-tools"></i> <span id="sign-out"> Administration </span></a>
                        <a href="../Controller/profil.php"><i class="fas fa-user"></i> <span id="sign-in"> Profil</span></a>
                        <a href="../Controller/deconnexion.php"><i class="fas fa-sign-out-alt"></i> <span id="sign-in"> Déconnexion</span></a>
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
                                <div class="post-message">
                                    <?php for ($i = 0; $i < sizeof($listPosts); ++$i) { ?>
                                            <p>
                                                <p id="message"><?= $listPosts[$i]->getMessage() ?></p>
                                                <?php if(strlen($listPosts[$i]->getImage()) !=0 ) {?></br>
                                                <img src="/2021-PROJET-PHP/Public/photoVanes/<?= $listPosts[$i]->getImage()?>">
                                                <?php }?>
                                            </p>
                                            <div id="post-reaction">
                                                <a id="lovebutton" href="../Controller/reaction.php?t=love&id=<?=$listPosts[$i]->getId()?>"><img id="love" src="../Public/pictures/love.png" alt="love"></a>
                                                <span class="emojiCount"><?= sizeof($listPosts[$i]->getListLove()) ?></span>
                                                <a id="swagbutton" href="../Controller/reaction.php?t=swag&id=<?=$listPosts[$i]->getId()?>"><img id="swag" src="../Public/pictures/swag.png" alt="swag"></a>
                                                <span class="emojiCount"><?= sizeof($listPosts[$i]->getListSwag()) ?></span>
                                                <a id="tropstylebutton" href="../Controller/reaction.php?t=trops&id=<?=$listPosts[$i]->getId()?>"><img id="tropstyle" src="../Public/pictures/tropstyle.png" alt="tropstyle"></a>
                                                <span class="emojiCount"><?= sizeof($listPosts[$i]->getListTropS()) ?></span>
                                                <a href="../Controller/reaction.php?t=cute&id=<?=$listPosts[$i]->getId()?>" id="cutebutton" ><img id="cute" src="../Public/pictures/cute.png" alt="cute"></a>
                                                <span class="emojiCount"> <?= sizeof($listPosts[$i]->getListCute()) ?></span>
                                                
                                            </div>
                                            
                                    <?php }?>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div id="sidebar-tag">
                    <form class="search-bar" method="get" action="/2021-PROJET-PHP/Controller/search.php">
                        <div id="search-logo"><i class="fas fa-search"></i></div>
                        <input id="search-input" type="text" placeholder="Recherche Tag" name="search">
                    </form>
                    <div id="top-tag">
                        <h3>Salut, moi c'est Vanessa. Je suis fan d'actualités.</br> Je suis vegan.</br> J'espère que vous me suivrez dans mes aventures sur le web. Allez bisous</h3>
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