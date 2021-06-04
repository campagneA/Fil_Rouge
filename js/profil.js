$('#profil_useri').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active');
  });
  $('#nav_profil li').each(() => {
    $('#nav_profil li').removeClass('active');
  });
  $('.profil_user_infos').addClass('active');
  $('#profil_useri').addClass('active');
});

$('#profil_moneyi').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active');
  });
  $('#nav_profil li').each(() => {
    $('#nav_profil li').removeClass('active');
  });
  $('.profil_money_infos').addClass('active');
  $('#profil_moneyi').addClass('active');
});

$('#profil_msgi').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active');
  });
  $('#nav_profil li').each(() => {
    $('#nav_profil li').removeClass('active');
  });
  $('.profil_msg_config').addClass('active');
  $('#profil_msgi').addClass('active');
});

$('#profil_parami').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active');
  });
  $('#nav_profil li').each(() => {
    $('#nav_profil li').removeClass('active');
  });
  $('.profil_param_compte').addClass('active');
  $('#profil_parami').addClass('active');
});

$(document).ready(() => {
  $.ajax({
    url: 'profil.php',
    method: 'POST',
    data: {
      give_user: 1,
    },
    success: (user) => {
      // window.location.replace('acceuil.php');
      console.log('test   ' + user);
      const pUser = JSON.parse(user);
      console.log(pUser);
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
$(document).ready(function () {
  $('.profil_input').change((e) => {
    const newVal = e.target.value;
    const columnName = e.target.name;
    console.log(e.target.value);
    console.log(e.target.name);
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
  });
});
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
