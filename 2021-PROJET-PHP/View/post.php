<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>

    <main>
    
        <div id="post">
            <p>
                <?= $post->message() ?>
            </p>

            <div class="reactions">
                <p>
                    CuteReaction : <?= sizeof($post->getListCute()) ?>
                </p>
                <p>
                    TropStyleReaction : <?= sizeof($post->getListTropS()) ?>
                </p>
                <p>
                    SwagReaction : <?= sizeof($post->getListSwag()) ?>
                </p>
                <p>
                    LoveReaction : <?= sizeof($post->getListLove()) ?>
                </p>
            </div>

        </div>
    </main>

    
</body>
</html>