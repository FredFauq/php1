<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 6</title>
  </head>
  <body>
    <?php
    $name = 'Georges';
    settype($name, 'string');
    ?>
    <p><?php echo 'Bonjour '.$name.' comment vas-tu ?'; ?></p>
  </body>
</html>
