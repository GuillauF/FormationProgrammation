import Des from '/js/class/Des.js';
import Chifoumi from '/js/class/Chifoumi.mjs';
import searchUsers from '/js/searchusers.js';

let oIdTodo = document.querySelector('#todo .card-body');
let oTodo = new Todo(oIdTodo);
oTodo.render();

let oIdDice = document.getElementById("dice");
let oIdThrowDice = document.getElementById("throwDice");
let oIdResult = document.getElementById("result");

let oDes = new Des(oIdDice, oIdThrowDice, oIdResult);
oDes.ev();

let oChifoumi = new Chifoumi();
oChifoumi.creationDuJeu(document.querySelector('#chifoumi .card-body'));

// document.getElementById("myButton").addEventListener("click", () => {
searchUsers();
// });