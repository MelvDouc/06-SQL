<?php

    $recup = $bdd->prepare('SELECT * FROM apprenants');
    $recup->execute();
    // var_dump($recup);
    // var_dump($recup->fetchAll());
?>

<h2>Liste</h2>

<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th>N°</th>
            <th>Prénom</th>
            <th>Code postal</th>
            <th>Ville</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php while($donnees = $recup->fetch()){ ?>
                <tr>
                    <td><?= $donnees['id'] ?></td>
                    <td><?= $donnees['prenom']?></td>
                    <td><?= $donnees['codepostal']?></td>
                    <td><?= $donnees['ville']?></td>
                    <td class="text-center">
                        <a href="" class="btn btn-sm btn-primary">Modifier</a>
                        <a href="./includes/traitement.php?delete" class="btn btn-sm btn-danger">Supprimer</a>
                    </td>
                </tr>        
            <?php } ?>
    </tbody>
</table>