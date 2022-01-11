
<form method="POST" action="">
    <h3>Jour de la semaine</h3>
    <label class="title" for="weekday">Formulaire récupérant une date (jour, mois, année). <br>
        La date rentrée par l'utilisateur détermine le jour de la semaine correspondant.
        <form method="POST" action=""></label><br>
    <br>
    <div class="exo5" >
    <label>
        Jour
        <input name="day" type="number">
    </label>
    <br>
    <label>
        Mois
        <input name="month" type="number">
    </label>
    <br>
    <label>
        Année
        <input name="year" type="number">
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
    .exo5{
        display: flex;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        box-shadow: 10px 5px 5px rgb(183, 205, 223);
        padding: 20px;
        margin: 15px;
        width: 260px;
        height: 130px;
        border: black solid 1px;
    }
    .envoi {
        display: flex;
        justify-content: center;
        margin: 5px 5px 0 0;
    }
    .boutton-envoyer {
        color: #76c893;
        background-color: #2f3e75;
        width: 70px;
        height: 30px;
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
