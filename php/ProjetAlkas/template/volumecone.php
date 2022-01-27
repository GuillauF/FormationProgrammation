<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volume du Cone</title>
</head>
<body>

<form method="POST" action="">
    <h3>Volume d'un cône</h3>
<label class="title" for="volume">Calcul du volume d'un cone (pi * rayon² * hauteur)/3, pi est approximé à 3.14
    <form method="POST" action=""></label><br>
    <br>
    <div class="exo2" >
        <label>
        Rayon de la base
        <input name="radius" type="number" placeholder="rayon">
    </label>
    <br>
    <label>
        Hauteur du cone
        <input name="height" type="number" placeholder="hauteur">
    </label>
    <br>
    <label class="round">
        Arrondir ?
        <input type="checkbox" name="round">
    </label>
    </div>
<p>
<label class="envoi"><input class="boutton-envoyer" type="submit"></label> <br>
</p>

</form>

</body>
</html>

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
    .exo2{
        display: flex;
        flex-direction: column;
        box-shadow: 10px 5px 5px rgb(183, 205, 223);
        padding: 25px;
        margin: 15px;
        width: 260px;
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
    .title{
        font-size: 1.05em;
        display: flex;
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