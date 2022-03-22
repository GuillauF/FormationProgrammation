import React, {useState} from "react";

export default function Hook()
{
    let [isToggleLight, setLight] = useState(true);
    let [monTableau, setMonTableau] = useState(['Laurent', 'Nicolas']);
    let [monInput, setMonInput] = useState(['test']);
    let changeMonInput = (e) =>
{
    setMonInput(e.target.value);
}

    return <>
    <h1>Bonjour Hook !</h1>
        Lumiere est : {isToggleLight ? 'allumée' : 'éteint'}
        <p> Prénom : {monTableau[1]} </p>

        <p> <input type="text" value={monInput} onChange={changeMonInput}/></p>
    </>
}