<form method="POST" action="">
    <h3>Connexion Espace utilisateur</h3>
    <div class="connexion" >
        <br>
        <input type="text" name="login" placeholder="Entrez le login">
        <br>
        <input type="password" name="password" size="255" placeholder="Entrez le mot de passe">
        <br>
        <input  type="submit"  name="valider"  value="valider"  />
        <br>
        <a  href="forum.php">Créer votre Compte</a>
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
    .connexion{
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
