let toggleNavStatus = false;

let toggleNav = function () {
  let getSideBar = document.querySelector('.nav_sidebar');
  let getSideBarUl = document.querySelector('.nav_sidebar ul');
  let getSideBarLinks = document.querySelectorAll('.nav_sidebar ul li a');
  //montrer l'ul quand onclick;
  if (toggleNavStatus === false) {
    getSideBarUl.style.visibility = 'visible';
    getSideBar.style.width = '35vw';

    let arrayLength = getSideBarLinks.length;
    for (var i = 0; i < arrayLength; i++) {
      getSideBarLinks[i].style.opacity = '1';
    }
    toggleNavStatus = true;
  } else if (toggleNavStatus === true) {
    getSideBar.style.width = '0px';

    let arrayLength = getSideBarLinks.length;
    for (var i = 0; i < arrayLength; i++) {
      getSideBarLinks[i].style.opacity = '0';
    }
    getSideBarUl.style.visibility = 'visible';
    toggleNavStatus = false;
  }
};

document.addEventListener('DOMContentLoaded', (event) => {
  icone_profil.addEventListener('mouseover', () => {
    const div = document.createElement('div');
    div.setAttribute('id', 'dop_div');
    const ul = document.createElement('ul');
    const li = document.createElement('li');
    const a = document.createElement('a');
    a.innerHTML('Se connecter');
    li.appendChild(a);
    const li2 = document.createElement('li');
    const a2 = document.createElement('a');
    a2.innerHTML('Creer un compte');
    li2.appendChild(a2);
    ul.appendChild(li);
    ul.appendChild(li2);
    div.appendChild(ul);
  });
});
