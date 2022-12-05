<?php

class Tv extends Display implements AudioEnable
{
    // sintonizar canais de TV
    private int $volume;

    public function __construct()
    {
        $this->volume = 0;
        parent::__construct();
    }

    public function volumeMais(): int
    {   
        if (!$this->engine->getStatus()) {
            echo "Primeiro ligue a TV para podermos trocar de canal... \n";
        }

        return $this->volume += 1;
    }

    public function volumeMenos(): bool
    {
        if (!$this->engine->getStatus()) {
            echo "Primeiro ligue a TV para podermos trocar de canal... \n";
        }

        return $this->volume -= 1;
    }

    public function getInfo(): array
    {
        return [
            'volume' => $this->volume
        ];
    }
}
