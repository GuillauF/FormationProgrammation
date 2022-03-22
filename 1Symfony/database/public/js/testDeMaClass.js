// let maClass = new MaClass();
// let oMagicien = new Magicien();
// let mag = Magicien.test();
// console.log(maClass);
// console.log(oMagicien);

let oIdDice = document.getElementById("dice");
let oIdThrowDice = document.getElementById("throwDice");
let oIdResult = document.getElementById("result");

let oDes = new Des(oIdDice, oIdThrowDice, oIdResult);
oDes.ev();