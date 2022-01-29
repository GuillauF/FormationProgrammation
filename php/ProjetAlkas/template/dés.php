<form method="POST" action="">
    <h3>Lancer de Dés</h3>
    <label class="title" for="LancerDés">Formulaire générant un ou plusieurs lancers de dés en indique le nombre <br>
        de lancers devant le nom du dé. Par exemple, 3d10 indiquerait un lancer de 3 dés à 10 faces. <br>
        Le résultat obtenu serait donc compris entre 3 et 30.
    <br>
    <div class="exo7" >
    <label for="dice">Lancer de dés</label>
    <input type="text" name="dice" placeholder="Ex : 2D6 + 3D10 + 5D3" id="dice">
    <input type="submit" value="Jet de dé(s)">
    </div>


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
    .exo7{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 10px 5px 5px rgb(183, 205, 223);
        padding: 25px;
        margin: 15px;
        width: 260px;
        height: 120px;
        border: black solid 1px;
    }
    .title{
        font-size: 1.05em;
        display: flex;
        margin: 30px 20px 0 0;
        text-align: center;
    }
    @media screen and (max-width: 1024px)
    {
        form
        {
            margin-left: 90px;
        }
    }

</style>