<?php

require_once __DIR__.'/../Model/Post.php';
require_once __DIR__.'/../Model/User.php';
require_once __DIR__.'/../Model/Reaction.php';
session_start();


if (empty($_GET['search'])) {
    header('location:/Controller/accueil.php');
    exit();
}


$message = $_GET['search'];


$listTags = str_replace([',',':','.',';'], ' ', $message);
$listTags = explode(' ', $listTags);

$listPosts = Post::retreiveTagPost($listTags);


require_once __DIR__.'/../View/searchResult.php';


?>