<div class="card">
    <div class="card-header">
        <span class="h3">Nouveau Salle</span>
        <a href="/DITI4\EXAMENDITI4S1/index.php" class="btn btn-warning offset-6">Liste des salles</a>
    </div>
    <div class="card-body">
        <form action="/DITI4\EXAMENDITI4S1/index.php?action=addSalle" method="POST">

            <div class="form-group">
                <label for="">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>

            <div class="row">
                <input type="submit" name="add" class="btn btn-primary" value="enregistrer">
            </div>
        </form>
    </div>
</div>