<?php

// Q1
$etudiants = ["Et123" => ["Nom" => "AB", "Prenom" => "AC", "Notes" => ["module1" => 13, "module2" => 12, "module3" => 14]],
            "Et676" => ["Nom" => "BC", "Prenom" => "BD", "Notes" => ["module1" => 15, "module2" => 11, "module3" => 11]],
            "Et998" => ["Nom" => "CD", "Prenom" => "CE", "Notes" => ["module1" => 16, "module2" => 14, "module3" => 10]],
            "Et764" => ["Nom" => "DE", "Prenom" => "DF", "Notes" => ["module1" => 9, "module2" => 15, "module3" => 8]]];

// Q2
foreach($etudiants as $etudiant => $info) {
    $maxstr = "module1";
    $minstr = "module1";
    $minint = $info["Notes"][$maxstr];
    $maxint = $info["Notes"][$minstr];
    foreach($info["Notes"] as $module => $note) {
        if ($note > $maxint) {
            $maxstr = $module;
            $maxint = $info["Notes"][$maxstr];
        }
        if ($note < $minint) {
            $minstr = $module;
            $minint = $info["Notes"][$minstr];
        }
    }
    echo $etudiant."| Max: ".$maxstr." | Min: ".$minstr."<br>";
}

// Q3
$max_module1 = 0;
$min_module1 = 20;
$max_module2 = 0;
$min_module2 = 20;
$max_module3 = 0;
$min_module3 = 20;

foreach($etudiants as $etudiant => $info) {
    if ($max_module1 < $info["Notes"]["module1"]){
        $max_module1 = $info["Notes"]["module1"];
    }
    if ($min_module1 > $info["Notes"]["module1"]){
        $min_module1 = $info["Notes"]["module1"];
    }
    if ($max_module2 < $info["Notes"]["module2"]){
        $max_module2 = $info["Notes"]["module2"];
    }
    if ($min_module2 > $info["Notes"]["module2"]){
        $min_module2 = $info["Notes"]["module2"];
    }
    if ($max_module3 < $info["Notes"]["module3"]){
        $max_module3 = $info["Notes"]["module3"];
    }
    if ($min_module3 > $info["Notes"]["module3"]){
        $min_module3 = $info["Notes"]["module3"];
    }
}

echo "Max module 1: $max_module1 <br>";
echo "Min module 1: $min_module1 <br>";
echo "Max module 2: $max_module2 <br>";
echo "Min module 2: $min_module2 <br>";
echo "Max module 3: $max_module3 <br>";
echo "Min module 3: $min_module3 <br>";

// Q4

foreach($etudiants as $etudiant => $info) {
    $moyenne = 0;
    foreach($info["Notes"] as $note) {
        $moyenne += $note;
    }
    $moyenne /= 3;
    if ($moyenne >= 10) echo $etudiant."a validé.<br>";
    else echo $etudiant."n'a pas validé.";
}



?>