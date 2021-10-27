<?php

require_once ("House.php");
require_once ("iBuildingBuilder.php");


class HouseBuilder implements iBuildingBuilder
{
    private House $house;

    public function create() : HouseBuilder
    {
        $this->house = new House();
        return  $this;
    }

    public function get() : House
    {
        return $this->house;
    }

    public function buildWalls(int $newWalls) : HouseBuilder
    {
        $nbWalls = $this->house->getWalls();
        $this->house->setWalls($nbWalls + $newWalls);
        return $this;
    }

    public function buildDoors(int $newDoors) : HouseBuilder
    {
        $nbItems = $this->house->getDoors();
        $this->house->setDoors($nbItems + $newDoors);
        return $this;
    }

    public function buildRoofs(int $newRoofs) : HouseBuilder
    {
        $nbItems = $this->house->getRoofs();
        $this->house->setRoofs($nbItems + $newRoofs);
        return $this;
    }

    public function buildRooms(int $newRooms) : HouseBuilder
    {
        $nbItems = $this->house->getRooms();
        $this->house->setRooms($nbItems + $newRooms);
        return $this;
    }

    public function buildChambers(int $newChambers) : HouseBuilder
    {
        $nbItems = $this->house->getChambers();
        $this->house->setChambers($nbItems + $newChambers);
        return $this;
    }

    public function buildWC(int $newWC) : HouseBuilder
    {
        $nbItems = $this->house->getWc();
        $this->house->setWc($nbItems + $newWC);
        return $this;
    }

    public function buildBathrooms(int $newBathrooms) : HouseBuilder
    {
        $nbItems = $this->house->getBathrooms();
        $this->house->setBathrooms($nbItems + $newBathrooms);
        return $this;
    }

    public function buildSurface(int $newDoors) : HouseBuilder
    {
        $nbItems = $this->house->getSurface();
        $this->house->setSurface($nbItems + $newDoors);
        return $this;
    }
}