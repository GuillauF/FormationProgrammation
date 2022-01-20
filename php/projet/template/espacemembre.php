<div>
    <div class="head">
        <a href="deconnexion.php">Deconnexion</a>
    </div>
    <h3> Espace Membre</h3>
<br>
<p> Bienvenue dans votre espace personnel !</p>
<br>
    <img src="https://yorktonrentals.com/wp-content/uploads/2017/06/usericon.png" alt="LogoUser">
    <p> Utilisateur :<?= $_SESSION['login'] ?> </p><br>

    <a href="dataupdate.php" class="favorite styled" type="button">Modifier mes données </a>
</div>

<style>

    .head{
        display: flex;
        justify-content: flex-end;
    }
    div{
        text-align: center;
    }
    img{
        height: 250px;
        width: 250px;
    }

</style>

