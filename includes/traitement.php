<!--
    Cette page traite les informations envoyées via le formulaire de create.inc.php.
    Elle correspond à <form action="./includes/traitement.php" method="post">.
-->

<?php
    require_once('bdd.inc.php');

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

    // echo '<pre>';
    // var_dump($bdd);
    // var_dump($req);
    // echo '</pre>';
?>