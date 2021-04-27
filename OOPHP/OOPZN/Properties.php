<?php 
require_once "Person.php";
$person1 = new Person();
$person1->nama="Dzaki";
$person1->alamat="tapos";
$person1->country="Indonesia";
var_dump($person1);

$person2 = new Person();
$person2->nama="Dzaki";
$person2->alamat=null;
$person2->country="Indonesia";
var_dump($person2);
?>