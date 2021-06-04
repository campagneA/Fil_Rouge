<?php
session_start();
include_once(__DIR__ . '/../view/showHeader.php');
include_once(__DIR__ . '/../view/showNav.php');
showHeader();
showNav();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>finalisation achat</title>
</head>

<body>
  <label for="achat">Finaliser votre commande:</label>

  <h5>Recapitulatif:</h5>
  d'abord vérifier que l'user est bien connecté.
  <br>


  insertion de ce que l'user veut acheter, avec un bouton sur chaque ligne pour supprimer, modifier la quantité de l'item..
  <br>
  formulaire d'achat avec entrée des informations de paiements si elles ne sont pas enregistrées,
  <br>
  affichage du lieu de livraison, default = adresse enregistré, modifiable avec un "points de relai près de chez vous"
  <table name="achat">
    <tr>
      <th>img</th>
      <th>Produit</th>
      <th>Quantité</th>
      <th>Prix</th>
    </tr>
    <tr>
      <td>truc</td>
      <td>truc</td>
      <td>truc</td>
      <td>truc</td>
    </tr>
  </table>

</body>

</html>