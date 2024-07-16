<?php
$movies = [
    'Indiana Jones et le Temple maudit' => 1984,
    "Les Aventuriers de l'arche perdue" => 1981,
    'Indiana Jones et la Dernière Croisade' => 1989
];
arsort(
$movies
);

foreach ($movies as $movie=> $date) {
    echo "$date - $movie ";
}
