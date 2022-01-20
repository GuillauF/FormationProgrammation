
<body>
<form method="post" action="">
<div class="titre">
    <h1> Mon site </h1> <br>
    <p class="p1"> Bienvenue sur mon premier site web  !</p> <br>
</div>
    <div class="membre">
    <img class="logo2"
         src="https://www.6tm.com/uploads/2cd40257947437577f493d5bb037cd41.png" alt="lol"><br>
     <a href="connexion.php">Se connecter</a>
    </div>
</form>
</body>

<style>
    form{
        display: flex;
        justify-content: space-between;
    }
    h1{
        color: rgb(88, 107, 180);
    }
    .p1{
        padding-left: 100px;
    }
    .titre{
        display: block;
    }
    .membre{
        display: block;
    }
    div img:hover {
        transform: scale(1.03);
        transition: 0.5s ease;
    }
    div img logo2{
        width: 250px;
        height: 260px;
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    div img.logo2:hover{
        transform: scale(1.05);
        transition: 0.5s ease;
    }

    @media screen and (max-width: 850px) {
        main, div
        {
            display: flex;
            overflow: scroll;
            flex-direction: column;
            align-content: flex-start;
        }
    }
        @media screen {
            main {
                display: flex;
                overflow: scroll;
                flex-direction: column;
                align-content: center;
            }
        }

</style>