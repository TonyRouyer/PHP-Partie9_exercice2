<?php
    //on instancie l'objet 
    $date = new DateTime();
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>patie 9 exercice 2</title>
</head>
<body>
<?php  //affiche la datte actuel au format ici : day month year?>
    <p><?= 'nous somme le ' . date('d-m-Y'); ?></p>
    <?php //version precedural ?>
    <p><?= $date -> format('d-m-Y'); ?></p>
</body>
</html>