<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 title text-white text-center">
            <h1>S'inscrire</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-around mt-5">
        <div class="col-md-5">
            <form method="post" action="login.php" class="form p-4">
                <h3 class="text-center text-white">Inscription</h3>
                <div class="form-group mt-4">
                    <label for="exampleInputEmail1" class="text-white">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        </div>
                        <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
               </div>
                
                <div class="form-group">
                    <label for="exampleInputEmail1" class="text-white">Confirmer</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
                        </div>
                        <input type="email" required class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-white">Mot de passe</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1" class="text-white">Confirmer</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="validationTooltipUsernamePrepend"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        </div>
                        <input type="password" required class="form-control" id="exampleInputPassword1" placeholder="Mot de passe">
                    </div>
                </div>
                <button type="submit" class="btn btn-overconsulting btn-block">Envoyer</button>
                <br />
                <div class="text-center"><a href="login.php" class="btn btn-default text-white">Déjà un compte ?</a></div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>