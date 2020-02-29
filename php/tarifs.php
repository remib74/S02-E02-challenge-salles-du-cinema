<?php
// on prépare des variables pour pouvoir les utiliser dans le html
$age = 43;
$tarifPlein = 8.3;
$tarifReduit = 6.8;
$tarifEnfant = 4.5;

// on récupère le montant à utiliser en fonction de l'age de la personne
// PHP sort du bloc conditionnel dès qu'une des conditions renvoie true => on gère d'abord les moins de 14 ans
// si moins de 14 ans ?
if ($age < 14) {
  // tarif enfant
  $montant = $tarifEnfant;
}
// sinon si moins de 16 ans ou plus de 60?
else if ($age < 16 || $age > 60) {
  // tarif réduit
  $montant = $tarifReduit;
}
// sinon 
else {
  // tarif plein
  $montant = $tarifPlein;
}

// En php on peut répéter des actions un certain nombre de fois
// => boucle
// plusieurs types pour faire des répétitions selon différents usages
// ici, on veut faire des répétitions autant de fois qu'on le souhaite => for(compteur;condition;action)
// compteur = on initialise une variable qui nous servira à savoir à quel tour nous en sommes
// condition = une condition qui doit être vraie pour lancer le prochain tour de boucle
// action = généralement, on incrémente le compteur (incrémenter = faire +1 sur une variable) => $compteur++
// $compteur++ équivaut à $compteur = $compteur + 1;
/*
    for ($compteur = 1; $compteur <= 99; $compteur++) {
        // on exécute à chaque tour tout le code entre les accolades
        echo "$compteur<br>";
    }
    */
// quand PHP sort du for (la condition a renvoyé false), il continue l'exécution du reste (sauf erreur fatale dans la boucle)

// débug (ou simple vérification)
/*
    var_dump($montant); // var_dump() est une fonction fournie par PHP (on peut toujours l'utiliser) => afficher le contenu et la nature d'une variable
    */

// on récupère ici TOUT le code (html compris) d'un autre fichier
// on spécifie dans une string le CHEMIN vers le fichier à inclure
/*************************consommations Extras***************** */

$extras = [
  // => index 0
  [
    'Popcorn', // => sous-index 0
    'L', // => sous-index 1
    2.9 // => sous-index 2
  ],
  // => index 1
  [
    'Popcorn', // => sous-index 0
    'XL', // => sous-index 1
    4 // => sous-index 2
  ],
  // => index 2
  [
    'Chips', // => sous-index 0
    '50g', // => sous-index 1
    2.5 // => sous-index 2
  ],
  // => index 3
  [
    'M&M\'s', // => sous-index 0
    '100g', // => sous-index 1
    4 // => sous-index 2
  ],
  // => index 4
  [
    'Soda', // => sous-index 0
    '33cl', // => sous-index 1
    3.2 // => sous-index 2
  ],
  // => index 5
  [
    'Evian', // => sous-index 0
    '33cl', // => sous-index 1
    3 // => sous-index 2
  ]
];
/********************************************************************* */
/*************************extra sous array *****************************/
$extrasCount = count($extras);
include 'header.php';

?>
<section id="tarifs">
  <h2>Tarifs</h2>
  <div class="flex">
    <ul>
      <li>Tarif Plein : 8,30 &euro;</li>
      <li>Tarif Réduit : 6,80 &euro;</li>
      <li>Tarif Enfant : 4,50 &euro;</li>
      <li>Supplément 3D : 1 &euro;</li>
    </ul>
    <ul>
      <li>Abonnement 5 places : -10%</li>
      <li>Abonnement 5 places -25ans : -20%</li>
    </ul>
  </div>
  <p>
    Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans<br>
    Tarif Enfant pour les - de 14 ans
  </p>

  <h2>Selon votre âge</h2>
  <p>
    Âge du capitaine : <?php echo $age; ?> ans.
  </p>
  <p>
    Le tarif du capitaine : <?php echo $montant ?> €
  </p>
  <!-- On déclare le tableau -->
  <table>
    <!-- On ajoute une ligne -->
    <tr>
      <!-- On rajoute des colonnes -->
      <td>Âge</td>
      <td>Tarif</td>
    </tr>
    <?php for ($age = 1; $age <= 99; $age++) {
      // tout ce qui se trouve entre les accolades (y compris le HTML) sera répété par la boucle
      // on détermine le montant pour le tour de boucle courant
      if ($age < 14) {
        $montant = $tarifEnfant;
      } else if ($age < 16 || $age > 60) {
        $montant = $tarifReduit;
      } else {
        $montant = $tarifPlein;
      }
    ?>
      <!-- On veut répliquer cette ligne -->
      <tr>
        <td><?php echo $age ?> ans</td>
        <td><?php echo $montant ?>€</td>
      </tr>
    <?php } ?>
  </table>
</section>
<section>
  <h2>Extras</h2>
  <ul>
    <!-------repeter la boucle pour lire le tableau extra------->
    <?php for ($i = 0; $i < $extrasCount; $i++) { ?>
      <li>
        <?php 
        //afficher le tableau extras et ses sous elements.... foreach c'est surement plus simple... mais c'est plus tard
        echo $extras[$i][0] . " ";
        echo $extras[$i][1] . " ";
        echo $extras[$i][2] . " ";
        ?>
      </li>
    <?php } ?>
  </ul>
</section>
</main>
<footer>
  Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
</footer>
</body>

</html>