<?php

    // définit un array => une liste
    // - L'arme fatale
    // - Interstellar
    // - H2G2
    // - Forrest Gump
    // - monty piton et le sacré graal

    // déclaration d'un array avec ses valeurs
    // $movieList = ["L'arme fatale", 'Interstellar', 'H2G2', 'Forrest Gump', 'Monty Python et le Sacré Graal'];
    // équivalent lisible : 
    $movieList = [
        "L'arme fatale", // index 0
        'Interstellar', // index 1
        'H2G2', // index 2
        'Forrest Gump', // index 3
        'Monty Python et le Sacré Graal' // index 4
    ];

    // Un array = une variable qui contient des variables
    // chaque ligne, chaque élément d'un array se comporte comme une variable

    // lire une valeur => par ex. pour l'afficher
    // on veut afficher le 3e film de la liste
    // les éléments d'un array sont "étiquetés" par PHP en commençant par 0, donc le 3e film est au numéro 2
    // numéro d'ordre, position, étiquette => index
    // les index sont des integer
    // echo $movieList[0];
    //$movieList[0];
    /******************************************** */
    // creation de la liste $rooms
    /******************************************** */
    $rooms = [
        'Athéna', // => index 0
        'Dyonisos', // => index 1
        'Hadès', // => index 2
        'Zeus' // => index 3
      ];

  
    // compter le nombre d'éléments dans un array
    $moviesCount = count($movieList); // count renvoie sous forme d'int le nombre d'éléments dans l'array

    // var_dump($moviesCount);
      /// var $roomsCount
    $roomsCount = count($rooms);
    include 'header.php';
?>

<section>
    <!-- Générer une liste de films selon notre array $movieList -->
    <ul>
    <?php
        // pour chaque film de la liste, on veut un élément <li> qui  contient le nom du film
        // on utilise comme max (exclusif, donc pas de <=) le nombre d'éléments dans l'array
        for ($i = 0; $i < $moviesCount; $i++) :
            // syntaxe alternative, pas d'accolades mais tout le code répété se trouvera entre ":" et "endfor"
    ?>
            <li><?php echo $movieList[$i] ?></li>

        <?php endfor; ?>
    </ul>
</section>
<section>
<h2>Salles</h2>
<ul>
    <!---------------utilisation de la boucle pour lire le tableau $rooms---->
    <?php for ($i=0;$i<$roomsCount;$i++):?>
<li>
<?php echo $rooms[$i];?>
    </li>
    <?php endfor;?>
    </ul>
</section>
