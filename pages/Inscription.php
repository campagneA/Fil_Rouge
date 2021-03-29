<?php
include 'header.php';
?>
<div class="row">
    <div class="col-md-4"></div>
    <form class="row col-lg-4 g-3 p-3 back-color-black text-white border border-3 border-danger">
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <label for="validationNom" class="form-label">Pseudo</label>
            <input type="text" class="form-control" id="validationNom" required>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <label for="validationNom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="validationNom" placeholder="Nom" required>
        </div>
        <div class="col-lg-6">
            <label for="validationPrenom" class="form-label">Prenom</label>
            <input type="text" class="form-control" id="validationPrenom" placeholder="Prenom" required>
        </div>
        <div class="col-lg-6">
            <label for="validationAge" class="form-label">Date de Naissance</label>
            <input type="date" class="form-control" id="validationAge" required>
        </div>
        <div class="col-lg-6">
            <label for="validationPays" class="form-label">Pays</label>
            <select class="form-select" id="validationPays" required>
                <option selected disabled value="">Choisir</option>
                <option>France</option>
                <option>...</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label for="validationMail" class="form-label">Adresse E-Mail</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                <input type="text" class="form-control" id="validationMail" aria-describedby="inputGroupPrepend2" placeholder="exemple@exemple.com" required>
            </div>
        </div>
        <div class="col-lg-6">
            <label for="validationMail" class="form-label">Confirmer E-Mail</label>
            <div class="input-group">
                <span class="input-group-text" id="inputGroupPrepend2">@</span>
                <input type="mail" class="form-control" id="validationMail" aria-describedby="inputGroupPrepend2" placeholder="exemple@exemple.com" required>
            </div>
        </div>
        <div class="col-lg-6">
            <label for="validationVille" class="form-label">Votre Ville</label>
            <input type="text" class="form-control" id="validationVille" placeholder="Paris" required>
        </div>
        <div class="col-lg-6">
            <label for="validationNRue" class="form-label">Numero Rue / Allée</label>
            <input type="text" class="form-control" id="validationNRue" placeholder="1, rue ..." required>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <label for="validationCP" class="form-label">Code Postal</label>
            <input type="text" class="form-control" id="validationCP" placeholder="12345" required>
        </div>
        <div class="col-lg-3"></div>
        <div class="col-lg-6">
            <label for="validationMDP" class="form-label">Mot de Passe</label>
            <input type="password" class="form-control" id="validationMDP" placeholder="*****" required>
        </div>
        <div class="col-lg-6">
            <label for="validationMDP" class="form-label">Confirmer MDP</label>
            <input type="password" class="form-control" id="validationMDP" placeholder="*****" required>
        </div>
        <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                <label class="form-check-label" for="invalidCheck2">
                    J'accepte les termes et les conditions
                </label>
            </div>
        </div>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Inscription</button>
        </div>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item text-white" type="button" href="profil.php">Déjà un compte? Connecte toi ici !</a>
    </form>
    <div class="col-md-4"></div>
</div>
</body>

</html>