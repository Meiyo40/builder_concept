<?php

require_once ("House.php");
require_once ("HouseBuilder.php");

$houseBuilder = new HouseBuilder();
$myHome = $houseBuilder->create()
    ->buildWalls(4)
    ->buildBathrooms(2)
    ->buildSurface(200)
    ->buildChambers(4)
    ->buildRooms(1)
    ->buildWC(2)
    ->get();

echo $myHome->toString();

$houseBuilder = new HouseBuilder();
$myHome = $houseBuilder->create()
    ->buildWalls(8)
    ->buildSurface(153)
    ->buildChambers(2)
    ->buildRooms(1)
    ->get();

echo $myHome->toString();