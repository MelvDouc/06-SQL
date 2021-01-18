<?php
    $id = $_GET['update'];
    $attente = $bdd->query('SELECT * FROM apprenants WHERE id = ' . $id);
    $donnees = $attente->fetch();
    var_dump($attente);
    var_dump($donnees);
?>

<h2>Modifier</h2>

<form action="./includes/traitement.php" method="post">

    <input type="hidden" name="id" value="<?= $donnees['id'] ?>">

    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" placeholder="Ex. : Jean-Pierre" class="form-control" value="<?= $donnees['prenom'] ?>">
    </div>
    
    <div class="form-group">
        <label for="codepostal">Code postal</label>
        <input type="number" name="codepostal" placeholder="75000" class="form-control" value="<?= $donnees['codepostal'] ?>">
    </div>
    
    <div class="form-group">
        <label for="ville">Ville</label>
        <input type="text" name="ville" placeholder="Paris" class="form-control" value="<?= $donnees['ville'] ?>">
    </div>
    
    <div class="text-end">
        <button class="btn btn-dark" name="update" type="submit">Modifier</button>
    </div>

</form>