    <div class="card">
        <div class="card-header">
            <span class="h3">Modification de Salles</span>
            <a href="/DITI4\EXAMENDITI4S1/index.php" class="btn btn-warning offset-6">Liste des salles</a>
        </div>
        <div class="card-body">
            <form action="/DITI4\EXAMENDITI4S1/index.php?action=modifierSalle" method="POST">
                <input type="text" name="id" value="<?= $salle['id'] ?>">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" class="form-control" name="nom" value="<?= $salle['nom'] ?>">
                </div>
                <div class="row">
                    <input type="submit" name="modifierSalle" class="btn btn-primary" value="enregistrer">
                </div>
            </form>
        </div>
    </div>