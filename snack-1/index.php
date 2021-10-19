<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
$games=[
    [
        "squadraDiCasa"=>"Squadra di casa 1",
        "squadraOspite"=>"Squadra ospite 1",
        "puntiSquadraDiCasa"=>55,
        "puntiSquadraOspite"=>60,
    ],
    [
        "squadraDiCasa"=>"Squadra di casa 1",
        "squadraOspite"=>"Squadra ospite 1",
        "puntiSquadraDiCasa"=>55,
        "puntiSquadraOspite"=>60,
    ],
    [
        "squadraDiCasa"=>"Squadra di casa 1",
        "squadraOspite"=>"Squadra ospite 1",
        "puntiSquadraDiCasa"=>55,
        "puntiSquadraOspite"=>60,
    ],
];

var_dump($games[0]["squadraDiCasa"]);