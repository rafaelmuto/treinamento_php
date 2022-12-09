<?php

class Monitor extends Display implements Hdmi
{
    private int $Hz;

    public function __construct($taxaAtt)
    {
        // parent display -> $asd
        $this->Hz = $taxaAtt;
        parent::__construct();
    }

    public function desempenhoGames(): void
    {
        if($this->Hz == 30){
            echo "Desempenho dos Games em 30Hz\n" . "Call of Duty: Ruim \n" . "God of War: Ruim \n" . "Counter Strike: Ruim \n";
        } elseif($this->Hz >= 60 and $this->Hz <= 75){
            echo "Desempenho dos Games em 60Hz a 75Hz \n" . "Call of Duty: Bom \n" . "God of War: Bom \n" . "Counter Strike: Mediano \n";
        } else if($this->Hz >= 120 and $this->Hz <= 144){
            echo "Desempenho dos Games em 120Hz a 144Hz \n" . "Call of Duty: Muito bom \n" . "God of War: Excelente \n" . "Counter Strike: Muito bom \n";
        }
    }

    // diferentes tipos de jogos e seus desempenhos comparado aà taxa de att do monitor. Não se esqueça de ligar ele

    public function hdmi(): string
    {
        return $this->entrada = 'Entrada HDMI';
    }


    public function getInfo(): array
    {
        return [
            'Hz' => $this->Hz,
            'entrada' => $this->entrada
        ];
    }

}