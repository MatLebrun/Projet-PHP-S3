<?php

require_once __DIR__.'/../Model/Post.php';


$listPosts = Post::retreivePosts();




require_once __DIR__.'/../View/index.php';





