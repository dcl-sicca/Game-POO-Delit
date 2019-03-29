<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="description" content="POO Game for Délit d'influence v0.8">
   <meta name="keywords" content="POO, Game">
   <meta name="author" content="Laurent JUY aka Sicca">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
   <title>Le Combat des Héros</title>
</head>
<body>

<div class="container">
   <div class="item">
      <form action="creation-perso.php" method="post">
         <fieldset>
         <legend>Le combat des héros</legend>

         <div id="rules">  
            <h1> Règle du Jeu</h1>
            <p>Le But du jeu est de vaincre le héros Sicca en créant votre personnage avec soin, celons  
            les attributs à votre disposition (Force, Magie, Armure, Soin)</p>
         </div>

         <p>Choisissez votre avatard :</p>

         <div id="containerAvatar">
            <div>
            <label for="albert"><img class="thumb" src="img/albert.jpg" alt="Albert"></label>
            <input class="avatar" type="radio" id="albert" name="avatar" value="albert" checked>
            
            </div>

            <div>
            <input class="avatar" type="radio" id="julie" name="avatar" value="julie">
            <label for="julie"><img class="thumb" src="img/julie.jpg" alt="Julie"></label>
            </div>
         </div>


         <input type="submit" value="Jouer">
         </fieldset>
      </form>
   <div>
<div>
</body>
</html>