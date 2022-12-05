<?php

class Tv extends Display implements AudioEnable
{
    // sintonizar canais de TV
    private int $volume;

    public function __construct()
    {
        $this->volume = 0;
    }

    public function volumeMais(): int
    {
        if (!$this->display->getStatus()) {
            echo "Primeiro ligue a TV para podermos trocar de canal... \n";
            return 0;
        }

        return $this->volume += 1;
    }

    public function volumeMenos(): int
    {
        if (!$this->display->getStatus()) {
            echo "Primeiro ligue a TV para podermos trocar de canal... \n";
            return 0;
        }

        return $this->volume -= 1;
    }

    public function getInfo(): array
    {
        return [
            'volume' => $this->volume,
            'tela' => $this->getStatus()
        ];
    }

}