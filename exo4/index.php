<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <?php
    $varString = 'mesure';
    $varInt = 20;
    $varFloat = 25.5;
    $varBoolean = true;
    settype($varString, 'string');
    settype($varInt, 'integer');
    settype($varFloat, 'float');
    settype($varBoolean, 'boolean');
    ?>
    <p>
      <?php
      echo $varString,' ',$varInt,' ',$varFloat,' ',$varBoolean;
      ?>
    </p>
    </body>
</html>
