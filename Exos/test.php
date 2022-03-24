
<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
$_SESSION["usrnom"]= $_POST["nom"];
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php // titre page variable
        if (!(isset($_SESSION["usrnom"]))){
            echo "ERREUR login !";
        }
        else
        {
            echo "Au menu ..";
        }
         ?>
    </title>
</head>
<body>
    <form>
    <input type="text" placeholder="Entrez votre nom"> </br>
    <input type="password" placeholder="Entrez votre mdpé"> </br>
    <button type="submit">Valider</button>
</form>
    <?php // cas d'erreur => retour vers login.html
    if (!(isset($_SESSION["usrnom"]))){
    ?>
    <h1> ERREUR login : vous n'avez pas le droit </h1>
    <p> <a href="login.html"> Retour à la page d'accueil </a></p>
    <?php
    }
    else // authentification OK
    {
    ?>
    <h1> Au menu du jour pour vous, <?php echo $_SESSION["usrnom"]; ?> </h1>
    <ul>
        <li><a href="https://www.youtube.com/">Youtube</a></li>
        <li><a href="https://www.facebook.com/">Facebook</a></li>
</ul>
<?php
}
?>
    

</body>
</html>
