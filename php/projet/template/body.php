<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" media="screen and (max-width: 1280px)" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projet</title>
</head>

<body>


<style>

    *{
        margin: 0;
        padding: 0;
    }
    body{
        background-color: white;
    }
    img{
        margin: 0;
        height: 90px;
        width: 150px;
    }

    header {
        display: flex;
        margin: 0;
        justify-content: space-between;
        padding: 10px;
        font-size: 20px;
        color: cornflowerblue;
        background-image: url("https://cdn.pixabay.com/photo/2015/09/17/10/30/banner-943866_1280.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        border-bottom: #1e6091 solid 1px;
    }
    header nav{
    padding-top: 20px;
    }
    header nav ul{
        display: flex;
        flex-wrap: wrap;
        list-style-type: none;
    }
    header nav ul li {
        width: 130px;
        height: 35px;
        line-height: 35px;
        text-align: center;
        background-color: rgb(67, 113, 180);
        border: 1px solid white;
        border-radius: 10px;
        float: left;
        font-size: 17px;
        margin: 5px;
        padding: 0;
    }
    ul ul li{
        display: none;
    }
    nav ul li > ul li{
        font-size: 15px;
        margin: 0px;
    }
    nav ul li:hover > ul li {
        display: flex;
        position: relative;
        justify-content: center;
    }
    li a{
        color: white;
        text-decoration: none;
    }
    li a:hover{
        color: aquamarine;
    }
    main {
        height: 700px;
        font-size: 20px ;
        background-image: url("https://cdn.pixabay.com/photo/2017/12/10/20/56/feather-3010848_960_720.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        display: block;
        overflow: scroll;
        color: black;
        margin: 0;
        padding: 30px;
    }
    footer {
        display: flex;
        justify-content: center;
        padding-top: 10px;
        height: 35px;
        color: white;
        background-color: black;
    }
    footer{
        color: white;
    }
    a:hover, a:focus {
        text-decoration: none;
    }
    @media screen and (max-width: 850px) {
        main, div, figure {
            display: flex;
            overflow: scroll;
            flex-direction: column;
            align-items: center;
        }
    }

</style>
<?php require ('header.php'); ?>

<main>

    <?php
    if(!empty($nomDuFichier)) {
        require($nomDuFichier);

        if(!empty($resultat)) {
            ?>
            <div class="resultat">
                <?=$resultat?>
            </div>
            <?php
        }
    }

    ?>

</main>

</body>

<?php require ('footer.php'); ?>
</html>