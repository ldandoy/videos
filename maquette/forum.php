<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 title text-white text-center">
            <h1>FORUM</h1>
        </div>
    </div>
</div>

<?php require_once 'last_forum.php'; ?>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <h3>Listes des forums</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-4">
            <table class="table table-striped table-hover">
                <tbody>
                    <tr>
                        <th width="1%" scope="row">1</th>
                        <td><a href="cat_forum.php">PHP</a></td>
                        <td class="text-center" width="10%">10</td>
                        <td class="text-center" width="10%">Franck<br /><span class="small">12/02/2019</span></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><a href="cat_forum.php">Phyton</a></td>
                        <td class="text-center">10</td>
                        <td class="text-center" width="10%">Pierre<br /><span class="small">12/02/2019</span></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><a href="cat_forum.php">Ruby on Rails</a></td>
                        <td class="text-center">10</td>
                        <td class="text-center" width="10%">Alex<br /><span class="small">12/02/2019</span></td>
                    </tr>
                    <tr>
                        <th width="1%" scope="row">4</th>
                        <td><a href="cat_forum.php">PHP</a></td>
                        <td class="text-center" width="10%">10</td>
                        <td class="text-center" width="10%">Franck<br /><span class="small">12/02/2019</span></td>
                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td><a href="cat_forum.php">Phyton</a></td>
                        <td class="text-center">10</td>
                        <td class="text-center" width="10%">Pierre<br /><span class="small">12/02/2019</span></td>
                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td><a href="cat_forum.php">Ruby on Rails</a></td>
                        <td class="text-center">10</td>
                        <td class="text-center" width="10%">Alex<br /><span class="small">12/02/2019</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>