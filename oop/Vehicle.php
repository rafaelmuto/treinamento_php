<?php

abstract class Vehicle implements Drivable
{
    private Engine $engine;
     private int $gas_tank;

    public function __construct(int $engine_size)
    {
        $this->engine = new Engine($engine_size);
        $this->gas_tank = 100;
    }

    public function turnOn(): void
    {
        if ($this->gas_tank > 0) {
            $this->engine->start();
        }
    }

    public function turnOff(): void
    {
        $this->engine->stop();
    }

    public function addGas(int $amount): void
    {
        $this->gas_tank += $amount;
    }

    public function drive(int $distance): int
    {
        if(!$this->engine->getStatus()){
            echo "the engine is off...\n";
            return 0;
        }

        $distance_traveled = 0;
        while($this->gas_tank > 0 && $distance_traveled < $distance ) {
            $distance_traveled++;
            $this->gas_tank -= $this->engine->getDisplacement();
        }

        echo "drove: " . $distance_traveled . "km \n";

        if($this->gas_tank <= 0) {
            $this->gas_tank = 0;
            echo "OUT OF GAS =( \n";
        }

        return $distance_traveled;
    }

    public function getInfo(): array
    {
        return [
            'engine' => $this->engine->getInfo(),
            'gas_tank' => $this->gas_tank
        ];
    }
}
