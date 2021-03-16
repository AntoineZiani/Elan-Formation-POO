<?php

require "Animal.php";
require "Marque.php";
require "Ordinateur.php";

// instanciation de 2 objets de la classe Animal
$chien = new Animal("Chien", "Golden", 4, "2019-06-11");
$chat = new Animal("Chat", "Siamois", 4, "2018-09-11");

var_dump($chien);
var_dump($chat);

echo $chien->getNomAnimal(). " " .$chien ->getRace();

$chien->manger("Croquette");
$chien->manger("Viande");

$chat->manger("Poisson");

var_dump($chien);
var_dump($chat);

$chien->attaquer($chat);

echo $chien;
echo $chat;

$asus = new Marque("ASUS", "Corée");
$ordi1 = new Ordinateur($asus, "13", 16,"Amd treadripper");
$ordi2 = new Ordinateur($asus, "x470",32,"Ryzen 9 5990X");

echo $ordi1;
echo $ordi2;

?>