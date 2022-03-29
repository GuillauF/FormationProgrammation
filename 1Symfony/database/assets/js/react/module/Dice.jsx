import React, {useState} from "react";

export default function Dice() {

    let [dices, setDices] = useState('');
    let [diceList, setDiceList] = useState(dices.split('+'));
    let [total, setTotal] = useState('');

    let changeDices = (e) => {
        setDices(e.target.value);
    }

    let dice = (e) => {
        e.preventDefault();

        for (let dice in diceList) {

            let diceValues = diceList[dice].split('D');

            if (diceValues.length > 1) {
                for (let i = 0; i < diceValues[0]; i++) {
                    let rand = Math.random();
                    total += Math.floor(rand * diceValues[1]) + 1;
                }
            } else {
                total += diceValues[0];
            }
        }
    }

    return <>
        <h1> Lancer de Dés !</h1>
        <form action="" method="post" onSubmit={dice}>
            <input type="text" value={dices} onChange={changeDices}/>
            <button type="submit">Calculer</button>
        </form>
        Résultat : <>{total} </>
    </>

}