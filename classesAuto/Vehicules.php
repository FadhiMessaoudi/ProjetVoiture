<?php
class Vehicules
{
  // Variables
  protected string $immatriculation;
  protected string $couleur;
  protected int $poids;
  protected int $puissance;
  protected $capReservoir;
  protected $nivEssence;
  protected int $nbPlaces;
  protected $assure;
  protected string $message1;

  //  fonction Construct
  function __construct(string $immatriculation = 'www', string $couleur, int $poids = 000, int $puissance = 000, int $capReservoir = 000, int $nbPlaces = 000)
  {

    $this->immatriculation = $immatriculation;
    $this->couleur = $couleur;
    $this->poids = $poids;
    $this->puissance = $puissance;
    $this->capReservoir = $capReservoir;
    $this->nbPlaces = $nbPlaces;

    $this->nivEssence = 5;
    $this->assure = false;
    //$this->msg = "Prêt !";
  }
  // GETTERS

  function getImmatriculation()
  {
    return $this->immatriculation;
  }

  function getCouleur()
  {
    return $this->couleur;
  }

  function getPoids()
  {
    return $this->poids;
  }

  function getPuissance()
  {
    return $this->puissance;
  }

  function getCap()
  {
    return $this->capReservoir;
  }

  function getNbPlaces()
  {
    return $this->nbPlaces;
  }
  // SETTERS
  /*function setAssurance($assure)
  {
    $this->assure = $assure;
    $this->setMessage();
  }

  function setMessage()
  {
    if ($this->assure) {
      $this->message1 = "Bien vu t'es assuré";
    } else {
      $this->message1 = "Olala noon";
    }
  }

  function getMessage1()
  {
    return $this->message1;  // méthode plus longue pour return message
  }*/

  function assure($assure)
  {
    if (!(isset($assure))) {
      $this->message1 = " Etes-vous assuré beau gosse?";
      return false;
    }
    if ($assure == "oui") {
      $this->message1 = " Vous êtes assuré";
    } elseif ($assure == "non") {
      $this->message1 = " Non pas assuré";
    }
    return $this->message1;
  }



  //3 Methode de Service

  function repeindre($colorfontion)
  {

    if (!(isset($colorfontion))) {
      $this->message2 = "GG belle Erreur ici";
      return false;
    }
    if ($colorfontion != $this->couleur) {
      $this->message2 = "C'est un très joli $colorfontion qui habille cette voiture ";
    } else {
      $this->message2 = " C'est la même couleur";
      $this->couleur = $colorfontion;
    }
    return $this->message2;  // meilleure méthode pour retourner message
  }


  function mettreEssence(int $essence)
  {
    if ($this->capReservoir <= $essence + $this->nivEssence) {
      return false;
    } else {
      $this->nivEssence += $essence;
      return "le niveau d'essence est maintenant de " . $this->nivEssence . " Litres";
    }
  }

  function consommation($distance, $vitesse)
  {

    if ($vitesse < 50) {
      $conso = $distance * 0.1;
    }
    if ($vitesse > 50 && $vitesse < 90) {
      $conso = $distance * 0.05;
    }
    if ($vitesse > 90 && $vitesse < 130) {
      $conso = $distance * 0.08;
    } else {
      $conso = $distance * 0.12;
    }
    return $conso;
  }
  function seDeplacer($distance, $vitesse)
  {
    $conso = $this->consommation($distance, $vitesse);

    if ($conso > $this->nivEssence) {
      $this->message = "Tu vas tomber en panne sur la route";
    }
    if ($conso == $this->nivEssence) {
      $this->message = "C'est tout juste";
    } else {
      $this->message = "Tu peux largement aller ou tu veux";
    }
    return $this->message;
  }
}
