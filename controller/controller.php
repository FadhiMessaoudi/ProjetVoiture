<?php

function accueil()
{
    $login = $_POST['login'];
    require('./vues/accueilVoiture.php');
}

function login()
{
    require('./vues/login.php');
}

function resultat()
{
    require('./classesAuto/Vehicules.php');
    if (!empty($_POST['immatriculation'])) {
        $immat = htmlentities($_POST['immatriculation']);
        $col = htmlentities($_POST['couleur']);
        $pds = htmlentities($_POST['poids']);
        $puissance = htmlentities($_POST['puissance']);
        $capReservoir = htmlentities($_POST['capReservoir']);
        $nbPlaces = htmlentities($_POST['nbPlaces']);
        $assure = htmlentities($_POST['assure']);
        $v1 = new Vehicules($immat, $col, $pds, $puissance, $capReservoir, $nbPlaces);
    } // c'est ici que je dois mettre les GET

    require('./vues/resultat.php');
}
