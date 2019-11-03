<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 title text-white text-center">
            <h1>FORUM: PHP</h1>
        </div>
    </div>
</div>

<?php require_once 'last_forum.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h3 class="float-left">Listes des sujets</h3>
            <div class="float-right">
                <a href="forum.php" class="btn btn-sm btn-default">Retour</a>
                <a href="sujet_forum.php" class="btn btn-sm btn-overconsulting">Ajouter un sujet</a>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table table-striped table-hover">
                <thead class="thead-light">
                    <tr>
                        <th width="1%" scope="row">#</th>
                        <th>Sujets</th>
                        <th class="text-center" width="10%">Résponses</th>
                        <th class="text-center" width="10%">Dernier</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td width="1%" scope="row">1</td>
                        <td><a href="sujet_forum.php">Comment installer PHP</a><br /><span class="small">Franck</span></td>
                        <td class="text-center" width="10%">10</td>
                        <td class="text-center" width="10%">Franck<br /><span class="small">12 heures</span></td>
                    </tr>
                    <tr>
                        <td scope="row">2</td>
                        <td><a href="sujet_forum.php">Phyton</a><br /><span class="small">Franck</span></td>
                        <td class="text-center">5</td>
                        <td class="text-center" width="10%">Pierre<br /><span class="small">8 jours</span></td>
                    </tr>
                    <tr>
                        <td scope="row">3</td>
                        <td><a href="sujet_forum.php">Ruby on Rails</a><br /><span class="small">Franck</span></td>
                        <td class="text-center">10</td>
                        <td class="text-center" width="10%">Alex<br /><span class="small">8 jours</span></td>
                    </tr>
                    <tr>
                        <td width="1%" scope="row">4</td>
                        <td><a href="sujet_forum.php">PHP</a><br /><span class="small">Franck</span></td>
                        <td class="text-center" width="10%">10</td>
                        <td class="text-center" width="10%">Franck<br /><span class="small">8 jours</span></td>
                    </tr>
                    <tr>
                        <td scope="row">5</td>
                        <td><a href="sujet_forum.php">Phyton</a><br /><span class="small">Franck</span></td>
                        <td class="text-center">10</td>
                        <td class="text-center" width="10%">Pierre<br /><span class="small">8 jours</span></td>
                    </tr>
                    <tr>
                        <td scope="row">6</td>
                        <td><a href="sujet_forum.php">Ruby on Rails</a><br /><span class="small">Franck</span></td>
                        <td class="text-center">10</td>
                        <td class="text-center" width="10%">Alex<br /><span class="small">8 jours</span></td>
                    </tr>
                </tbody>
            </table>
            <div class="mt-4 text-right">
                <a href="forum.php" class="btn btn-sm btn-default">Retour</a>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>