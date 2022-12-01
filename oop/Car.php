<?php

class Car extends Vehicle
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getInfo(): array
    {
        return parent::getInfo();
    }

}
