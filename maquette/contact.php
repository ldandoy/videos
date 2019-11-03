<?php require_once 'header.php'; ?>
<?php require_once 'nav.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 title text-white text-center">
            <h1>Contact</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row justify-content-around mt-5">
        <div class="col-md-5">
            <img src="img/handshake-2009195_1920.png" alt="" class="img-thumbnail" />
        </div>
        <div class="col-md-5">
            <form action="" method="post" class="form p-4">
                <h3 class="text-center text-white">Envoyer un mail</h3>
                <br />
                <div class="form-group">
                    <label for="email" class="text-white">Adresse mail</label>
                    <input type="email" required class="form-control" id="email" aria-describedby="emailHelp" placeholder="Entrez votre email">
                </div>
                
                <div class="form-group">
                    <label for="sujet" class="text-white">Sujet</label>
                    <input type="text" required class="form-control" id="sujet" aria-describedby="sujetHelp" placeholder="Entrez votre sujet">
                </div>

                <div class="form-group">
                    <label for="textarea" class="text-white">Message</label>
                    <textarea class="form-control" required id="textarea" name="content" rows="6"></textarea>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-overconsulting btn-block">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php require_once 'footer.php'; ?>