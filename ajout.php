
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang=fr/>
    <title>Blog-Commentaires</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="css2.css">
</head>
<body>
    <?php
    require_once('connect.php');
    $jour=date('d');
    $mois=date('m');
    $annee=date('Y');
    $heure=date('H');
    $minute=date('i');
    $datee=$jour.'-'.$mois.'-'.$annee;
    $temps=$heure.':'.$minute;

    $req=$bdd->prepare('INSERT INTO billet(id, titre, contenu, dates, temps) VALUES(:id, :titre, :contenu, :dates, :temps)');
    $req->execute(array(
        'id'=>'',
        'titre'=>strip_tags($_POST['titre']),
        'contenu'=>strip_tags($_POST['contenu']),
        'dates'=>$datee,
        'temps'=>$temps
    ));
    ?>
    <center>
        <p class="ajout"><strong><font size="6px">Billet ajouté</font></strong></p>
        <?php
            require_once('connect.php');
            $req=$bdd->query('SELECT id, titre, contenu, dates, temps FROM billet ORDER BY id DESC');
            $donne=$req->fetch();
            echo '<center class="bloc"><br/><br/><br/><p class="titre"><font size=5px>'.strip_tags($donne['titre']).'<em><font size=3px> le '.strip_tags($donne['dates']).' à '.strip_tags($donne['temps']).'</font></em></font></p><br/><p class="contenu"><font size=4px>'.strip_tags($donne['contenu']).'<br/><br/><a href="commentaires.php?num='.strip_tags($donne['id']).'">Commentaires</a></font></p><br/><br/><br/><br/><a class="re" href="index.php">Retourner à l\'accueil</a><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/></center>';
        ?>
    </center>
</body>
</html>
