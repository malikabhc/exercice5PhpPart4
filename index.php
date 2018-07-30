<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice 5/4</title>
  </head>
  <body>
    <p>
      <?php
        function concat($number, $text){
          return 'Il a ' . $number . ' ans et il est né à ' . $text . '.';
        }
        echo concat(18, 'Paris');
      ?>
    </p>
  </body>
</html>
