export default class Chifoumi {
    constructor()
    {
        this.score = [0, 0];
        this.possibilite = ['pierre', 'feuille', 'ciseaux'];
        this.resultatTab = ['égalité', 'gagne', 'perd'];
        this.oResultat;
        this.oScore;
    }

    creationDuJeu(el)
    {
        let oContainer = document.createElement('div');
        let oDivChoix = document.createElement('div');
        let oChoix = document.createElement('input');
        let oValid = document.createElement('button');
        this.oResultat = document.createElement('div');
        this.oScore = document.createElement('div');

        // oContainer.innerHTML = '<h1>Jeu de chifoumi</h1>';
        oContainer.className = 'container-sm';

        oDivChoix.className = "col-sm-8 mb-3";

        oChoix.id = "choix";
        oChoix.type = "text";
        oChoix.className = "form-control";

        oValid.id = "valid";
        oValid.textContent = "Joue";
        oValid.className = "btn btn-primary";
        oValid.addEventListener('click', () => {
            this.afficheScore(oChoix.value);
        });

        oDivChoix.appendChild(oChoix);
        oContainer.appendChild(oDivChoix);
        oContainer.appendChild(oValid);
        oContainer.appendChild(this.oResultat);
        oContainer.appendChild(this.oScore);
        el.appendChild(oContainer);
    }

    /**
     * Calcul aléatoire de ce que va jouer l'ordinateur
     */
    ordi()
    {
        return Math.round(Math.random() * 2);
    }

    quiGagne(choixPersonne, choixOrdi)
    {
        let result = -1;

        if (choixPersonne !== choixOrdi) {
            result = 0;

            switch (choixPersonne) {
                case 0: // pierre
                    if (1 === choixOrdi) {
                        result = 1;
                    }

                    break;
                case 1: // feuille
                    if (2 === choixOrdi) {
                        result = 1;
                    }
                    break;
                case 2: //ciseaux
                    if (0 === choixOrdi) {
                        result = 1;
                    }
            }
        }

        return result;
    }

    afficheScore(choixJoueur)
    {
        let choixOrdi = this.ordi();
        let resultat = this.possibilite.indexOf(choixJoueur);
        let choixPersonne = resultat !== -1 ? resultat: 0;
        let resultQuiGagne = this.quiGagne(choixPersonne, choixOrdi);

        if (1 === resultQuiGagne) {
            this.score[0]++;
        } else if (0 === resultQuiGagne) {
            this.score[1]++;
        }

        this.oResultat.innerHTML = `Le choix de l'ordi : ${this.possibilite[choixOrdi]} vs le choix de Guy : ${this.possibilite[choixPersonne]} ${this.resultatTab[resultQuiGagne + 1]}`;
        this.oScore.innerHTML = `score de l'ordi : ${this.score[0]} vs Guyyyy : ${this.score[1]}`;

        if (this.score[0] > 2) {
            this.oScore.innerText = "TU as perdu espèce de naze ! ";
        } else if (this.score[1] > 2) {
            this.oScore.textContent = "I WIN";
        }
    }
}