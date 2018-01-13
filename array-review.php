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

printAnimals($animals);
