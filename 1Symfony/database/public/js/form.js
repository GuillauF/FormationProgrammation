// console.log(document.querySelectorAll('form'));
let oForm = document.querySelector('form');

oForm.addEventListener('submit', checkBeforeSubmit);

function checkBeforeSubmit(e)
{
    e.preventDefault(); // annule le comportement par défaut

    let messageDErreur = '';
    let erreurCouleur = "#fedede";

    let oNom = document.getElementById("nom");
    if (oNom) {
        if (!oNom.value) {
            oNom.style.backgroundColor = erreurCouleur;
            messageDErreur += messageErreur(`Veuillez saisir le nom !`);
        } else if (oNom.value.length < 3) {
            oNom.style.backgroundColor = erreurCouleur;
            messageDErreur += minMessageErreur('nom');
        } else {
            oNom.style.backgroundColor = "transparent";
        }
    }
    // gestionMessageErreur("nom", "nom");

    let oPrenom = document.getElementById("prenom");
    if (oPrenom) {
        if (!oPrenom.value) {
            oPrenom.style.backgroundColor = erreurCouleur;
            messageDErreur += messageErreur(`Veuillez saisir le prénom !`);
        } else if (oPrenom.value.length < 3) {
            oNom.style.backgroundColor = erreurCouleur;
            messageDErreur += minMessageErreur('prénom');
        } else {
            oPrenom.style.backgroundColor = "transparent";
        }
    }

    messageDErreur += gestionMessageErreur('email', 'couriel');
    messageDErreur += gestionMessageErreur('tel', 'Téléphone');
    messageDErreur += gestionMessageErreur('pseudo', 'pseudo', 8);
    messageDErreur += gestionMessageErreur('pwd', 'mot de passe', 8);

    if (messageDErreur.length > 0) {
        document.getElementById("messageErreur").innerHTML = messageDErreur;
    } else {
        document.getElementById("messageErreur").textContent = "Vous êtes des génies les gars sauf Eric";
        e.target.submit();
    }
}

function minMessageErreur(nom, taille = 3)
{
    return `Le ${nom} doit suppérieur à ${taille}<br>`;
}

function messageErreur(message)
{
    return message + '<br>';
}

function gestionMessageErreur(id, nom, tailleMin = 3)
{
    let messageDErreur = '';
    let el = document.getElementById(id);
    let erreurCouleur = "#fedede";

    if (el) {
        if (!el.value) {
            el.style.backgroundColor = erreurCouleur;
            messageDErreur += `Veuillez saisir le ${nom} !<br>`;
        } else if (el.value.length < tailleMin) {
            el.style.backgroundColor = erreurCouleur;
            messageDErreur += `Le ${nom} doit suppérieur à ${tailleMin}<br>`;
        } else {
            el.style.backgroundColor = "transparent";
        }
    }

    return messageDErreur;
}