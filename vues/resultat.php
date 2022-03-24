<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p>
        Etes-vous assuré ?
    </p>
    <?php echo $v1->assure($assure); ?>
    <p>
        Couleur de la voiture ?
    </p>
    <?php echo "<br>" . $v1->repeindre($_POST['repeindre']); ?>

    <p>
        Niveau Essence et trajet ?
    </p>
    <?php echo $v1->mettreEssence($_POST['essence']);
    echo "<br>" . $v1->seDeplacer(20, 60); ?>
</body>

</html>