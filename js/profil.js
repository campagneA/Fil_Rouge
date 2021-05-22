$('#profil_useri').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active')
  })
  $('.profil_user_infos').addClass('active')
  $('#profil_useri img').css('transition')
})

$('#profil_moneyi').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active')
  })
  $('.profil_money_infos').addClass('active')
})
$('#profil_msgi').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active')
  })
  $('.profil_msg_config').addClass('active')
})
$('#profil_parami').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active')
  })
  $('.profil_param_compte').addClass('active')
})

// transform: scale(1.5);
//   transform: translate(100%, 0);
