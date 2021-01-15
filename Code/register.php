<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>


    <link href="/styles/register.css" rel="stylesheet">
    <script type="text/javascript" src="monscript.js"></script>

</head>
    <body>

    <h1>fzfkkk</h1>


        <form action="data-processing.php" method="post">
            <input type="text" name="identifiant" placeholder="Identifiant"> <br>
            
            <input type="radio" name="sexe" value="F" id="Femme">femme
            <input type="radio" name="sexe" id="H" value="Homme">homme <br>

            <input type="email" name="email" placeholder="Email"> <br>

            <input type="password" name="password" placeholder="Mot de passe">
            <input type="password" name="password2" placeholder="Répetez votre mot de passe">

            <input type="text" name="telephone" placeholder="Téléphone"> <br>

            <select name="pays">
                <option value="France">France</option>
                <option value="France">Russie</option>
                <option value="France">Espagne</option>
            </select> <br>

            <input type="checkbox" name="cgu">Conditions générales d'utilisation <br>

            <button type="submit" name="submit">S'inscrire</button>

        </form>

    
</body>
</html>
