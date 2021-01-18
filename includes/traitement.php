<!--
    Cette page traite les informations envoyées via le formulaire de create.inc.php.
    Elle correspond à <form action="./includes/traitement.php" method="post">.
-->

<?php
    require_once('bdd.inc.php');

    /* CRUD - CREATE */
    if(isset($_POST['create'])) {
        $req = $bdd->prepare(
        'INSERT INTO apprenants (prenom, codepostal, ville) 
        VALUES (?, ?, ?)'
        );
        $req->execute(array(
            $_POST['prenom'],
            $_POST['codepostal'],
            $_POST['ville']
        ));
        header('Location: ../index.php?read'); // redirige vers read après l'envoi du formulaire
    }

    /* CRUD - UPDATE */
    else if(isset($_POST['update'])) {

        header('Location: ../index.php?read');
    }

    /* CRUD - DELETE */
    else if(isset($_GET['delete'])) {
        $id = $_GET['delete'];
        $req = $bdd->prepare('DELETE FROM apprenants WHERE id =' . $id);
        $req->execute();
        header('Location: ../index.php?read');
    }

    /* SI RIEN */
    else {
        header('Location: ../index.php');
    }

    // echo '<pre>';
    // var_dump($bdd);
    // var_dump($req);
    // echo '</pre>';
?>