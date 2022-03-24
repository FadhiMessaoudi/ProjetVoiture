<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>LA VOATURE</title>
</head>

<body>
    <div class="container-fluid bg-dark">
        <a class="navbar-brand text-light" href="#">Menu</a>
        <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample02">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
            </ul>
            <form>
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>


    <h1>Les voitures</h1>
    <div>
        <p>Bonjour <?= $login; ?></p>

        <form method="post">
            <input type="text" id="immatriculation" name="immatriculation" placeholder="Immatriculation" /></br>
            <input type="text" id="couleur" name="couleur" placeholder="couleur" /></br>
            <input type="number" id="poids" name="poids" placeholder="Poids en Kg" /> Kg </br>
            <input type="number" id="puissance" name="puissance" placeholder="Puissance en CV" /> CV</br>
            <input type="number" id="capReservoir" name="capReservoir" placeholder="Capacité du Reservoir" /> Litres</br>
            <input type="number" id="nbPlaces" name="nbPlaces" placeholder="Nombre de places " /></br>
            <input type="text" id="repeindre" name="repeindre" placeholder="Couleur de la REpeinture ?" /></br>
            <input type="radio" id="assure" name="assure" value="oui"> Assuré
            <input type="radio" id="assure" name="assure" value="non"> Non assuré


            <h3>On met l'essence ici.</h3>
            <div>
                <input type=number id="essence" name="essence" placeholder="Combien d'essence?" /> </br>
                <input type="submit" name="bouton2" id="bouton2" value="Payer" style="width:80px; height:30px;" />
            </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>

</html>