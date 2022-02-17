let valPremiere = Number(prompt("Entrez la premiere valeur :"));
let operateur = prompt("operateur :");
let valSeconde = Number(prompt("Entrez la seconde valeur :"));

switch (operateur) {
    case '+':
        alert(valPremiere + valSeconde);
        break;

    case '-':
        alert(valPremiere - valSeconde);
        break;
    case '/':
        if(0 === valSeconde ){
            alert("Division par 0 impossible");
        }

        if(dividende/diviseur === Infinity){
            alert("Division par 0 impossible");
        }
        alert(valPremiere / valSeconde);
        break;
    case '*':
        alert(valPremiere * valSeconde);
        break;
}