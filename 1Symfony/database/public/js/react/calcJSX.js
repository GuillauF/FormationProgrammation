let valPremiere = Number(prompt("Entrez la premiere valeur :"));
let operateur = prompt("operateur :");
let valSeconde = Number(prompt("Entrez la seconde valeur :"));

let result = 0;
let messageErreur = '';

switch (operateur) {
    case '+':
        result = valPremiere + valSeconde;
        break;

    case '-':
        result = valPremiere - valSeconde;
        break;

    case '/':
        if(0 === valSeconde || Infinity === dividende / diviseur) {
            messageErreur = "Division par 0 impossible";
        } else {
            result = valPremiere / valSeconde;
        }

        break;

    case '*':
        result = valPremiere * valSeconde;
        break;
}

let oResult = <>{valPremiere} {operateur} {valSeconde} = {result ?? messageErreur}</>;

ReactDOM.render(oResult, document.getElementById('calcJSX'));