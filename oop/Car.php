<?php

class Car extends Vehicle implements Trackable, Drivable
{
    private int $odometer;

    public function __construct(int $engine_size)
    {
        $this->odometer = 0;
        parent::__construct($engine_size);
    }

    public function drive(int $distance): int
    {
        $traveled_distance = parent::drive($distance);

        $this->odometer += $traveled_distance;

        return $traveled_distance;
    }

    public function getInfo(): array
    {
        $info = parent::getInfo();

        $info['odometer'] = $this->odometer;

        return $info;
    }

    public function getLocation(): string
    {
        return "the " . get_class($this) . " is at " . $this->odometer . "km";
    }
}


class Moto extends Vehicle implements Trackable
{
    public function getLocation(): string
    {
        return "the " . get_class($this) . " esta aqui";
    }
}


class Cachorro implements Trackable
{
    public function getLocation(): string
    {
        return "the " . get_class($this) . " esta aqui";
    }
}
