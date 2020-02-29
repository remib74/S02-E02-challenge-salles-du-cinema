# Salles de notre cinéma

On veut afficher la liste des salles de notre cinéma.

Voici la liste :

```php
<?php
// [...]
$rooms = [
  'Athéna',
  'Dyonisos',
  'Hadès',
  'Zeus'
];
```

<details><summary>tableau avec les index indiqués</summary>

```php
<?php
// [...]
$rooms = [
  'Athéna', // => index 0
  'Dyonisos', // => index 1
  'Hadès', // => index 2
  'Zeus' // => index 3
];
```

</details>

## Etapes

Si besoin, récupérer le code du prof :
- cloner dans le répertoire de la saison
- copier tous les fichiers
- les coller dans le dossier de ce challenge

### #1 - Afficher la première salle :one:

- dans la page "en salle", ajouter un titre "Salles" après la liste des films
- puis ajouter une balise `<ul>`
- puis à l'intérieur ajouter une balise `<li>`
- dans cette balise `<li>`, ouvrir l'interpréteur PHP pour qu'il affiche "Athéna"
  - en utilisant le tableau `$rooms` :wink:

### #2 - Afficher la deuxième salle :two:

- ajouter une seconde balise `<li>`
- dans cette balise `<li>`, ouvrir l'interpréteur PHP pour qu'il affiche "Dyonisos"
  - en utilisant le tableau `$rooms` :wink:

### #3 - Analyser :mag_right:

- les 2 lignes de code pour les deux `<li>` sont quasiment similaires
- trouver LA partie changeante qui sera à remplacer par une variable
- cette variable sera donc la variable qui va "boucler", changer de valeur dans la boucle

<details><summary>Etapes intermédiaires en cas de blocage pour écrire la boucle de l'étape #4</summary>

- remplacer la partie "variable" par une variable `$i`
- affecter une valeur à `$i` pour l'affichage du premier élément
- puis affecter une valeur à `$i` pour l'affichage du deuxième élément
- au final, le code ressemblerait à ceci :arrow_down:

```php
<?php

$totoArray = [
  'toto',
  'titi',
  'tata'
];

// Affichage du 1er élément
$i = 0;
echo $totoArray[$i];

// Affichage du 2e élément
$i = 1;
echo $totoArray[$i];

```

</details>

### #4 - Boucler :loop:

**Rappels**

- les étapes précédentes nous ont permis de cibler le code à répéter dans une boucle
- `$rooms` est le tableau contenant la liste des salles à afficher

**Todo**

- on va remplacer les 2 affichages "`<li>`" par une boucle
- écrire une boucle (avec `while` ou `for`) permettant de changer la valeur de la variable "trouvée" en étape #3
  - initialiser cette variable avec la première valeur (permettant d'avoir la première salle)
  - boucler "tant que" la variable n'a pas dépassé la dernière valeur (permettant d'avoir la dernière salle)
  - entre chaque "boucle"/"iteration" ajouter 1 à la variable
- entre les accolades de cette boucle `{ ... }`, le code va se répéter, s'exécuter à chaque "boucle"/"iteration"
- y placer l'affichage d'un `<li>` avec le nom de salle
  - ce qu'on a fait en étape 3
  - si besoin, commencer sans les `<li>`, et les rajouter ensuite
- toutes les salles du tableau `$rooms` doivent s'afficher

## Bonus

[Dans le bonus](bonus.md), on va vouloir afficher la liste de consommations vendues au cinéma.
