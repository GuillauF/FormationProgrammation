import React, {useState} from "react";

export default function Calc() {

    let [premierNombre, setPremierNombre] = useState('');
    let [deuxiemeNombre, setDeuxiemeNombre] = useState(['']);
    let [operateur, setOperateur] = useState(['']);
    let [result, setResult] = useState(['']);
    let [messageErreur, setMessageErreur] = useState(['']);

    let changePremierNombre = (e) =>
    {
        setPremierNombre(e.target.value);
    }
    let changeDeuxiemeNombre = (e) =>
    {
        setDeuxiemeNombre(e.target.value);
    }
    let changeOperateur = (e) =>
    {
        setOperateur(e.target.value);
    }

    switch (operateur) {
        case '+':
         result = premierNombre + deuxiemeNombre;
            break;

        case '-':
            result = premierNombre - deuxiemeNombre;
            break;

        case '/':
            if (0 === deuxiemeNombre || Infinity === dividende / diviseur) {
                messageErreur = "Division par 0 impossible";
            } else {
                result = premierNombre / deuxiemeNombre;
            }

            break;

        case '*':
            result = premierNombre * deuxiemeNombre;
            break;
    }

}

return <>
    <h1> Calculatrice !</h1>

    <div> <input type="text" value={premierNombre} onChange={changePremierNombre}/></div>
    <div> <input type="text" value={} onChange={setOperateur}/></div>
    <div> <input type="text" value={deuxiemeNombre} onChange={changeDeuxiemeNombre}/></div>


</>
