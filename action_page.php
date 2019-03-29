<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="POO Game for Délit d'influence v0.8">
    <meta name="keywords" content="POO, Game">
    <meta name="author" content="Laurent JUY aka Sicca">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
   <link rel="stylesheet" href="css/style.css">
    <title>Combat</title>
</head>
<body>
    <div class="container">
        
        <?php 
            require 'class/personnage.php';

            $perso1= new character('Sicca', 10, 5, 5, 3, 100,'avatar_sicca'  );
            $perso2= new character($_POST['name'], $_POST['power'], $_POST['magic'], $_POST['armor'], $_POST['care'], $_POST['life'], $_POST['avatar'] );
        ?>
            <div class="describe">
                <div class="heros1">
                    <?php $perso1->describe();?>
                </div>
                <div class="heros2">
                    <?php $perso2->describe(); ?>
                </div>
            </div>
                <?php
                if (rand(1, 2)) {
                    while ($perso1->isAlive() && $perso2->isAlive()) {
                        $perso1->hazard($perso2);
                        if ($perso1->isAlive() && $perso2->isAlive()) {
                            $perso2->hazard($perso1);
                        }
                    }
                } else {
                    while ($perso1->isAlive() && $perso2->isAlive()) {
                        $perso2->hazard($perso1);
                        if ($perso1->isAlive() && $perso2->isAlive()) {
                            $perso1->hazard($perso2);
                        }
                    }
                }
                ?>
    </div>
     

    <a id="bottom" class="bottom" href="#bas">Bas de page</a>

    <button type="button" id="backtop" class="backtop" title="Haut de page">Haut de page</button>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/hautbas.js"></script>
</body>
</html>