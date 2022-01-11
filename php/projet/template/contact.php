<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="">
    <p class="p-contact">
        <label for="nom"> Nom :</label>
        <input type="text" name="nom" id="nom"/>
        <br>
        <label for="prenom"> Prenom :</label>
        <input type="text" name="prenom" id="prenom"/>
        <br>
        <label for="mail"> Mail :</label>
        <input type="email" name="mail" id="mail" placeholder="toto@gmail.com" />
        <br>
        <label for="message">Votre message :</label>
        <textarea name="message" id="message"></textarea>
        <br>
        <input type="file" />
        <br>
        <input type="submit" name="Envoyer">
    </p>
</form>

</body>
</html>

<style>

    form{
        display: flex;
        justify-content: right;
        margin: 80px 100px 0 0;
        position: static;
    }
    p{
        display: flex;
        flex-direction: column;
        box-shadow: 10px 5px 5px rgb(183, 205, 223);
        padding: 25px;
        width: 300px;
        height: 300px;
        border: black solid 1px;
    }
    form input[type=file]{
        margin-top: 10px;
    }
    form input[type=submit]{
        margin-top: 10px;
    }
    @media screen and (max-width: 1024px)
    {
        p.p-contact
        {
            margin-left: 90px;
        }
    }
</style>