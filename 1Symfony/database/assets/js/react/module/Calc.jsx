import React, {useState} from "react";

export default function Calc() {

        let [premierNombre, setPremierNombre] = useState('');
        let [deuxiemeNombre, setDeuxiemeNombre] = useState('');
        let [operateur, setOperateur] = useState('');
        let [result, setResult] = useState('');
        let [messageErreur, setMessageErreur] = useState('Division par 0 impossible');

        let changePremierNombre = (e) => {
            setPremierNombre(e.target.value);
        }
        let changeDeuxiemeNombre = (e) => {
            setDeuxiemeNombre(e.target.value);
        }
        let changeOperateur = (e) => {
            setOperateur(e.target.value);
        }
        let calc = (e) => {
            e.preventDefault();

            if (operateur === '+') {
                setResult(parseFloat(premierNombre) + parseFloat(deuxiemeNombre));
            }

            if (operateur === '-') {
                setResult(parseFloat(premierNombre) - parseFloat(deuxiemeNombre));
            }

            if (operateur === '*') {
                setResult(parseFloat(premierNombre) * parseFloat(deuxiemeNombre));
            }

            if (operateur === '/') {
                setResult(parseFloat(premierNombre) / parseFloat(deuxiemeNombre));
            }

        }

        return <>
            <h1> Calculatrice !</h1>
            <form action="" method="post" onSubmit={calc}>
                <input type="text" value={premierNombre} onChange={changePremierNombre}/>
                <select value={operateur} onChange={changeOperateur}>
                    <option value="">--Please choose an operator--</option>
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select>

                <input type="text" value={deuxiemeNombre} onChange={changeDeuxiemeNombre}/>
                <button type="submit">Calculer</button>
            </form>
            Résultat : <>{result} </>
        </>

    }



