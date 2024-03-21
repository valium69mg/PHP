<?php

require_once('./CoffeeMaker.php');
require_once('./LatteMaker.php');
require_once('./CapuccinoMaker.php');
require_once('./AllInOneCoffeeMaker.php');


$coffeeMaker = new CoffeeMaker();
$coffeeMaker->makeCoffee();

$latteMaker = new LatteMaker();
$latteMaker->makeLatte();
$latteMaker->makeCoffee();


$capuccinoMaker = new CapuccinoMaker();
$capuccinoMaker->makeCapuccino();
$capuccinoMaker->makeCoffee();

$allInOneMaker = new AllInOneCoffeeMaker();
$allInOneMaker->makeCoffee();
$allInOneMaker->makeLatte();
$allInOneMaker->makeCapuccino();