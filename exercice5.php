<?php
// Avec la boucle for

$x = 789;
$nbTirages = 0;

for ($i=$x; $i>1; $i++) {
    $tirage = rand(0, 1000);
    $nbTirages++;

    if ($tirage == $x) {
        break;
    }
}

echo "Le nombre " . $x . " a été trouvé en " . $nbTirages . " tiarges.";


// Avec la boucle while 

$x = 789;
$nbTirages = 0;

while (true) {
    $tirage = rand(0, 1000);
    $nbTirages++;

    if ($tirage == $x) {
        break;
    }
}

echo "Le nombre " . $x . " a été trouvé en " . $nbTirages . " tiarges.";

?>