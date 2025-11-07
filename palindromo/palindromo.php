<?php

    //controllo sul dato inserito
    if(isset($_GET['parola'])){

        //prendo il dato inserito e tramite il metodo STR(string)TOLOWER CONVERTO IN MINUSCOLO
        $parola = strtolower($_GET['parola']); //converto in minuscolo

        $parolaInvertita = strrev($parola); // inversione della stringa

        if( $parola == $parolaInvertita){

            echo "La parola $parola è palindroma";
        }else {

            echo "<p>La parola $parola non è palindroma</p>";
        }

    }

?>