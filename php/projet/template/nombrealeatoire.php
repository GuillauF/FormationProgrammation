<form method="POST" action="">
    <h3>Nombres aléatoires</h3>
    <label class="title" for="random-number">A partir d'un formulaire demandant un mimimum, un maximum et un nombre de valeurs à générer,
        <br> afficher "n" nombres aléatoires compris entre "min" et "max".
        <form method="POST" action=""></label><br>
    <br>
    <div class="exo3" >
        <label for="min">Minimum</label>
        <input type="number" id="min" name="min">
        <label for="max">Maximum</label>
        <input type="number" id="max" name="max">
        <label for="nombreValeurs">Nb valeurs</label>
        <input  type="number" id="nombreValeurs" name="nombreValeurs">
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
        overflow: auto;
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 40px 100px 0 0;
    }
    .exo3{
        display: flex;
        flex-direction: column;
        box-shadow: 10px 5px 5px rgb(183, 205, 223);
        padding: 25px;
        margin: 15px;
        width: 280px;
        height: 140px;
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
        text-align: center;
        font-size: 1.05em;
        margin: 30px 0 0 0;
    }
    main,
    {
        display: flex;
        overflow: auto;
        flex-direction: column;
        align-content: center;
    }
    @media screen and (max-width: 1024px)
    {
        form
        {
            margin-left: 90px;
        }
    }
</style>