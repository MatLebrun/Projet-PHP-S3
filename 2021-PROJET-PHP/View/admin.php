<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<main>
    <?php for($i = 0; $i < sizeof($listUsers); ++$i) {?>

        <div class="line">
            <p>
                Pseudo <?= $listUsers[$i]->getPseudo(); ?> <br>
                Email <?= $listUsers[$i]->getMail(); ?>
            </p>


            <div>
                <form action="" method="post">
                    <input type="hidden" name="userId" value="<?=$listUsers[$i]->getId();?>">


                    <button type="submit" name="submit">Supprimer l'utilisateur</button>

                </form>
            </div>


        </div>


    <?php } ?>

</main>


</body>
</html>