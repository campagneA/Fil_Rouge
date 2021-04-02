<?php
include 'header.php';
?>
<div class="row mt-5">
    <div class="col-md-4"></div>
    <div class="col-md-4 border border-3 border-danger back-color-black text-white">
        <form class="row col-md-12 px-4 py-3">
            <div class="mb-3">
                <label for="exampleDropdownFormEmail1" class="form-label">Adresse mail</label>
                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="email@example.com">
            </div>
            <div class="mb-3">
                <label for="exampleDropdownFormPassword1" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="********">
            </div>
            <div class="mb-3">
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dropdownCheck">
                    <label class="form-check-label" for="dropdownCheck">
                        Se rappeler de moi
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Connecter</button>
        </form>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item text-white" type="button" href="Inscription.php">Nouveau par ici? Nouveau Compte</a>
        <a class="dropdown-item text-white" href="#">Mot de passe oublier?</a>
    </div>
</div>
</body>

</html>