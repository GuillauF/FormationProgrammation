
<header>
    <img class="logo"
         src="https://i.pinimg.com/originals/97/a5/34/97a534c4e5e6a8d84671afeaf871942e.png"
         alt="LogoTM">
    <nav>
        <ul>
            <li><a href="index.php" class="">Accueil</a></li>
            <li class="button-select"><a href="#" class="">Exos</a>
                <ul class="sous-menu">
                    <li><a href="calculette.php">Calculatrice</a></li>
                    <li><a href="volumecone.php">Volume Cône</a></li>
                    <li><a href="nombrealeatoire.php">Nombres Aléatoires</a></li>
                    <li><a href="bandepassante.php">Bande Passante</a></li>
                    <li><a href="weekday.php">Date</a></li>
                    <li><a href="factureélec.php">Facture Elec</a></li>
                    <li><a href="dés.php">Jeu de dés</a></li>
                </ul>
            </li>
            <li><a href="contact.php" class="">Contact us</a></li>
            <li><a href="forum.php" class="">Forum</a></li>
            <ul class="">

            </ul>
        </ul>
        <?php
        if(!isset($_SESSION['user'])) { ?>
            <a href="connexion.php">se connecter</a>
            <?php
        }
        if(!empty($_SESSION['user'])) { ?>
            Utilisateur : <?=$_SESSION['user']?> <a href="logout.php">se déconnecter</a>
            <?php
        }
        ?>

    </nav>

</header>

<style>

    @media screen and (max-width: 750px) {
        header
        {
            display: flex;
            flex-direction: column;
            align-content: center;
        }
    }
</style>