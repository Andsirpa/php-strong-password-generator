<?php

// creo la funzione per generare una password
function generate_password($length)
{
    // con 'range' prendo i caratteri compresi
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $password = "";

    // genero una password casuale
    for ($i = 0; $i < $length; $i++) {
        $randomChar = $characters[rand(0, strlen($characters) - 1)];

        // Concatena il carattere alla stringa $password
        $password .= $randomChar;
    }
    return $password;
}