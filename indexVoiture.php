<?php

include('./controller/controller.php');
//routeur
if (!empty($_POST['valider'])) {
    accueil();
} elseif (!empty($_POST['bouton2'])) {
    resultat();
} else {
    login();
}
