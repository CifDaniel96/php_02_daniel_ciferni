<?php

$users = [
    ['name'=> 'Manuel', 'surname'=> 'Rossi', 'gender'=>'M' ],
    ['name'=> 'Elena', 'surname'=> 'Cavalli', 'gender'=> 'F'],
    ['name'=> 'Giordano', 'surname' => 'Piedi', 'gender' => 'M'],
    ['name'=> 'Federica', 'surname'=> 'Bianchi', 'gender' => 'F'],
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
];
foreach($users as $user){
    if ($user['gender'] === 'M'){
        echo('Buongiorno Sig.'." ". $user['name'] ." ". $user['surname']. "\n");
    }elseif ($user['gender'] === 'F'){
        echo('Buongiorno Sig.ra'." ". $user['name'] ." ". $user['surname']. "\n");
    }else{
        echo('Buongiorno' ." ". $user['name'] ." ".$user['surname']. "\n");
    }}
    