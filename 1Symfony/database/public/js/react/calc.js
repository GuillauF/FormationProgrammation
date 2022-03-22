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
        if(0 === valSeconde ){
            messageErreur = "Division par 0 impossible";
        } else if(Infinity === dividende / diviseur) {
            messageErreur = "Division par 0 impossible";
        } else {
            result = valPremiere / valSeconde;
        }

        break;

    case '*':
        result = valPremiere * valSeconde;
        break;
}

let oMessageErreur = React.createElement('div', null, messageErreur);
let oResult = React.createElement('div', null, result, oMessageErreur);

ReactDOM.render(oResult, document.getElementById('calcResult'));