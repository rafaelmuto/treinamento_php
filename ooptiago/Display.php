<?php


abstract class Display
{
    private Engine $engine;


    public function __construct()
    {
        $this->engine = new Engine();
    }

    public function turnOn(): void
    {
        if (!$this->engine->getStatus()) {
            $this->engine->on();
        } else {
            echo 'Ela já está ligada';
        }
    }

    public function turnOff(): void
    {
        if ($this->engine->getStatus()) {
            $this->engine->off();
        } else {
            echo 'Ela está desligada...';
        }
    }

    public function getInfo(): array
    {
        return [
            'tela' => $this->engine->getStatus()
        ];
    }
}
