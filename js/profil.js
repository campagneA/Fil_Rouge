$('#profil_useri').click((e) => {
  removeClass();
  $('#infos').addClass('active');
  $('#profil_useri').addClass('active');
});

$('#profil_moneyi').click((e) => {
  removeClass();
  $('.profil_money_infos').addClass('active');
  $('#profil_moneyi').addClass('active');
});

$('#profil_msgi').click((e) => {
  removeClass();
  $('#infos').addClass('active');
  $('#profil_msgi').addClass('active');
});

$('#profil_parami').click((e) => {
  removeClass();
  $('.profil_param_compte').addClass('active');
  $('#profil_parami').addClass('active');
});

function removeClass() {
  $('li').each(() => {
    $('li').removeClass('active');
  });
  $('.content_div').each(function (index) {
    $(this).removeClass('active');
  });
}
// function fadde(id) {
//   var box = document.getElementById(id);
//   box.style.opacity = box.style.opacity == 1 ? 0 : 1;
// }

//recuperation des infos utilisateur dans la bdd
$(document).ready(() => {
  $.ajax({
    url: 'profil.php',
    method: 'POST',
    data: {
      give_user: 1,
    },
    success: (user) => {
      // console.log('test   ' + user);
      const pUser = JSON.parse(user);
      // console.log(pUser);
      // console.log(pUser['id_user']);
      $('input[name="nom"]').val(pUser['nom']);
      $('input[name="prenom"]').val(pUser['prenom']);
      $('input[name="mail"]').val(pUser['mail']);
      $('input[name="mail_secours"]').val(pUser['mail_secours']);
      $('input[name="pseudo"]').val(pUser['pseudo']);
      $('input[name="tel"]').val(pUser['tel']);
      $('input[name="rue"]').val(pUser['rue']);
      $('input[name="ville"]').val(pUser['ville']);
      $('input[name="date_naissance"]').val(pUser['date_naissance']);
      $('input[name="add_date"]').val(pUser['add_date']);
      $('input[name="adr_livraison"]').val(pUser['adr_livraison']);
      $('input[name="adr_facturation"]').val(pUser['adr_facturation']);
      $('input[name="carte_credit"]').val(pUser['carte_credit']);
      $('input[name="img_profil"]').val(pUser['img_profil']);
      $('textarea[name="about_me"]').val(pUser['about_me']);

      if (pUser['annonces_commerciales'] == true) {
        $('input[name="annonces_commerciales"]').prop('checked', true);
      } else {
        $('input[name="annonces_commerciales"]').prop('checked', false);
      }
      if (pUser['notifs_forum'] == true) {
        $('input[name="notifs_forum"]').prop('checked', true);
      } else {
        $('input[name="notifs_forum"]').prop('checked', false);
      }
    },
    dataType: 'text',
  });
});
//insertion du changement dans la bdd
$(document).ready(function () {
  $('.profil_input').change((e) => {
    const newVal = e.target.value;
    const columnName = e.target.name;
    console.log(e.target.value);
    console.log(e.target.name);
    if (checkChange(newVal, columnName)) {
      $.ajax({
        url: 'profil.php',
        method: 'POST',
        data: {
          update_user: 1,
          columnName: columnName,
          newVal: newVal,
        },
        success: (user) => {
          console.log('update request sent ' + user);
        },
      });
    }
  });
});

//function pour ckecker la validité du changement
function checkChange(newVal, columnName) {
  if (columnName == 'mail') {
    if (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(newVal) == false) {
      console.log('in here');
      $('#email_msg')
        .text('email invalide')
        .css('opacity', '1')
        .css('color', 'crimson');
      return false;
    } else {
      $('#email_msg')
        .text('changement pris en compte')
        .css('opacity', '1')
        .css('color', 'green');
      return true;
    }
  } else if (columnName == 'mail_secours') {
    if (/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(newVal) == false) {
      console.log('in here');
      $('#mail_secours')
        .text('email invalide')
        .css('opacity', '1')
        .css('color', 'crimson');
      return false;
    } else {
      $('#mail_secours')
        .text('changement pris en compte')
        .css('opacity', '1')
        .css('color', 'green');
      return true;
    }
  } else if (columnName == 'nom') {
    if (newVal == '') {
      $('#nom')
        .text('le nom doit être renseigné')
        .css('opacity', '1')
        .css('color', 'crimson');
      return false;
    } else if (newVal.length > 35) {
      $('#nom')
        .text('le nom ne doit pas dépasser 35 caractères')
        .css('opacity', '1')
        .css('color', 'crimson');
      return false;
    } else if (/[^a-zA-Z\-]/.test(newVal)) {
      $('#nom')
        .text('nom invalide')
        .css('opacity', '1')
        .css('color', 'crimson');
      return false;
    } else {
      $('#nom')
        .text('changement pris en compte')
        .css('opacity', '1')
        .css('color', 'green');
      return true;
    }
  } else if (columnName == 'prenom') {
    if (newVal == '') {
      $('#prenom')
        .text('le prenom doit être renseigné')
        .css('opacity', '1')
        .css('color', 'crimson');
      return false;
    } else if (newVal.length > 35) {
      $('#prenom')
        .text('le prenom ne doit pas dépasser 35 caractères')
        .css('opacity', '1')
        .css('color', 'crimson');
      return false;
    } else if (/[^a-zA-Z\-]/.test(newVal)) {
      $('#prenom')
        .text('prenom invalide')
        .css('opacity', '1')
        .css('color', 'crimson');
      return false;
    } else {
      $('#prenom')
        .text('changement pris en compte')
        .css('opacity', '1')
        .css('color', 'green');
      return true;
    }
  }
}
//si chekcbox est checkée
$(document).ready(function () {
  $('input[type=checkbox]').change(function () {
    const columnName = this.name;
    console.log(columnName);
    $.ajax({
      url: 'profil.php',
      method: 'POST',
      data: {
        update_user_checkbox: 1,
        columnName: columnName,
      },
      success: (user) => {
        console.log('update request sent ' + user);
      },
    });
  });
});
