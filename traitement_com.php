<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" lang=fr/>
    <title>Blog-Commentaires</title>
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="css2.css">
</head>
<body>
    <center>
        <p class="ajout"><strong><font size=10px>Billet</font></strong></p>
        <?php
            session_start();
            require_once('connect.php');
            $request=$bdd->prepare('SELECT id, titre, contenu, dates, temps FROM billet WHERE id=:nombre');
            $request->execute(array(
                'nombre'=>$_SESSION['nombre']
            ));
            $donnee=$request->fetch();
            echo '<center class="bloc"><p class="titre"><font size=5px>'.strip_tags($donnee['titre']).'<em><font size=3px> le '.strip_tags($donnee['dates']).' à '.strip_tags($donnee['temps']).'</font></em></font></p><br/><p class="contenu"><font size=4px>'.strip_tags($donnee['contenu']).'<br/><br/></font></p><br/><br/><br/><br/><br/></center>';
        ?>
        <hr/>
        <center class="fform">
            <p><strong><font size=7px>Commentaires</font></strong></p>
            <br/>
            <p><strong><font size="5px">Ajouter un commentaire à ce billet</font></strong></p>
            <form method="post" action="traitement_com.php">
                <p>
                    <label for="auteur"><strong>Auteur</strong></label><br/>
                    <input type="text" name="auteur" id="auteur"/><br/><br/>
                    <label for="commentaire"><strong>Commentaire</strong></label><br/>
                    <input type="text" name="commentaire" id="commentaire"/><br/><br/>
                    <input type="submit" value="Commenter"/><br/><br/><br/><br/>
                </p>
            </form>
        
            <?php
                require_once('connect.php');
                $jour=date('d');
                $mois=date('m');
                $annee=date('Y');
                $heure=date('H');
                $minute=date('i');
                $datee=$jour.'-'.$mois.'-'.$annee;
                $temps=$heure.':'.$minute;

                $req1=$bdd->prepare('INSERT INTO commentaire(id, id_billet, auteur, commentaire, dates, temps) VALUES(:id, :id_billet, :auteur, :commentaire, :dates, :temps)');
                $req1->execute(array(
                    'id'=>'',
                    'id_billet'=>strip_tags($_SESSION['nombre']),
                    'auteur'=>strip_tags($_POST['auteur']),
                    'commentaire'=>strip_tags($_POST['commentaire']),
                    'dates'=>$datee,
                    'temps'=>$temps
                ));
                $req2=$bdd->prepare('INSERT INTO billet');
                $req2=$bdd->prepare('SELECT id, id_billet, auteur, commentaire, dates, temps FROM commentaire WHERE id_billet=:num ORDER BY id DESC LIMIT 0, 10');
                $req2->execute(array(
                    'num'=>strip_tags($_SESSION['nombre'])
                ));
                while($donnees=$req2->fetch()){
                    echo '<p class="titre"><font size=5px>'.strip_tags($donnees['auteur']).'<em><font size=3px> le '.strip_tags($donnees['dates']).' à '.strip_tags($donnees['temps']).'</font></em></font></p><br/><p class="contenu"><font size=4px>'.strip_tags($donnees['commentaire']).'<br/><br/></font></p><br/><br/>';
                }

                $req2->closeCursor();
            ?>
            <p><strong><font size="4px"><a class="ajt" href="index.php">Retour à la page d'acceuil</a></font></strong></p>
            <br/><br/>
        </center>
    </center>
<body>
</html>