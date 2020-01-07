<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formulaire inscription</title>
    </head>
    <body>
    <h2>Formulaire d'inscription</h2>
    <form action="#" method="post" enctype="multipart/form-data">
        <h3>Détails personnels :</h3>
        <label for="nom">Nom :</label>
        <input type="text" name="nom" placeholder="écris ton nom" />
        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" placeholder="écris ton prénom" />
        <label for="email">Email :</label>
        <input type="text" name="email" placeholder="écris ton email" />
        <label for="tel">Numéro de téléphone :</label>
        <input type="tel" name="tel" placeholder="écris ton numéro" />
        <h3>Mot de passe :</h3>
        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" placeholder="écris ton mot de passe" />
        <label for="confirmemdp">Confirmer le mot de passe :</label>
        <input type="password" name="confirmemdp" placeholder="écris ton mot de passe" />

        <input type="submit" value="Envoyer" />
    </form>
    </body>
</html>