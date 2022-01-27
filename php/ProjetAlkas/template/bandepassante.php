<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bande Passante</title>
</head>
<body>

<form method="POST" action="">
    <h3>Bande Passante</h3>
    <label class="title" for="bandwidth">Formulaire permettant de convertir des valeurs en `bit/s` en différents ordres de grandeur.
        <form method="POST" action=""></label>
    <br>
    <div class="exo4" >
        <label for="bandwidth">Conversion</label>
        <br>
    <input type="number" step="any" name="value" placeholder="valeur à convertir" id=""><br>
    <select name="unit1" id="">
        <option value="b/s">b/s</option>
        <option value="kb/s">kb/s</option>
        <option value="Mb/s">Mb/s</option>
        <option value="Gb/s">Gb/s</option>
        <option value="o/s">o/s</option>
        <option value="ko/s">ko/s</option>
        <option value="Mo/s">Mo/s</option>
        <option value="Go/s">Go/s</option>
    </select><br>
    <select name="unit2" id="">
        <option value="b/s">b/s</option>
        <option value="kb/s">kb/s</option>
        <option value="Mb/s">Mb/s</option>
        <option value="Gb/s">Gb/s</option>
        <option value="o/s">o/s</option>
        <option value="ko/s">ko/s</option>
        <option value="Mo/s">Mo/s</option>
        <option value="Go/s">Go/s</option>
    </select>
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
    .exo4{
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
    .title {
        font-size: 1.05em;
        display: flex;
        margin: 30px 20px 0 0;
    }
    select{
        display: flex;
        justify-content: center;
        text-align: center;
        width: 70px;
    }
    @media screen and (max-width: 1024px)
    {
       form
        {
            margin-left: 90px;
        }
    }

</style>