<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=500, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Website: <?php echo $this->getCtName() ?></title>
    <link rel="stylesheet" href="<?php echo Env::assetsUrl() . 'css/style.css' ?>">

    <link rel="stylesheet" href="<?php echo Env::assetsUrl() . 'css/320to599.css' ?>">
    <link rel="stylesheet" href="<?php echo Env::assetsUrl() . 'css/600to959.css' ?>">
    <link rel="stylesheet" href="<?php echo Env::assetsUrl() . 'css/1024to1366.css' ?>">
    <link rel="stylesheet" href="<?php echo Env::assetsUrl() . 'css/1366to2500.css' ?>">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
</head>

<body>


    <div class="jumbotron jumbotron-fluid">
        <div class="container">

            <h1 class="nom slide-bottom">Mickaël ISBLE</h1>
            <p class="profil slide-bottom">développeur web</p>

        </div>

        <nav class="navbar navbar-light bg-transparent" style="  justify-content:center;  ">
            <form class="form-inline">
                <a class="btn btn-outline-success button1" href="<?php echo Env::baseUrl() . 'home/show/' ?>" name="Accueil" style="border-radius: 10% 10%/ 50%; margin-right:2em;">HOME</a>

                <a class="btn btn-outline-success button2" href="<?php echo Env::baseUrl() . 'contact/show/' ?>" name="contact" type="button" style="border-radius: 10% 10% / 50% ;
                margin-right:2em;"> CONTACT </a>
                <a class="btn btn-outline-success button2" href="<?php echo Env::baseUrl() . 'projets/show/' ?>" name="projets" type="button" style="border-radius: 10% 10% / 50% ;"> PROJETS </a>
            </form>

        </nav>

    </div>

</body>

</html>