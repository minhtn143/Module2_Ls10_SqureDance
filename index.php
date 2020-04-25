<?php
include "Dancer.php";
include "SquareDance.php";

$club = new SquareDance();

$club->addToQueue('Jones','Male');
$club->addToQueue('James','Male');
$club->addToQueue('Jack','Male');
$club->addToQueue('Jordan','Male');
$club->addToQueue('Joana','Female');
$club->addToQueue('Jenny','Female');
$club->addToQueue('Joey','Female');


echo $club->makePair().'<br>';
echo $club->makePair().'<br>';
echo $club->makePair().'<br>';
echo $club->makePair().'<br>';
echo $club->makePair().'<br>';

$club->addToQueue('Rose','Female');
$club->addToQueue('Alice','Female');
$club->addToQueue('Taylor','Female');

echo $club->makePair().'<br>';
echo $club->makePair().'<br>';
echo "<br> <h3>Queue List:</h3>";

foreach ($club->manQueue as $dancer) {
    echo $dancer->getName()." ";
}
foreach ($club->womanQueue as $dancer) {
    echo $dancer->getName()." ";
}

echo "<br> <h3>In club List:</h3>";
foreach ($club->getSquareDance() as $index => $couple) {
    foreach ($couple as $dancer) {
        echo $dancer->getName()." ";
    }
    echo "<br>";
}