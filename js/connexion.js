$(document).ready(() => {
  $('#login_btn').click(() => {
    const pseudo = $('#pseudo').val();
    const mdp = $('#mdp').val();
    console.log(pseudo);
    console.log(mdp);
    if (pseudo == '' || mdp == '') {
      alert("Vous n'avez pas rempli tout les champs");
    } else {
      $.ajax({
        url: 'connexion.php',
        method: 'POST',
        data: {
          connexion: 1,
          pseudoPHP: pseudo,
          mdpPHP: mdp,
        },
        success: (response) => {
          window.history.back();
          // window.location.replace('acceuil.php');
          // console.log(response);
        },
        dataType: 'text',
      });
    }
  });
});
