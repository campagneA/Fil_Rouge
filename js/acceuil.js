const acceuil = document.querySelector('.acceuil');
const slides = document.querySelectorAll('.slide'); //=>node list

let activeSlide = 0;

// console.log(acceuil);
// console.log(slides);

// https://www.toolsqa.com/javascript/javascript-arrow-function/#:~:text=An%20Arrow%20Function%20in%20JavaScript%20is%20a%20syntactically,function%20or%20other%20code%20where%20they%20are%20defined.

setBgToAcceuil();

function setBgToAcceuil() {
  acceuil.style.backgroundImage = slides[activeSlide].style.backgroundImage;
  //l'image de fond la slide est aussi celle d'acceuil;
}

function setActiveSlide() {
  slides.forEach((slide) => slide.classList.remove('active'));

  slides[activeSlide].classList.add('active');
  //la valeur de let activeSlide determine quelle slide est utilisée
}

// The easiest way to execute a function repeatedly is to use the global method setInterval()
// setInterval() takes two arguments — the first one is the function to be called repeatedly and the second one is the time interval between the calls (given in milliseconds).
// For example, if we wanted to call a function someFunc() after every 5 seconds we would write the following:
// setInterval(someFunc, 5000);

// => creer une fonction play;

// function playSlides() {
//     activeSlide++;

//     if (activeSlide > slides.length - 1) {
//         activeSlide = 0;
//     }
//     setBgToAcceuil()
//     setActiveSlide();
// }
// setInterval(playSlides, 6000);

//faire en sorte que la fonction s'arrete lorsque la souris est sur .slider_container

const slider = document.querySelector('.slider_container');

function playSlides() {
  activeSlide++;

  if (activeSlide > slides.length - 1) {
    activeSlide = 0;
  }
  setBgToAcceuil();
  setActiveSlide();
  setActiveLabel();
  setActiveSlideText();
}
let clear;

slider.addEventListener('mouseout', (event) => {
  // console.log("Mouse out");
  clear = setInterval(playSlides, 8000);
  // console.log(clear);
});
slider.addEventListener('mouseover', (event) => {
  // console.log("Mouse in");
  clearInterval(clear);
});

// matcher le label et la slide; activeSlide commence à 0

const labels = document.querySelectorAll('.navigation label');
// labels.forEach(label => console.log(label.id));
function setActiveLabel() {
  labels.forEach((label) => label.classList.remove('active_label'));
  labels[activeSlide].classList.add('active_label');
}

let vidID = '';
labels.forEach((label) =>
  label.addEventListener('click', () => {
    // console.log('click');
    activeSlide = label.id - 1;
    setBgToAcceuil();
    setActiveSlide();
    setActiveLabel();
    setActiveSlideText();
  })
);

//recuperer les slide_text;

slides_texts = document.querySelectorAll('.slide_text');
// console.log(slides_texts);

function setActiveSlideText() {
  slides_texts.forEach((text) => text.classList.remove('active_text'));
  slides_texts[activeSlide].classList.add('active_text');
}

const trailerBtn = document.querySelectorAll('.trailer');
const closeBtn = document.querySelector('.closeBtn');
const modal = document.querySelector('.modal');

console.log(trailerBtn);

trailerBtn.forEach((btn) =>
  btn.addEventListener('click', () => {
    openModal();
    player.playVideo();
  })
);
closeBtn.addEventListener('click', () => {
  // console.log('here');
  closeModal();
});

function openModal() {
  modal.style.display = 'block';
}
function closeModal() {
  modal.style.display = 'none';
}

/********************************************************************** Embed Youtube */

var tag = document.createElement('script');
const stop = document.querySelector('#closeBtn');
const start = document.getElementById('#trailer1');
stop.addEventListener('click', () => {
  player.stopVideo();
});
/**https://www.youtube.com/watch?v=JX8NAZAhS_s&t=57s */
tag.src = 'https://www.youtube.com/iframe_api';
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

function getVidID(activeSlide) {
  const trailerList = [
    'JX8NAZAhS_s',
    'Yr76jZTERlk',
    'w5fCIhI0FyE',
    'JX8NAZAhS_s',
  ];
  vidID = trailerList[activeSlide];
  return vidID;
}

function onYouTubeIframeAPIReady() {
  player = new YT.Player('player', {
    height: '360',
    width: '640',
    videoId: getVidID(),
    autoplay: '0',
    events: {
      onReady: onPlayerReady,
      onStateChange: onPlayerStateChange,
    },
  });
}
// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
var player;

console.log('activeSlide  ' + activeSlide);

// // 4. The API will call this function when the video player is ready.
function onPlayerReady(event) {
  // event.target.playVideo();
}

var done = false;
function onPlayerStateChange(event) {
  // if (event.data == YT.PlayerState.PLAYING && !done) {
  //     setTimeout(stopVideo, 6000);
  //     done = true;
  // }
}
function stopVideo() {
  player.stopVideo();
}
