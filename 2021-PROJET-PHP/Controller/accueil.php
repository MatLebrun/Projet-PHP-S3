<?php
    require_once __DIR__.'/../Model/User.php';
    session_start();


$listPosts = Post::retreivePosts();




require_once __DIR__.'/../View/accueil.php';





