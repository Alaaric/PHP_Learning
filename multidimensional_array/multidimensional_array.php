<?php
$movies = [
    'Indiana Jones et le Temple maudit' => ['Harrison Ford', 'Kate Capshaw', 'Ke Huy Quan'],
    "Les Aventuriers de l'arche perdue" => ['Harrison Ford', 'Karen Allen', 'Paul Freeman'],
    'Indiana Jones et la Dernière Croisade' => ['Harrison Ford', 'Sean Connery', 'Denholm Elliott']
];
$keys = array_keys($movies);

for ($i = 0; $i < count($movies); $i++) {
    echo "Dans le film $keys[$i] les principaux acteurs sont :\n";
    foreach ($movies[$keys[$i]] as $actors) {
        echo "- $actors \n";
    }
}