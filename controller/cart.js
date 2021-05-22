
$.each($('td .plus'), () => {
  // console.log(opt.val())
  $('td .plus').click(() => { //$(this) = la td
    const parent = $('td .plus').parent()
    let amount = parseInt(parent.children('span').text(), 10)
    amount++
    parent.children('span').text(amount)

  })
})

$.each($('td .minus'), () => {
  $('td .minus').click(() => {
    const parent = $('td .minus').parent()
    let amount = parseInt(parent.children('span').text(), 10)
    // console.log(amount)
    // console.log(parent.children('span').text())
    amount--
    amount < 0 ? amount = 0 : amount = amount
    parent.children('span').text(amount)

  })
})
