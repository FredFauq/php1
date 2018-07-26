<?php
$firstName = 'Georges';
$lastName = 'Durand';
$age = 35;
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 7</title>
  </head>
  <body>
    <p>
      <?= 'Bonjour ' . $firstName . ' ' . $lastName . ', tu as ' . $age . ' ans.'; ?>
    </p>
  </body>
</html>
