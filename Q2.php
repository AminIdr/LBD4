<?php
$moisFr = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
// Q1-a
for ($i = 1; $i <= count($moisFr); $i++) {
    echo "$i - $moisFr[$i]<br>";
}
// Q1-b
$ind = 1;
foreach ($moisFr as $elem) {
    echo "$ind - $elem<br>";
    $ind++;
}

// Q2
echo $moisFr[0 + date('m')];


echo "<br>";
// Q3
$intVal = intval(date('m'));
echo $moisFr[$intVal];

echo "<br>";
// Q4
$moisFr2 = array(1=>'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 13=>'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
for ($i = 1; $i <= count($moisFr2); $i++) {
    echo "$i - $moisFr2[$i]<br>";
}
// On remarque que les six derniers mois du tableau ne s'affichent pas
/* Une solution du problème serait d'utiliser la boucle foreach pour parcourir tous les élements du tableau quelque soit leurs indices.*/
foreach ($moisFr2 as $elem) {
    echo "$elem<br>";
}
?>