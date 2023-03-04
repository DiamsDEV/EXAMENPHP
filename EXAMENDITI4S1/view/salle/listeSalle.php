<div class="row">
    <span class="h3">Liste des salles</span>
    <a href="/DITI4\EXAMENDITI4S1/index.php?view=addSalle" class="btn btn-primary offset-7">Nouveau</a>
</div>

<div class="row">
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Nom</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($salles as $c) {?>
                <tr>
                    <td><?= $c["id"]?></td>
                    <td><?= $c["nom"]?></td>

                    <td>
                        <a href="/DITI4\EXAMENDITI4S1/index.php?viewSalle=updateSalle&id=<?= $c['id']?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="/DITI4\EXAMENDITI4S1/index.php?action=supprimerSalle&id=<?= $c['id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>