<?php

class Engine
{
    private bool $status;

    public function __construct()
    {
        $this->status = false;
    }

    public function getStatus(): bool
    {
        return $this->status;
    }

    public function on(): void
    {
        $this->status = true;
        echo "Barulho de TV ligando !!! \n";
    }

    public function off(): void 
    {
        $this->status = false;
        echo "Barulho de TV desligando... \n";
    }

    public function getInfo(): array
    {
        return [
            'status' => $this->status
        ];
    }

}