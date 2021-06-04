listeObjet = $(".position-boutique .img");

$.ajax(".../service/boutiqueJS.php", {
  success: function (objet) {
    let objets = JSON.parse(objet);
    objets.forEach((element) => {
      listeObjet.append(
        "<div><img src='data:image;base64," +
          base64_encode(element.image) +
          "' alt='" +
          element.titre +
          "'></div>" +
          "<div class='desc'>" +
          element.titre +
          "' </div>" +
          "<div class='description-jeu'>" +
          element.description +
          "</div>" +
          "<div class='position-button'><button class='button-boutique-left' href='#'>" +
          element.prix +
          "€</button>" +
          "<button class='button-boutique-left' href='" +
          element.id_item +
          "'>Ajout Panier</button></div>"
      );
    });
  },
});
