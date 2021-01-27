<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>



    <main>
        <p>Les derniers articles</p>


        <?php for ($i = 0; $i < sizeof($listPosts); ++$i) { ?>
            <article>
                <p>
                    <?= $listPosts[$i]->getMessage() ?>
                    <?php if(strlen($listPosts[$i]->getImage()) !=0 ) {?></br>
                    <img src="/2021-PROJET-PHP/Public/photoVanes/<?= $listPosts[$i]->getImage()?>">
                    <?php }?>
                </p>
                

                <div class="reactions">
                <p>
                    CuteReaction : <?= sizeof($listPosts[$i]->getListCute()) ?>
                </p>
                <p>
                    TropStyleReaction : <?= sizeof($listPosts[$i]->getListTropS()) ?>
                </p>
                <p>
                    SwagReaction : <?= sizeof($listPosts[$i]->getListSwag()) ?>
                </p>
                <p>
                    LoveReaction : <?= sizeof($listPosts[$i]->getListLove()) ?>
                </p>
            </div>

            
            </article>


            <hr>



        <?php } ?>

    
    </main>



    
</body>
</html>