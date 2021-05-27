const form = document.querySelector('.form-quizz');
let tableauResults = [];
const reponses = ['a','b','d','d','a','a','b','b'];
const emojis = ['✔️','✨','👀','😭','👎'];
const titreResultat = document.querySelector('.resultats h2');
const noteResultat = document.querySelector('.note');
const aideResultat = document.querySelector('.aide'); //message d'encouragement
const toutesLesQuestions = document.querySelectorAll('.quizz');
let verifTableau = [];



form.addEventListener('submit', (e) => {
    e.preventDefault();

    for(i = 0; i < 8; i++) {
        tableauResults.push(document.querySelector(`input[name="q${i}"]:checked`).value)
    }
    verifFunc(tableauResults);
    tableauResults = [];
})

function verifFunc(tabResultats){
    
    for(let a = 0; a < 8; a++){
        if(tabResultats[a] === reponses[a]){
            verifTableau.push(true);
        } else {
            verifTableau.push(false);
        }
    }
   
    afficherResultats(verifTableau);
    couleursFonction(verifTableau);
    verifTableau = [];
}

function afficherResultats(tabCheck) {
    const nbDeFautes = tabCheck.filter(el => el !== true).length;

    switch(nbDeFautes) {
        case 0:
            titreResultat.innerText = "✨Bravo, c'est un sans faute !✔️";
            aideResultat.innerText ='';
            noteResultat.innerText = '8/8';
            break;
        case 1:
            titreResultat.innerText = "✔️Bravo, vous serez bientôt un expert !✔️"; 
            aideResultat.innerText ='Voyez vos erreurs dans les cases rouges';
            noteResultat.innerText = '7/8';
            break;
        case 2:
            titreResultat.innerText = "✔️Bravo, c'est quasi un sans faute !✔️";
            aideResultat.innerText ='Voyez vos erreurs dans les cases rouges';
            noteResultat.innerText = '6/8';
            break;
        case 3:
            titreResultat.innerText = "✨Encore un effort!👀";
            aideResultat.innerText ='Voyez vos erreurs dans les cases rouges';
            noteResultat.innerText = '5/8';
            break;
        case 4:
            titreResultat.innerText =  "👀Encore un effort, revenez avec plus de connaissances!👀";
            aideResultat.innerText ='Voyez vos erreurs dans les cases rouges';
            noteResultat.innerText = '4/8';
            break;
        case 5:
            titreResultat.innerText = "😭 Bon, que dire ? Va dormir ça ira mieux demain👎";
            aideResultat.innerText ='Voyez vos erreurs dans les cases rouges';
            noteResultat.innerText = '3/8';
            break;
        case 6:
            titreResultat.innerText = "👎Vraiment pas terrible !👎";
            aideResultat.innerText ='Voyez vos erreurs dans les cases rouges';
            noteResultat.innerText = '2/8';
            break;
        case 7:
            titreResultat.innerText =  "👎nul !👎";
            aideResultat.innerText ='Voyez vos erreurs dans les cases rouges';
            noteResultat.innerText = '1/8';
            break;
        case 8:
            titreResultat.innerText =  "👎C'est pas pour toi, laisse tomber !👎";
            aideResultat.innerText ='Voyez vos erreurs dans les cases rouges';
            noteResultat.innerText = '0/8';
            break;

        default:
            'Oups, cas innatendu.';
    }
}


function couleursFonction(tabValBook)
{
    for(let j = 0; j < tableauResults.length; j++) {
        if(tabValBook[j] === true){
            toutesLesQuestions[j].style.background = 'lightgreen';
        } else {
            toutesLesQuestions[j].style.background = '#ffb8b8';
            toutesLesQuestions[j].classList.add('echec');

            setTimeout(( )=> {
                toutesLesQuestions[j].classList.remove('echec');
            }, 500)
        }
    }
}

toutesLesQuestions.forEach(item => {
    item.addEventListener('click', () => {
        item.style.background = "white";
    })
})