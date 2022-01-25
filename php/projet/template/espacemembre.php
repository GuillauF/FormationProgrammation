<div>

    <h3> Espace Membre</h3>
<br>
<p> Bienvenue dans votre espace personnel !</p>
<br>
    <img src="https://yorktonrentals.com/wp-content/uploads/2017/06/usericon.png" alt="LogoUser">
    <p> Utilisateur : <?= $_SESSION['user'] ?> </p><br>

    <a href="dataupdate.php" class="favorite styled" type="button">Modifier mes données </a>
</div>

<style>

    div{
        text-align: center;
    }
    img{
        height: 250px;
        width: 250px;
    }

</style>

