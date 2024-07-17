<?php
function writeSecretSentence(string $animal, string $element) : string {

    return "$animal s'incline face à $element";

}

echo WriteSecretSentence("le chat", "l'eau");