<?php

abstract class Vehicle implements Drivable
{
    private Engine $engine;
     private int $gas_tank;

    public function __construct()
    {
        $this->engine = new Engine(1);
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

    public function drive(int $distance): void
    {
        $gas_used = $distance * $this->engine->getDisplacement();

        $this->gas_tank -= $gas_used;

        if($this->gas_tank < 0) {
            $this->gas_tank = 0;
            echo 'OUT OF GAS =(';
        }
    }

    public function getInfo(): array
    {
        return [
            'engine' => $this->engine->getInfo(),
            'gas_tank' => $this->gas_tank
        ];
    }
}
