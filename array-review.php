<?php
/**
 * Created by PhpStorm.
 * User: michael horn
 * Date: 1/12/2018
 * Time: 7:53 PM
 */

$animals = array("panda","alpaca","boa");

function printAnimals($array){
    sort($array);
    foreach($array as $value){
        echo($value . " ");
    }
    echo "<br>";
}

function addAnimal($animal,$array){
    $copyAnimal = strtolower($animal);
    $copyArray = array_map('strtolower',$array);
    echo "Adding $animal to array <br>";

    if(!in_array($copyAnimal, $copyArray)){
        array_push($array,$animal);

    }
    return $array;
}

printAnimals($animals);
$animals = addAnimal("goat",$animals);
printAnimals($animals);
$animals = addAnimal("Boa",$animals);
printAnimals($animals);


