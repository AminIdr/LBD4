<?php
$emails = ["test1@gmail.com", "test2@gmail.com", "test3@gmail.com", "test4@gmail.com"];

$res = array();
foreach($emails as $email){
    $tmp = explode("@", $email)[1];
    if(array_key_exists($tmp, $res)) $res[$tmp]++;
    else $res[$tmp] = 1;
}

foreach ($res as $domaine => $occurence){
    echo "$domaine: $occurence <br>";
}
?>