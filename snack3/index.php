<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->
<body>

    <?php
    // array di numeri casuali
    $numeriCasuali = [];
    
    // contatore
    $i = 0;
    while (count($numeriCasuali) < 15) {
        // numero casuale da 1 a 20
        $numeroCasuale = rand(1,20);
        // se non c'è già il numero pushalo nell'array e incrementa il contatore
        if(!array_key_exists($numeroCasuale,  $numeriCasuali )){
            $numeriCasuali[] = $numeroCasuale;
            $i++;
        }
        
    };
    var_dump($numeriCasuali);
    ?>
    
</body>
</html>
