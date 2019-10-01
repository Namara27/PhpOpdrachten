<?php

class Radioprogramma
{
    private $ProgrammaNaam = "";
    private $Omschrijving = "";
    private $Liedjes = array();

    public function voegLiedjeToe($liedje)
    {
        $this->Liedjes[] = $liedje;
    }

    public function getLiedjes()
    {
        return $this->Liedjes;
    }

    public function getRadioprogramma()
    {
        return array("ProgrammaNaam" => $this->ProgrammaNaam, "Omschrijving" => $this->Omschrijving);
    }

    public function setProgrammaNaam($n)
    {
        if (strlen($n) >= 2) {
            $this->ProgrammaNaam = $n;
        }
    }

    public function SetOmschrijving($o)
    {
        $this->Omschrijving = $o;
    }
}