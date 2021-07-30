<?php

$invitati = [
    'Fra',
    'Bob',
    'Teo',
    'Nico'
];

$name = trim(strtolower($_GET['name']));
//var_dump($name);

if (in_array($name, $invitati)) {
    echo 'Benvenuto, il tuo nome è tra quello degli invitati!';
} else {
    echo 'Mi dispiace non sei tra gli invitati';
}

?>