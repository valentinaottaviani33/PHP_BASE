<!------------------------------VARIE----------------------------->

<?php 

/*Dichiarazione di una variabile*/
//$nome = ["pippo", "paperino"];

//string -> stringa
//int -> numero intero
//float -> numero decimale
//bool -> booleano (vero o falso)

//stampo a schermo qualcosa : echo mostra il valore
//echo " $nome, questa funzione stampa a schermo qualcosa";



//var_dump serve per mostrare le informazioni di una variabile : il valore, il tipo e la lunghezza

//var_dump($nome);

?>

<!------------------------------VARIABILI----------------------------->

<?php

    $nome ="Luca"; //string
    $eta = 35; //int

    echo "Ciao $nome, hai $eta anni!";

    var_dump($nome);



?>

<!------------------------------COSTANTI----------------------------->

<?php

    //Modo per definire costanti
    define("tassa_stato", 26);
    define("inps", 15);
    define("commercialista", 800);

    echo tassa_stato;
    echo inps;
    echo commercialista;


?>

<!------------------------------CONDIZIONI IF-ELSE----------------------------->

<?php

    $nome = 5;

    if($numero > 0){

        echo "positivo";
    }else {

        echo "negativo o zero";
    }

?>

<!---------------------------SWITCH CASE-------------------------------->

<?php

    // Il costrutto switch case break default viene utilizzato per non annidare troppi if-else
    $colore = "Rosso";

    switch ($colore){

        case "Rosso":
            echo "Hai scelto Rosso";
            break;
        case "Giallo":
            echo "Hai scelto Giallo";
            break;
        case "Verde":
            echo "Hai scelto Verde";
            break;
        default :
            echo "Nessun colore riconosciuto";

    }

?>

<!---------------------------CICLO FOR(per n. volte..)-------------------------------->

<?php

    for($i = 0; $i <= 5; $i++){

        echo "numero $i <br>";
    }


?>

<!---------------------------CICLO WHILE (FINTANTO CHE...)-------------------------------->

<?php

    $i = 1;

    while ($i <= 3){

        echo "valore : $i <br>";
        $i++;
    }

?>

<!---------------------------CICLO FOREACH-------------------------------->

<?php

    //DATO UN ARRAY DI NOMI, STAMPARE TUTTI I NOMI SINGOLARMENTE

    $nomi = ["Pippo", "Paperino", "Pluto"];

    foreach($nomi as $nome){ //nome che gira all'interno di nomi

        echo "$nome <br>";
    }


?>

<!---------------------------FUNZIONI-------------------------------->

<?php

    function saluta($nome){

        return "Ciao, $nome";
    }

    echo saluta(" diego ");//passo il valore di $nome all'interno della funzione e richiamo la funzione
    echo saluta(" pippo ");
    echo saluta( 15 );

?>

