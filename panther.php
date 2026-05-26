<?php
// panther.php

$name = "Shadow";
$species = "Black Panther";
$age = 5;
$speed = "58 km/h";
$habitat = "Rainforest";

echo "<h1>Panther Profile</h1>";

echo "<p><strong>Name:</strong> " . $name . "</p>";
echo "<p><strong>Species:</strong> " . $species . "</p>";
echo "<p><strong>Age:</strong> " . $age . " years old</p>";
echo "<p><strong>Top Speed:</strong> " . $speed . "</p>";
echo "<p><strong>Habitat:</strong> " . $habitat . "</p>";

// Condition example
if ($age < 7) {
    echo "<p>$name is a young panther.</p>";
} else {
    echo "<p>$name is an adult panther.</p>";
}
?>