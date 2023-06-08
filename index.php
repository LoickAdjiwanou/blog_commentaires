<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang=fr/>
    <title>Blog</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="css2.css">
</head>
<body>
    <center class="page">
        <p class="blog"><srong><font size=10px>BIENVENU SUR MON BLOG</font></strong></p><br/>
        <p><strong><font size=6px>Derniers billets du Blog:</font></strong></p>
        <?php
            require_once('connect.php');
            $req=$bdd->query('SELECT id, titre, contenu, dates, temps FROM billet');
            while($donnees=$req->fetch()){
                echo '<p class="titre"><font size=5px>'.strip_tags($donnees['titre']).'<em><font size=3px> le '.strip_tags($donnees['dates']).' à '.strip_tags($donnees['temps']).'</font></em></font></p><br/><p class="contenu"><font size=4px>'.strip_tags($donnees['contenu']).'<br/><br/><a class="com" href="commentaires.php?num='.strip_tags($donnees['id']).'">Commentaires</a></font></p><br/><br/><br/>';
            }
            $req->closeCursor();
        ?>
        <strong><font size="4px"><a class="ajt" href="formulaire.php">Ajouter un billet</a></font></strong><br/><br/><br/>
    </center>
<body>
</html>