<h2>Ajouter</h2>

<form action="./includes/traitement.php" method="post">

    <div class="form-group">
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" placeholder="Ex. : Jean-Pierre" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="codepostal">Code postal</label>
        <input type="number" name="codepostal" placeholder="75000" class="form-control">
    </div>
    
    <div class="form-group">
        <label for="ville">Ville</label>
        <input type="text" name="ville" placeholder="Paris" class="form-control">
    </div>
    
    <div class="text-end"><button class="btn btn-dark" type="submit">Envoyer</button></div>

</form>