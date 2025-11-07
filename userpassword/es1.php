<?php

//controllo sul dato inserito
if(isset($_POST['username'], $_POST['password'])){

    //salvo utente inserito
    $user = $_POST ['username'];
    //salvo la password inserita
    $password = $_POST ['password'];

    //queste sono le credenziali che servono per accedere (hardcoded, ovvero che inserisco i dati all'interno del codice)
    $user_valido = "admin";
    $password_valida = "12345";

    //verifica delle credenziali inserite

    if($user === $user_valido && $password === $password_valida){

        echo "<p> accesso riuscito";
    }else {

        echo "<p> credenziali errate";
    }
}







?>