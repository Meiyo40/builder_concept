<?php


interface iBuildingBuilder
{
    public function buildWalls(int $nbWalls) : iBuildingBuilder;
    public function buildDoors(int $nbDoors) : iBuildingBuilder;
    public function buildRoofs(int $nbRoofs) : iBuildingBuilder;
    public function buildRooms(int $nbRooms) : iBuildingBuilder;
    public function buildWC(int $nbWC) : iBuildingBuilder;
    public function buildBathrooms(int $nbBathrooms) : iBuildingBuilder;
    public function buildSurface(int $surface) : iBuildingBuilder;
}