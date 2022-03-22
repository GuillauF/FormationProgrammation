// import permet de charger un fichier js ailleurs comme on le ferait en php avec require, de plus on peut lui préciser un nom
import Chifoumi from './class/Chifoumi.mjs';

let oChifoumi = new Chifoumi();
oChifoumi.creationDuJeu(document.body);

// bonne pratique https://developer.mozilla.org/fr/docs/Web/JavaScript/Guide/Modules
// import ('./Class/Chifoumi.mjs').then((jeu) => {
//     let oChifoumi = new jeu.default();
//     oChifoumi.creationDuJeu(document.body);
// });