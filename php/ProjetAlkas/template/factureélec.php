
<form method="POST" action="">
    <h3>Facture EDF</h3>
    <label class="title" for="Facture"> A partir de la grille tarifaire EDF en vigueur, et en fonction de <br>
        la puissance en Kilo Voltampère et du nombre de kWh consommés par l'utilisateur, calculer le total du prix à payer <br>
        <form method="POST" action=""></label><br>
    <br>
    <div class="exo6">
    <br>
    <label for="kWH">Consommation (kWH)</label>
    <input name="kWh" id="kWH" type="number">
    <br>
    <label>
        Puissance
        <select name="puissance" id="">
            <option value="3kVA">3kVA</option>
            <option value="6kVA">6kVA</option>
            <option value="9kVA">9kVA</option>
            <option value="12kVA">12kVA</option>
            <option value="15kVA">15kVA</option>
            <option value="18kVA">18kVA</option>
        </select>
    </label>
    <label>
        Heure Creuse
        <input type="checkbox" name="HC">
    </label>
    <label>
        Heure Pleine
        <input type="checkbox" name="HP">
    </label>
    </div>
    <p>
        <label class="envoi"><input class="boutton-envoyer" type="submit"></label> <br>
    </p>

</form>

<style>
    div.resultat{
        display: flex;
        justify-content: center;
        margin-right: 100px;
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 40px 100px 0 0;
    }
    .exo6{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 10px 5px 5px rgb(183, 205, 223);
        padding: 25px;
        margin: 15px;
        width: 280px;
        height: 150px;
        border: black solid 1px;
    }
    .envoi {
        display: flex;
        justify-content: center;
        margin: 5px 5px 0 0;
    }
    .boutton-envoyer {
        width: 100px;
        height: 30px;
        background-color: rgb(67, 113, 180);
        color: white;
    }
    .boutton-envoyer:hover{
        color: aquamarine;
    }
    .title{
        font-size: 1.05em;
        display: flex;
        text-align: center;
        margin: 30px 20px 0 0;
    }
    @media screen and (max-width: 1024px)
    {
        form
        {
            margin-left: 90px;
        }
    }

</style>
