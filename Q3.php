<?php
$notes = [10, 14, 14, 12, 15, 16, 15, 20, 18, 20, 16, 11];
// Q1
function afficher($notes) {
    foreach ($notes as $note) {
        echo $note . " ";
    }
}
afficher($notes);
echo "<br>";
// Q2
function moyenne($notes) {
    $somme = 0;
    foreach ($notes as $note) {
        $somme += $note;
    }
    return $somme / count($notes);
}
echo moyenne($notes);
echo "<br>";
// Q3

function nombreSup10($notes) {
    $compteur = 0;
    foreach ($notes as $note) {
        if ($note > 10) {
            $compteur++;
        }
    }
    return $compteur;
}
echo nombreSup10($notes);
echo "<br>";
// Q4
function nombre20($notes) {
    $compteur = 0;
    foreach ($notes as $note) {
        if ($note == 20) {
            $compteur++;
        }
    }
    return $compteur;
}
echo nombre20($notes);
echo "<br>";
// Q5 (Bubble sort algorithm)
function bubbleSort($notes) {
    for ($i=0; $i<count($notes); $i++) {
        for ($j=0; $j<count($notes)-1; $j++) {
            if ($notes[$j] > $notes[$j+1]) {
                $tmp = $notes[$j];
                $notes[$j] = $notes[$j+1];
                $notes[$j+1] = $tmp;
            }
        }
    }
    return $notes;
}

var_dump(bubbleSort($notes));
echo "<br>";

function search($val, $notes) {
    for ($i = 0; $i < count($notes); $i++) {
        if ($notes[$i] == $val) {
            return $i;
        }
    }
    return null;
}
echo search(15, $notes);
?>
