<!-- Creiamo un array 'matches' contenente altri array i
quali rappresentano delle partite di basket di
un’ipotetica tappa del calendario. Ogni array della
partita avrà una squadra di casa e una squadra
ospite, punti fatti dalla squadra di casa e punti fatti
dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo
schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
    
    $matches = [
        [
            "casa" => "Napoli",
            "ospite" => "Scafati Basket",
            "puntiCasa" => 88,
            "puntiOspite" => 92,
        ],
        [
            "casa" => "Milano",
            "ospite" => "Roma Basket",
            "puntiCasa" => 78,
            "puntiOspite" => 83,
        ],
    ];

    foreach ($matches as $k => $match) {
        
        echo "{$match["casa"]} - {$match["ospite"]} | {$match["puntiCasa"]} - {$match["puntiOspite"]} <br>" ;
    };

?>

