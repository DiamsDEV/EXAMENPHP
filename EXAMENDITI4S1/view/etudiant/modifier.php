<div class="card">
    <div class="card-header">
        <span class="h3">Modification</span>
        <a href="/DITI4\EXAMENDITI4S1/index.php" class="btn btn-warning offset-6">Liste des etudiants</a>
    </div>
    <div class="card-body">
        <form action="/DITI4\EXAMENDITI4S1/index.php?action=modifier" method="POST">
            <input type="text" name="id" value="<?= $etudiant['id'] ?>">
            <div class="form-group">
                <label for="">Prénom</label>
                <input type="text" class="form-control" name="prenom" value="<?= $etudiant['prenom'] ?>">
            </div>
            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom" value="<?= $etudiant['nom'] ?>">
            </div>
            <div class="form-group">
                <label for="">Classe</label>
                <input type="text" class="form-control" name="classe" value="<?= $etudiant['classe'] ?>">
            </div>
            <div class="row">
                <input type="submit" name="modifier" class="btn btn-primary" value="enregistrer">
            </div>
        </form>
    </div>
</div>