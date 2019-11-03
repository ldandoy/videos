<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 title text-white text-center">
            <h1>Mot de passe oublié</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-around mt-5">
        <div class="col-md-5">
            <form method="post" action="" class="form p-4">
                <h3 class="text-center text-white">Récupérer votre mot de passe</h3>
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1" class="text-white">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        </div>
                        <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                </div>
                <button type="submit" class="btn btn-overconsulting btn-block">Entrer</button>
                <br />
                <div class="text-center"><a href="login.php" class="btn btn-default text-white">Retour</a></div>
            </form>
        </div>
        <div class="col-md-7">
            <img src="img/iceland-4587174_1920.jpg" alt="" class="img-thumbnail" />
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>