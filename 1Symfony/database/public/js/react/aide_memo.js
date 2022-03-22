////////////////////////////////////////
/// Dom
let oMessageErreur = React.createElement('div', null, messageErreur);
let oResult = React.createElement('div', {className: "bonjour", id: "test"}, 'blablabla', oMessageErreur);

ReactDOM.render(oResult, document.getElementById('idPage'));

////////////////////////////////////////
// JSX

// <> = React.Fragment soit un element vide
// accolade = code js
let message = 'bonjour';
let oResult = <>
    <h1>
        {message} = {message ?? 'aurevoir'}
    </h1>
    <span>Bientot la pause</span>
</>;

ReactDOM.render(oResult, document.getElementById('idPage'));


////////////////////////////////////////////
/// Component

// La première lettre commence toujours pas une majuscule
// ça retourne du JSX
// Un composant peut lui aussi utiliser un autre composer

function PetitComposant({val})
{
    return <div>{val}</div>;
}

/**
 * @param maPropriete proprieté de mon composant
 * @param children est un mot clé de react qui est toujours le contenu de son propre appel de composant
 * ex :
 *  <MonAutreComposant maPropriete="une valeur">test</MonAutreComposant>
 *  donc children aura pour valeur ici "test"
 *
 * @returns {JSX.Element}
 */
function MonAutreComposant({maPropriete, children})
{
    return <>
        valeur de ma proprieté {maPropriete}
        affiche le contenu de mon composant {children}
    </>;
}

function MonComposant()
{
    return <>
        <MonAutreComposant>test</MonAutreComposant>
        <PetitComposant val="test" />
    </>;
}