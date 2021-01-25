<?php

require_once __DIR__.'/../Model/Post.php';

if (empty($_GET['id'])) {
    // rediriger vers la page 404
    header('location:/Projet-PHP-MVC/404.php');
}


$post = Post::retreivePost($_GET['id']);

if (!$post) {
    header('location:/Projet-PHP-MVC/404.php');
}


require_once __DIR__.'/../View/post.php';

