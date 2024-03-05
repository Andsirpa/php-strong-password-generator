<?php

// creo la funzione per generare una password
function generate_password($length)
{
    // con 'range' prendo i caratteri compresi
    $characters = range('a', 'z') . range('A', 'Z') . range('0', '9');
    $password = "";

    // genero una password casuale
    for ($i = 0; $i < $length; $i++) {
        $password .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $password;
}

