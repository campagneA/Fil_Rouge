$(document).ready(() => {
  $('#login_btn').click(() => connection());
  $('#pseudo')
    .add('#mdp')
    .keyup((e) => {
      if (e.keyCode === 13) {
        connection();
      }
    });

  function connection() {
    const pseudo = $('#pseudo').val();
    const mdp = $('#mdp').val();
    const csrf_token = $('#csrf_token').val();
    console.log(pseudo);
    console.log(mdp);
    // alert(csrf_token);
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
          csrf_token: csrf_token,
        },
        success: (response) => {
          document.referrer == ''
            ? window.history.replace('acceuil.php')
            : window.history.back();
          // console.log('Response:' + response);
        },
        dataType: 'text',
      });
    }
  }
});
