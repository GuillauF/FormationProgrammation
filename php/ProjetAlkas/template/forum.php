
<form method="POST" action="">
    <h3>Bienvenue dans cet espace moche pour s'inscrire!</h3>
    <br>
    <a href="connexion.php">Déjà un compte ? Se connecter</a><br>
    <div class="login">
        <label>Nom<input name="nom" type="text"></label>
        <label>Prenom<input name="prenom" type="text"></label>
        <label>Login<input name="login" type="text"></label>
        <label>Mot de Passe<input name="password" type="password"></label>
        <label>Mot de Passe à confirmer<input name="password2" type="password"></label>
        <label class="envoi"><input name="envoyer" type="submit"></label> <br>
    </div>
</form>
<br>

<style>


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
        padding: 25px 20px 20px 20px;
        margin: 15px;
        width: 350px;
        height: 180px;
        border: black solid 1px;
        background-color: rgb(215, 219, 246);
        color: black;
    }
    main,
    {
        display: flex;
        overflow: auto;
        flex-direction: column;
        align-content: center;
    }
    label{
        display: flex;
        justify-content: space-between;
        margin-bottom: 5px;
    }
    label input{
        height: 20px;
    }
    label.envoi{
        display: flex;
        justify-content: center;
    }
    @media screen and (max-width: 1024px)
    {
        form
        {
            margin-left: 90px;
        }
    }
</style>