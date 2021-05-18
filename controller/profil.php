<?php
include_once(__DIR__ . "/../view/showHeader.php");
showHeader();
?>
<div class="page_profil">
  <div class="profil_form_div">
    <form action="">
      <fieldset>
        <label for="nom">Nom:</label>
        <input type="text" name="nom">
        <label for="prenom">Prenom:</label>
        <input type="text" name="prenom">
        <label for="mail">Courriel:</label>
        <input type="mail" name="mail">
        <label for="#adresse">Adresse:</label>
        <fieldset id="adresse">
          <label for="rue">Rue:</label>
          <input type="text" name="rue">
          <label for="codePostal">Code Postal:</label>
          <input type="number" name="codePostal">
          <label for="ville">Ville:</label>
          <input type="text" name="ville">
        </fieldset>
        <label for="numeroTel">numero de téléphone:</label>
        <input type="tel" name="numeroTel">
      </fieldset>

    </form>
  </div>
</div>

</body>

</html>