<?php


class House
{
    private $walls;
    private $doors;
    private $roofs;
    private $rooms;
    private $chambers;
    private $wc;
    private $bathrooms;
    private $surface;

    /**
     * @return mixed
     */
    public function getWalls()
    {
        return $this->walls;
    }

    /**
     * @param mixed $walls
     */
    public function setWalls($walls)
    {
        $this->walls = $walls;
    }

    /**
     * @return mixed
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * @param mixed $doors
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;
    }

    /**
     * @return mixed
     */
    public function getRoofs()
    {
        return $this->roofs;
    }

    /**
     * @param mixed $roofs
     */
    public function setRoofs($roofs)
    {
        $this->roofs = $roofs;
    }

    /**
     * @return mixed
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * @param mixed $rooms
     */
    public function setRooms($rooms)
    {
        $this->rooms = $rooms;
    }

    /**
     * @return mixed
     */
    public function getChambers()
    {
        return $this->chambers;
    }

    /**
     * @param mixed $chambers
     */
    public function setChambers($chambers)
    {
        $this->chambers = $chambers;
    }

    /**
     * @return mixed
     */
    public function getWc()
    {
        return $this->wc;
    }

    /**
     * @param mixed $wc
     */
    public function setWc($wc)
    {
        $this->wc = $wc;
    }

    /**
     * @return mixed
     */
    public function getBathrooms()
    {
        return $this->bathrooms;
    }

    /**
     * @param mixed $bathrooms
     */
    public function setBathrooms($bathrooms)
    {
        $this->bathrooms = $bathrooms;
    }

    /**
     * @return mixed
     */
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * @param mixed $surface
     */
    public function setSurface($surface)
    {
        $this->surface = $surface;
    }

    public function toString() : string
    {
        $data = "\n";

        foreach (get_object_vars($this) as $prop => $val)
        {
            if(isset($val))
            {
                $data = $data." ". $prop . ": " . $val . ",\n";
            }
        }
        return $data;
    }
}