<!-- 
Creiamo un array
contenente le partite di basket di un'ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:

Olimpia Milano - Cantù | 55-60 -->

<?php

$scores = [
    [
        "Lakers" => 3,
        "Celtics" => 2,
    ],
    [
        "Lakers" => 2,
        "Celtics" => 5,
    ],
    [
        "Lakers" => 3,
        "Celtics" => 2,
    ]
];

foreach($scores as in $key => $value) {
    echo $key . " is at " . $value;
    }
?>