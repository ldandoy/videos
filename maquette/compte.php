<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 title text-white text-center">
            <h1>Mon compte</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-around mt-5">
        <div class="col-md-5">
            <div class="card">
                <h5 class="card-header">Modifier votre mot de passe</h5>
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="">Mot de passe</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1" class="">Confirmer</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                            </div>
                            <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-overconsulting btn-block">Envoyer</button>
                </div>
            </div>

            <div class="card mt-5">
                <h5 class="card-header">Vos dernières réponses</h5>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td width="1%" scope="row">1</td>
                                <td><a href="sujet_forum.php">Comment instal...</a></td>
                                <td class="text-right" width="50%">Franck - <span class="small">12 heures</span></td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td><a href="sujet_forum.php">Phyton</a></td>
                                <td class="text-right" width="10%">Pierre - <span class="small">8 jours</span></td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td><a href="sujet_forum.php">Ruby on Rails</a></td>
                                <td class="text-right" width="10%">Alex - <span class="small">8 jours</span></td>
                            </tr>
                            <tr>
                                <td width="1%" scope="row">4</td>
                                <td><a href="sujet_forum.php">PHP</a></td>
                                <td class="text-right" width="10%">Franck - <span class="small">8 jours</span></td>
                            </tr>
                            <tr>
                                <td scope="row">5</td>
                                <td><a href="sujet_forum.php">Phyton</a></td>
                                <td class="text-right" width="10%">Pierre - <span class="small">8 jours</span></td>
                            </tr>
                            <tr>
                                <td scope="row">6</td>
                                <td><a href="sujet_forum.php">Ruby on Rails</a></td>
                                <td class="text-right" width="10%">Alex - <span class="small">8 jours</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <h5 class="card-header">Formation suivit</h5>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td width="1%" scope="row">1</td>
                                <td><a href="formation.php">PHP</a></td>
                                <td class="text-right" width="50%"><a href="video.php" class="btn btn-sm btn-overconsulting">Reprendre</a></td>
                            </tr>
                            <tr>
                                <td width="1%" scope="row">1</td>
                                <td><a href="formation.php">PHP</a></td>
                                <td class="text-right" width="50%"><a href="video.php" class="btn btn-sm btn-overconsulting">Reprendre</a></td>
                            </tr>
                            <tr>
                                <td width="1%" scope="row">1</td>
                                <td><a href="formation.php">PHP</a></td>
                                <td class="text-right" width="50%"><a href="video.php" class="btn btn-sm btn-overconsulting">Reprendre</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card mt-5">
                <h5 class="card-header">Les vidéos favories</h5>
                <div class="card-body">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td width="1%" scope="row">1</td>
                                <td width="50%"><a href="video.php">Installation de...</a></td>
                                <td class="text-right" width="50%"><span class="small">12 mins</span></td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td><a href="video.php">Installation de...</a></td>
                                <td class="text-right"><span class="small">8 mins</span></td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td><a href="video.php">Installation de...</a></td>
                                <td class="text-right"><span class="small">30 mins</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>