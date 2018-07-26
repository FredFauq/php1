<?php
$varString = 'mesure';
$varInt = 20;
$varFloat = 25.5;
$varBoolean = true;

/* les lignes suivantes ne sont nécessaires qu'en cas de code complexe pour spécifier la nature de chaque variable
settype($varString, 'string');
settype($varInt, 'integer');
settype($varFloat, 'float');
settype($varBoolean, 'boolean'); */
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 4</title>
  </head>
  <body>
    <p>
      <?= $varString . ' ' . $varInt . ' ' . $varFloat . ' ' . $varBoolean; ?>
    </p>
  </body>
</html>
