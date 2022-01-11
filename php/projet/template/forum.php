
<form method="POST" action="">
    <h3>Bienvenue dans votre espace tout moche!</h3>
    <br>
    <a href="connexion.php">Déjà un compte ? Se connecter</a>
    <div class="login">
        <label>Nom<input name="nom" type="text"></label>
        <label>Prenom<input name="prenom" type="text"></label>
        <label>Login<input name="login" type="text"></label>
        <label>Mot de Passe<input name="password" type="password"></label>
        <label class="envoi"><input class="boutton-envoyer" type="submit"></label> <br>
    </div>
</form>
<style>

    div.resultat{
        display: flex;
        align-items: center;
        flex-direction: column;
        margin-right: 100px;
    }
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 40px 100px 0 0;
    }
    .login{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 10px 5px 5px rgb(183, 205, 223);
        padding: 25px;
        margin: 15px;
        width: 300px;
        height: 140px;
        border: black solid 1px;
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