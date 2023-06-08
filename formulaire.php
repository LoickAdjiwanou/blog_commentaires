<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang=fr/>
    <title>Blog-Commentaires</title>
    <link rel="stylesheet" href="css2.css">
</head>
<body>
    <center>
        <p class="ajout"><strong><font size="8px">Ajout d'un biller</font></strong></p><br/>
        <form method="post" class="formul" action="ajout.php">
            <p>
                <label for="titre"><strong><font size="6px">Titre du Billet</font></strong><br/></label>
                <input type="text" name="titre" id="titre" required="required"/><br/><br/><br/><br/><br/>
                <label for="contenu"><strong><font size="6px">Contenu</font></strong><br/></label>
                <input type="text" name="contenu" id="contenu"  required="required"/><br/><br/><br/><br/><br/>
                <input type="submit" value="Valider le billet"/><br/><br/>
            </p>
            <br/><a class="retour" href="index.php">Retourner à l'accueil</a><br/><br/><br/><br/>
        </form>
        <br/><br/>
        
    </center>
</body>
</html>