$('#profil_useri').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active')
  })
  $('#nav_profil li').each(() => {
    $('#nav_profil li').removeClass('active')
  })
  $('.profil_user_infos').addClass('active')
  $('#profil_useri').addClass('active')
})

$('#profil_moneyi').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active')
  })
  $('#nav_profil li').each(() => {
    $('#nav_profil li').removeClass('active')
  })
  $('.profil_money_infos').addClass('active')
  $('#profil_moneyi').addClass('active')
})

$('#profil_msgi').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active')
  })
  $('#nav_profil li').each(() => {
    $('#nav_profil li').removeClass('active')
  })
  $('.profil_msg_config').addClass('active')
  $('#profil_msgi').addClass('active')
})

$('#profil_parami').click((e) => {
  $('.cont_profil div').each(function (index) {
    $(this).removeClass('active')
  })
  $('#nav_profil li').each(() => {
    $('#nav_profil li').removeClass('active')
  })
  $('.profil_param_compte').addClass('active')
  $('#profil_parami').addClass('active')
})

// $('li').click((e) => {
// // })
// transform: scale(1.5);
//   transform: translate(100%, 0);
