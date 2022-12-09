<?php

class Tv extends Display implements AudioEnable, Hdmi
{
    // sintonizar canais de TV
    private int $volume;

    public function __construct()
    {
        $this->volume = 0;
        parent::__construct();
    }

    public function audioUp(): int
    {   
        if (!$this->engine->getStatus()) {
            echo "Primeiro ligue a TV para podermos aumentar o volume... \n";
            return $this->volume = 0;
        }

        return $this->volume += 1;

    }

    public function audioDown(): int
    {
        if (!$this->engine->getStatus()) {
            echo "Primeiro ligue a TV para podermos baixar o volume... \n";
            return $this->volume = 0;
        }
        return $this->volume -= 1 . "\n";
    }

    public function hdmi(): string
    {
        return $this->entrada = 'Entrada HDMI';
    }

    public function getInfo(): array
    {
        return [
            'volume' => $this->volume,
            'entrada' => $this->entrada
        ];
    }
}