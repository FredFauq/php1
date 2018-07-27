<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5</title>
  </head>
  <body>
    <?php
      // déclaration de la variable à NULL
      $varInt = NULL;
      // variable de type integer
      settype($varInt, 'int');
    ?>
    <p>
      <?php
      // affichage de la variable
       echo $varInt;
      ?>
    </p>
    <?php
      // déclaration de la valeur de la variable à 5
      $varInt = 5;
      ?>
    <p>
      <?php
      echo $varInt;
      ?>
    </p>
  </body>
</html>
