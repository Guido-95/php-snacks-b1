<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<body>
    <?php 
    $partiteBasket = [ 

        'partita 1' => 
        [
        'squadraCasa' => 'Seirin',
        'squadraOspite' => 'Teiko',
        'puntiCasa' => 85,
        'puntiOspite' => 70
        ],
        
        'partita 2' =>
        [
        'squadraCasa' => 'Teiko',
        'squadraOspite' => 'Seirin',
        'puntiCasa' => 102,
        'puntiOspite' => 105
        ],

        'partita 3' =>
        [
        'squadraCasa' => 'Rakuzan',
        'squadraOspite' => 'Seirin',
        'puntiCasa' => 100,
        'puntiOspite' => 101
        ]

    ];
    

    for ($i=0; $i < count($partiteBasket); $i++) { 
        echo 
        '<h2>' 
        . $partiteBasket['partita' . ' ' .($i + 1)]['squadraCasa'] . ' - ' . $partiteBasket['partita' . ' ' . ($i + 1)]['squadraOspite'] . ' | ' 
        . $partiteBasket['partita' . ' ' . ($i + 1)]['puntiCasa'] . ' - ' . $partiteBasket['partita' . ' ' . ($i + 1)]['puntiOspite'] . 
        '</h2>';
    
    }

    ?>
    
    
</body>
</html>