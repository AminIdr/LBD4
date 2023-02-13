<?php
    $etudiants = ["Et123" => ["nom" => "AB", "prenom" => "AC", "moyenne" => 17], "Et676" => ["nom" => "BC", "prenom" => "BD", "moyenne" => 12], "Et998" => ["nom" => "CD", "prenom" => "CE", "moyenne" => 9], "Et764" => ["nom" => "DE", "prenom" => "DF", "moyenne" => 16.5]];
    // Question 1
    function afficher($code){
        global $etudiants;
        echo "Nom: " . $etudiants[$code]["nom"] . "\n";
        echo "Prenom: " . $etudiants[$code]["prenom"] . "\n";
        echo "Moyenne: " . $etudiants[$code]["moyenne"] . "\n";
    }

    // Question 2/3/4
    $max = 0;
    $min = 20;
    $failed_studs = [];
    foreach ($etudiants as $etudiant => $info){
        if ($info["moyenne"] > $max){
            $max = $info["moyenne"];
            $max_stud = $etudiant;
        }
        if ($info["moyenne"] < $min && $info["moyenne"] >= 10){
            $min = $info["moyenne"];
            $min_stud = $etudiant;
        }
        if ($info["moyenne"] < 10){
            array_push($failed_studs, $etudiant);
        }
    }
    afficher($max_stud);
    afficher($min_stud);
    var_dump($failed_studs);

?>