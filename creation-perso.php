<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
   <link rel="stylesheet" href="css/style.css">
   <title>Création Perso</title>
</head>
<body>

<div class="container">

  <form action="action_page.php" method="post">
      <fieldset>
      <legend>Création Personnage</legend>

      <!-- Avatar -->
      <input type="hidden" name="avatar" id="avatar" value="<?php echo $_POST['avatar']; ?>"/>

      <!-- Name Character-->
      <div>
        <label for="nom">Nom Perso</label>  

        
        <div>
        <input id="name" name="name" type="text" placeholder="Nom Perso" required="">
          
        </div>
      </div>

      <!-- Attribute Point -->
      <div>  
            <b>Points d'attributs : <span id="attrPointCount">10</span></b><br>
      </div>

      <!-- Life -->
      <div class="slidecontainer">
        <label for="life">Vie</label>
        <div>
            <input type="range" name="life" id="life" min="50" max="120" step="1" value="100" class="slider">
            <span></span>
        </div>
      </div>

      <!-- Power -->
      <div>
        <label for="power">Force</label>  
        <div>
            <input type="range" name="power" id="power" min="0" max="10" step="1" value="0" class="slider">
            <span></span>
        </div>
      </div>

      <!-- Magic -->
      <div>
        <label for="magic">Magie</label>  
        <div>
            <input type="range" name="magic" id="magic" min="0" max="10" step="1" value="0" class="slider">
            <span></span>
        </div>
      </div>

      <!-- Armure -->
      <div>
        <label for="armor">Armure</label>  
        <div>
            <input type="range" name="armor" id="armor" min="0" max="10" step="1" value="0" class="slider">
            <span></span>
        </div>
      </div>

      <!-- Soin -->
      <div>
        <label for="care">Soin</label>  
        <div>
            <input type="range" name="care" id="care" min="0" max="10" step="1" value="0" class="slider">
            <span></span>
        </div>
      </div>
      <input type="submit" value="Combat">
      </fieldset>
      
  </form>

<div>



<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>