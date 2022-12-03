<?php


class Display
{
    private string $tela;
    private int $canal;


    public function __construct()
    {
        $this->tela = "desligada";
        $this->canal = 0;
    }

    public function turnOn(): string
    {
       if($this->tela == "desligada"){
        $this->tela = 'ligada';
        return $this->tela . "\n";
        }
        return 'já está ligada...' . "\n";
    }

    public function turnOff(): string
    {
        if($this->tela == "ligada"){
            $this->tela = "desligada";
            return $this->tela . "\n";
        } 
        return 'já está desligada...' . "\n";
    }

    public function canalMais(): string
    {
        if ($this->tela == "desligada") {
            return "Primeiro ligue para podermos trocar de canal...";
        }

        return $this->canal += 1;
    }

    public function canalMenos(): string
    {
        if ($this->tela == "desligada") {
            return "Primeiro ligue para podermos trocar de canal...";
        }

        return $this->canal -= 1;
    }


    public function getInfo(): array
    {
        return [
            'tela' => $this->tela,
            'canal' => $this->canal
        ];
    }

}




