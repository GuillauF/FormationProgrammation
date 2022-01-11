<form method="POST" action="">
    <h3>Calculatrice</h3>
        <form method="POST" action=""></label><br>
    <br>
    <div class="exo1">
    <label for="calculette">Calcul</label><br>

    <input type="number" step=any name="premierNombre"> <br>
    <select name="operateur">
        <option class="plus" value="add">+</option>
        <option value="sub">-</option>
        <option value="mul">*</option>
        <option value="div">/</option>
    </select> <br>
    <input type="number" step=any name="deuxiemeNombre"><br>
    </div>
    <p>
        <label class="envoi"><input class="boutton-envoyer" type="submit"></label> <br>
    </p>

</form>

<br>

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
    .exo1{
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
        box-shadow: 10px 5px 5px rgb(183, 205, 223);
        padding: 25px;
        margin: 10px;
        width: 220px;
        height: 120px;
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
    select{
        display: flex;
        justify-content: center;
        text-align: center;
        width: 50px;
    }
    @media screen and (max-width: 1024px)
    {
        form
        {
            margin-left: 90px;
        }
    }

</style>
