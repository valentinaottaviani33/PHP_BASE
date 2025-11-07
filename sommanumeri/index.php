<?php

$numeri = [4,7,1,9];
$somma = 0;

//ciclo l'array di numeri e per ogni iterazione di "$i" aggiungo il valore a somma
foreach ($numeri as $valore){

    $somma += $valore;
}
echo "La somma dei numeri è: " . $somma . "<br>";


?>

<?php

if(isset($_POST['numero'])){

    $numero = (int) $_POST['numero'];

    //ciclo da 1 a 10
for ($i = 0; $i <= 10; $i++){

    //moltiplico il numero
    $risultato = $numero * $i;

    //stampo il risultato
    echo "$numero x $i= $risultato<br>";
}

}





?>

<form action="" method= "post">
    Inserisci un numero:
    <input type="number" name="numero" required>
    <input type="submit" value="Mostra tabellina">


</form>