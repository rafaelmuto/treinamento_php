<?php

class Monitor extends Display
{
    private int $Hz;

    public function __construct($taxaAtt)
    {
        // parent display -> $asd
        $this->Hz = $taxaAtt;
    }


    // diferentes tipos de jogos e seus desempenhos comparado aà taxa de att do monitor. Não se esqueça de ligar ele

    public function isDisplayGamer(): string
    {
        return "Ola";
    }

}