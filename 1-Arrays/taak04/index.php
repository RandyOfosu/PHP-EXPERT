<?php

$speelgoed = [

    [
        'naam' => 'bal',
        'soort' => 'sport',
        'prijs' => '5.00'
    ],
    [
        'naam' => 'knuffelbeer',
        'soort' => 'knuffels',
        'prijs' => '9.50'
    ],
    [
        'naam' => 'Catan',
        'soort' => 'bordspel',
        'prijs' => '39.00'
    ],
];

echo "Speelgoed " . $speelgoed[0]["naam"]." uit de categorie ".$speelgoed[0]["soort"]." kost ".$speelgoed[0]["prijs"].".<br>";
echo "Speelgoed " . $speelgoed[1]["naam"]." uit de categorie ".$speelgoed[1]["soort"]." kost ".$speelgoed[1]["prijs"].".<br>";
echo "Speelgoed " . $speelgoed[2]["naam"]." uit de categorie ".$speelgoed[2]["soort"]." kost ".$speelgoed[2]["prijs"].".<br>";

$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];

echo "Games " . $games['sport']['naam']." ".$games['sport']['uitgever']." ".$games['sport']['prijs']."<br>";
echo "Games " . $games['action']['naam']." ".$games['action']['uitgever']." ".$games['action']['prijs']."<br>";
echo "Games " . $games['fps']['naam']." ".$games['fps']['uitgever']." ".$games['fps']['prijs']."<br>";

?>